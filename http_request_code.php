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
