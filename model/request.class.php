<?php

namespace model;

class Request {

    private $content = array();
    private $typeObj = array();

    public function __construct($url, $typeObj) {
        foreach ($url as $v) {
            $this->content[] = json_decode(file_get_contents(URL . $v . API));
        }
        foreach($typeObj as $v){
            $this->typeObj[] = '\\model\\'.$v;
        }
    }

    public function execute() {
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
            }
            else {
                $array[$key][] = new $this->typeObj[$key]($value);
            }
        }
        
        return $array;
    }
}

?>