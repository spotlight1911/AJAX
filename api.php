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
$users = [
    0 =>
        ['id'=>1,'name'=>'Vova', 'surname'=>'Pupko', 'way'=>'photo/ggg.gif'],
    1 =>
        ['id'=>2,'name'=>'ay', 'surname'=>'bol', 'way'=>'photo/fff.gif'],
];
core\Response::sendJSON($users);