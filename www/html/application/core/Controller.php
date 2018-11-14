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
    }
}