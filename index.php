<?php
spl_autoload_register(function ($className){
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $classFile = 'vendor'.DIRECTORY_SEPARATOR.$className.'.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});
include_once 'vendor'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'config.php';

//include_once 'vendor'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'default.php';
$tmp = new \core\View('index_index');
$tmp->render();
//core\Route::init();