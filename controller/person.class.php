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
                        $url[0] = '/'.$this->params[0].'/'.$this->params[2].'?';
                        $request = new \model\request($url,array('Person','Movie'));
                        $data = $request->execute();
                        require_once('view/person.view.php');
                    }else{
                        \controller\Error::getType(__CLASS__);
                    }
		}
		catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
}

?>