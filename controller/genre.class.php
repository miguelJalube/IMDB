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
                        $url[0] = '/genre/'.$this->params[2].'/movies?'.LANGUAGE;
                        $request = new \model\request($url,array('Movie'),true);
                        $data = $request->execute();
                        require_once('view/movies.view.php');
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
