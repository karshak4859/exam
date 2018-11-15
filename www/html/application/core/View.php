<?php

namespace application\core;


class View
{
    public $path;
    public $layout = 'default';
    public $rout ;
    public function __construct($rout){
        $this->rout=$rout;
        $this->path = $rout['controller'].'/'.$rout['action'];
    }

    public function render($title, $vars=[]){
        extract($vars);
        ob_start();
        require 'application/views/'.$this->path. '.php';
        $content = ob_get_clean();
        require 'application/views/layouts/'.$this->layout.'.php';
    }
    public static function errorCode($code){
        http_response_code($code);
        require 'application/views/errors/'.$code.'.php';
        exit;
    }
}