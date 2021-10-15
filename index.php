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
core\Route::init();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>

</div>
</body>
</html>