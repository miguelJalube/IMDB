<?php

namespace controller;

class Movie{
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
                        $request = new \model\Request($url, array('Movie'));
                        $data = $request->execute();
                        
                        //videos
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/videos?'.LANGUAGE;
                        $request = new \model\Request($url,array('Video'));
                        $videos = $request->execute();
                        
                        //images
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/images?';
                        $request = new \model\Request($url,array('Image'));
                        $images = $request->execute();
                        
                        //actors
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'/credits?';
                        $request = new \model\Request($url,array('Credits'));
                        $credits = $request->execute();
                        
                        //view
                        require_once('view/movie.view.php');
                    }else{
                        require_once('view/template/header.php');
                        $data = \controller\Error::getType(__CLASS__);
                        require_once('view/error.view.php');
                        require_once('view/template/footer.php');
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
        
        public function ajax(){
		try{
                    $url[0] = '/discover/movie?sort_by=popularity.desc'.$this->search;
                    $request = new \model\Request($url, array('Movie'));
                    $data = $request->execute();
                    return $data;
		}catch(Exception $e){
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
                }
	}
}

?>