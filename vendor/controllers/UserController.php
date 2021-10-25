<?php
namespace controllers;
use core\View;
use models\Store;
use core\Route;

class UserController{
    public function index(){
        $view = new View('index_index');
        $view->render();

    }
}