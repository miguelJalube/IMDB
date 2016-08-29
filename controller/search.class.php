<?php

namespace controller;

class Search{
	private $params;
        private $search;
	
	public function __construct($arg, $search){
		$this->params = $arg;
                $this->search = $search;
	}
	
	public function movies(){
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
        
	public function persons(){
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
