<?php

namespace controller;

class Discover{
	private $params;
        private $search;
	
	public function __construct($arg, $search){
		$this->params = $arg;
                $this->search = str_replace(' ', '%20', $search);
	}
	
        public function multi(){
            try{
                    if(is_string($this->search)){
                        $url[0] = '/search/multi?'.LANGUAGE.'&query='.$this->search;
                        $request = new \model\Request($url,array('Multi'));
                        $data = $request->execute();
                        require_once('view/multi.view.php');
                    }else{
                        require_once('view/template/header.php');
                        $data = \controller\Error::getType(__CLASS__);
                        require_once('view/error.view.php');
                        require_once('view/template/footer.php');
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
        }
        
	private function movies(){
		try{
                    if(is_string($this->search)){
                        $url[0] = '/search/movie?query='.$this->search;
                        $request = new \model\Request($url,array('Movie'));
                        $data = $request->execute();
                        require_once('view/movies.view.php');
                    }else{
                        \controller\Error::getType(__CLASS__);
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
        
	private function persons(){
		try{
                    if(is_string($this->search)){
                        $url[0] = '/search/person?query='.$this->search;                          
                        $request = new \model\Request($url,array('Person'));
                        $data = $request->execute();
                        require_once('view/persons.view.php');
                    }else{
                        \controller\Error::getType(__CLASS__);
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
}

?>