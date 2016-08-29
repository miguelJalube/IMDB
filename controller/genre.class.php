<?php

namespace controller;

class Genre{
	private $params;
	
	public function __construct($arg){
		$this->params = $arg;
	}
	
	public function movies(){
		try{
                    if(is_numeric($this->params[2])){
                        $url[0] = '/genre/'.$this->params[2].'/movies?';
                        $request = new \model\request($url,array('Movie'),true);
                        $data = $request->execute();
                        require_once('view/movies.view.php');
                    }else{
                        \controller\Error::getType(__CLASS__);
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
}

?>
