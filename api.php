<?php
include_once 'autoloader.php';
include_once 'vendor'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'config.php';
$usersStore = new \models\Store();
$allUsers = $usersStore->allUser();
core\Response::sendJSON($allUsers);
