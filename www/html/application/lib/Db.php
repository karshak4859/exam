<?php

namespace application\lib;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password']);
        //$this->db = new \PDO('mysql:host=test-mariadb;dbname=db', 'root', 'password');
    }

    public function query($sql, $params = [])
    {
        $stmt= $this->db->prepare($sql);
        if(is_array($params) && count($params)) {
            foreach ($params as $key => $val) {
                $stmt->bindValue(':' . $key, $val);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = [])
    {
        $result = $this->query($sql,$params);
        return $result->fetchAll();
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
    public function insert()
    {

    }


}