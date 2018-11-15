<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    public $rout;
    public $view;
    public function __construct($rout){
        $this->rout=$rout;
        $this->view= new View($rout);
        $this->loadModel($rout['controller']);
    }

    public function loadModel($name){
        $path = 'application/models/'.$name.'.php';
        //debug($path);
    }
}