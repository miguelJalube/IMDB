<?php
//Teste les requetes HTTP
require_once 'functions.php';

//Parcoure le fichier ini et le stocke dans un tableau
$ini_array = parse_ini_file('config.ini');

//  Expressions régilieres
define('PATTERN_IS_PARAM','/(\?)/');

//  Définition des constantes et variables
define('URL',$ini_array['url']);
define('API',$ini_array['api']);
define('DOMAIN',$_SERVER['SERVER_NAME']);
define('REQUEST_URL',substr($_SERVER['REQUEST_URI'], 1));
$urlArray = explode('/',REQUEST_URL);
define('PREFIX',array_shift($urlArray));
define('SITE_ROOT', 'http://'.DOMAIN.'/'.PREFIX);
define('LANGUAGE', '&language=fr-FR');

//  Cherche le terme 'query' dans l'url
if(isset($urlArray[1]) && $urlArray[1] != null){
    $isQuery = preg_match(PATTERN_IS_PARAM,$urlArray[1]);
    $isQuery == 1 ? $urlArray[1] = stristr($urlArray[1], '?',true) : $urlArray[1] = $urlArray[1];
}

//  Autoload
function my_autoloader($class){
    include_once (strtolower(str_replace('\\', '/', $class))). '.class.php';
}
spl_autoload_register('my_autoloader');

$urlParams = null;
if(isset($_GET)){
    foreach($_GET as $key => $value){
        $urlParams = $value;
    }
}

//  Affichage de la page
if($urlArray[0] != null){
    $class = '\\controller\\'.ucfirst($urlArray[0]);
    $method = $urlArray[1];
    
    if(!class_exists ($class) || !method_exists ($class,$method)){
        \controller\Error::getType();
        exit();
    }
    $Controller = new $class($urlArray, $urlParams);
    
    $Controller->$method();
}else{
    $class = '\\controller\\Home';
    $Controller = new $class();
    $Controller->show(NULL,1);
}
