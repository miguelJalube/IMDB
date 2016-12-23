<?php

namespace model;

class Request {

    private $content = array();
    private $typeObj = array();

    public function __construct($url, $typeObj) {
            foreach($typeObj as $v){
                $this->typeObj[] = '\\model\\'.$v;
            }
            foreach ($url as $v){                
                if(!http_request_code(URL.$v.API)){
                    $this->content = null;
                    $this->typeObj = null;
                }else{
                    $this->content[] = json_decode(file_get_contents(URL.$v.API));
                }
            }
    }

    /*Instancie les objets
     * /!\  Attention cette méthode est assez difficile à faire.
     *      Elle doit instancier un ou plusieurs objets dont les
     *      données sont stockées dans $this->content et les models
     *      qui seront instanciés sont stockés dans typeObj
     */
    public function execute() {
        if($this->content == null){
            $array = null;
        }else{
            $array = array();
            foreach ($this->content as $key => $value) {
                if (isset($value->results)) {
                    foreach ($value->results as $result) {
                      $array[$key][] = new $this->typeObj[$key]($result, true);
                    }
                }elseif(isset($value->cast)){
                    foreach ($value->cast as $result) {
                      $array[$key][] = new $this->typeObj[$key]($result, true);
                    }
                }elseif(isset($value->crew)){
                    foreach ($value->crew as $result) {
                      $array[$key][] = new $this->typeObj[$key]($result, true);
                    }
                }else{
                    $array[$key][] = new $this->typeObj[$key]($value);
                }
            }
        }
        return $array;
    }
}

?>