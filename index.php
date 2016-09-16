<?php
$ini_array = parse_ini_file('config.ini');

//  Expressions régilieres
define('PATTERN_IS_PARAM','/(page|query)/');

//  Définition des constantes et variables
define('URL',$ini_array['url']);
define('API',$ini_array['api']);
define('DOMAIN',$_SERVER['SERVER_NAME']);
define('METHOD',$_SERVER['REQUEST_METHOD']);
define('REQUEST_URL',substr($_SERVER['REQUEST_URI'], 1));
$urlArray = explode('/',REQUEST_URL);
define('PREFIX',array_shift($urlArray));
define('SITE_ROOT', 'http://'.DOMAIN.'/'.PREFIX);

//  Cherche le terme 'query' dans l'url
if(isset($urlArray[1])){
    $isQuery = preg_match(PATTERN_IS_PARAM,$urlArray[1]);
    $isQuery == 1 ? $urlArray[1] = stristr($urlArray[1], '?',true) : $urlArray[1] = $urlArray[1];
}

//  Verification des $_GET
if(!empty($_GET['page']))
    $urlParams = $_GET['page'];
elseif(!empty($_GET['query']))
    $urlParams = $_GET['query'];
else
    $urlParams = null;


//  Autoload
function __autoload($class_name){
    if(file_exists($class_name . '.class.php')){
        require_once $class_name . '.class.php';
    }
}

try{     
//  Affichage de la page
    if(!empty($urlArray[0])){
        $class = '\\controller\\'.ucfirst($urlArray[0]);
        if(!class_exists ($class) || !method_exists ($class,$urlArray[1])){
            \controller\Error::getType();
            exit();
        }
        $Controller = new $class($urlArray, $urlParams);
        echo $Controller->$urlArray[1]();
    } else{
	$class = '\\controller\\Home';
        $Controller = new $class();
        echo $Controller->show(NULL,1);
    } 
}
catch(Exception $e){
	echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
