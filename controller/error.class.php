<?php

namespace controller;

class Error{
	public static function getType($type = null){
            if($type == 'controller\Home' || $type == null){
                $data = 'Erreur 404';
            }elseif ($type == 'controller\Genre') {
                $data = 'Not found genre';
            }elseif ($type == 'controller\Movie') {
                $data = 'Not found movie';
            }elseif ($type == 'controller\Person') {
                $data = 'Not found actor';
            }elseif ($type == 'controller\Multi') {
                $data = 'No results';
            }else{
                $data = 'error';
            }
            return $data;
	}
}

?>
