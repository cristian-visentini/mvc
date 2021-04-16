<?php
class Controller{
    public function loadView($ViewName, $ViewData = array()){
        require 'views/'.$ViewName.'.php';
    }

    public function loadTemplate($ViewName, $ViewData = array()){
        require 'views/template.php';
    }

    public function loadViewTemplate($ViewName, $ViewData = array()){
        extract($ViewData);
         
        require 'views/'.$ViewName.'.php';
    }
}