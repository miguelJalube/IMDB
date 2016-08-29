<?php

namespace controller;

class Error{
	public static function getType($type='controller/Home'){
            if  ($type = 'controller/Home'){
                $data = 'Erreur 404';
            }  elseif ($type = 'controller/Genre') {
                $data = 'Erreur 404';
            }  elseif ($type = 'controller/Movie') {
                $data = 'Erreur 404';
            }  elseif ($type = 'controller/Person') {
                $data = 'Erreur 404';
            }  elseif ($type = 'controller/Search') {
                $data = 'Erreur 404';
            }
            require_once('view/error.view.php');
	}
}

?>
