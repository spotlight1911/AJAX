<?php
namespace controller;
use core\View;
use models\Store;

class UserController{
    public function index(){
        $users = new Store();
        $usersAll = $users->allUsers();
        $view = new View('index_index');
        $view->render($usersAll);
    }
}