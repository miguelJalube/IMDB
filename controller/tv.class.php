<?php
namespace controller;
class Tv{
	private $params;
        private $search;
	
	public function __construct($arg, $search){
		$this->params = $arg;
                $this->search = $search;
	}
	
	public function show(){
		try{
                    if(is_numeric($this->params[2])){
                        
                        //data
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'?'.LANGUAGE;
                        $request = new \model\Request($url, array('Tv'));
                        $data = $request->execute();
                        
                        //videos
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/videos?'.LANGUAGE;
                        $request = new \model\Request($url,array('Video'));
                        $videos = $request->execute();
                        
                        //images
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/images?';
                        $request = new \model\Request($url,array('Image'));
                        $images = $request->execute();
                        
                        //acteurs
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/credits?';
                        $request = new \model\Request($url,array('Credits'));
                        $credits = $request->execute();
                       
                        require_once('view/tv.view.php');
                    }else{
                        require_once('view/template/header.php');
                        $data = \controller\Error::getType(__CLASS__);
                        require_once('view/error.view.php');
                        require_once('view/template/footer.php');
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
        
        public function season(){
		try{
                    if(is_numeric($this->params[2])){
                        
                        //data
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'?'.LANGUAGE;
                        $request = new \model\Request($url, array('Tv'));
                        $data = $request->execute();
                        
                        //season
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/season/'.$this->params[3].'?'.LANGUAGE;
                        $request = new \model\Request($url, array('Season'));
                        $season = $request->execute();
                       
                        //videos
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/season/'.$this->params[3].'/videos?'.LANGUAGE;
                        $request = new \model\Request($url,array('Video'));
                        $videos = $request->execute();
                        
                        require_once('view/season.view.php');
                    }else{
                        require_once('view/template/header.php');
                        $data = \controller\Error::getType(__CLASS__);
                        require_once('view/error.view.php');
                        require_once('view/template/footer.php');
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
}

?>