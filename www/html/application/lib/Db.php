<?php

namespace application\lib;

class Db {
    protected $db;

    public function __construct()
    {
        $config = require 'applocation/config/db.php';
        new \PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
    }
}