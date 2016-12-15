<?php

namespace controller;

class Person{
	private $params;
	
	public function __construct($arg){
		$this->params = $arg;
	}
	
	public function show(){
		try{
                    if(is_numeric($this->params[2])){
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'?'.LANGUAGE;
                        $request = new \model\request($url,array('Person'));
                        $data = $request->execute();
                        require_once('view/person.view.php');
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