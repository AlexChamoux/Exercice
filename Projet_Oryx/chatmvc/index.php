<?php

session_start();

function loadClass($class){
    if (strpos($class, "Controller" )!== FALSE){
        require 'controllers/' . $class . '.php';
    }
    if (strpos($class, "Model" )!== FALSE){
        require 'models/' . $class . '.php';
    }
}

spl_autoload_register('loadClass');

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
error_log(print_r($_GET, 1));

$param = explode ('/', $_GET['action']);

if (isset($param[1])){
    $controller = $param[0] . "Controller";
    $method = $param[1];

    $oController = new $controller();

    if(method_exists($oController, $method) == TRUE){
        $oController->$method();
    }else{
        http_reponse_code(404);
        echo "La page recherchée n'existe pas...";
    }
        
}else{
    $oController = new loginController();
    $oController->loginIndex();
}

?>