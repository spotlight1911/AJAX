<?php
include_once 'autoloader.php';
include_once 'vendor'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'config.php';
$usersStore = new \models\Store();
$users = $usersStore->allUser();
core\Response::sendJSON($users);
