<?php

namespace controller;

class Discover{
	private $params;
        private $search;
	
	public function __construct($arg, $search){
		$this->params = $arg;
                $this->search = str_replace(' ', '%20', $search);
	}
	
        public function movie(){
            try{
                if(is_string($this->search)){
                    $url[0] = '/discover/movie?'.LANGUAGE.'&query='.$this->search;
                    $request = new \model\Request($url,array('Movie'));
                    $data = $request->execute();
                    require_once('view/discoverMovie.view.php');
                }else{
                    require_once('view/template/header.php');
                    $data = \controller\Error::getType(__CLASS__);
                    require_once('view/error.view.php');
                    require_once('view/template/footer.php');
                }
            }
            catch (Exception $e) {
                echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
        
	public function tv(){
            try{
                if(is_string($this->search)){
                    $url[0] = '/discover/tv?'.LANGUAGE.'&query='.$this->search;
                    $request = new \model\Request($url,array('tv'));
                    $data = $request->execute();
                    require_once('view/discoverTv.view.php');
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