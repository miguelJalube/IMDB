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
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'?';
                        $request = new \model\Request($url, array('Movie'));
                        $data = $request->execute();
                        require_once('view/movie.view.php');
                    }else{
                        \controller\Error::getType(__CLASS__);
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