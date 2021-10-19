<?php
namespace core;

class View
{
    public $page;
    public $template;
    public function __construct($page, $template = 'default')
    {
        $this->template = $template;
        $this->page = $page;
    }
    public function render(){
        include_once 'vendor' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $this->template . '.php';
    }
}