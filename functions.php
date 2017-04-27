<?php
function http_request_code($url){
    @file_get_contents($url);
    if(preg_match('/(404)/',$http_response_header[0])){
        $return = FALSE;
    }else{
        $return = TRUE;
    }
    return $return;
}

function dateFormat($arg){
    if($arg != null && $arg!=''){
        $date = new \DateTime($arg);
        $return = $date->format('d.m.Y');
    }else{
        $return = '';
    }
    
    return $return;
}

function brokenImg($link, $width){
    if($link != null && $link != ''){
        $return = 'http://image.tmdb.org/t/p/w'.$width.$link;
    }else{
        $image = $width.'.jpg';
        $return = '../view/images/'.$image;
    }
    return $return;
}

function mediaTrnslt($arg){
    if($arg == 'movie'){
        $return = 'Film';
    }elseif($arg == 'tv'){
        $return = 'Série';
    }elseif($arg == 'person'){
        $return = 'Acteur';
    }else{
        $return = $arg;
    }
    
    return $return;
}