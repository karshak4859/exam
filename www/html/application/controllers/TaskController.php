<?php
/**
 * Created by PhpStorm.
 * User: andrejkarshakevich
 * Date: 11/14/18
 * Time: 3:18 PM
 */

namespace application\controllers;


use application\core\Controller;
use application\lib\Db;

class TaskController extends Controller
{
    public function indexAction()
    {
        $db = new Db;
        $data = $db->row('SELECT * from tasks');


        $vars = [
            'allParam' => $data,
        ];

        $this->view->render('главная страница', $vars);

    }

    public function createAction()
    {

        $this->view->render('главная страница');

        $db = new Db;
        $params = [
            'task'=>$_POST['task'],
            'description'=>$_POST['description'],
            'dateCreate'=> $_POST['dateCreate']
        ];
        $data = $db->query('INSERT INTO tasks (task , description , dateCreate) 
                                VALUES (:task, :description, :dateCreate) ',$params);
        /*$pdo = new \PDO('mysql:host=test-mariadb;dbname=db', 'root', 'password');

        $stmt = $pdo->prepare("INSERT INTO tasks (task , description , dateCreate) VALUES (:task, :description, :dateCreate)");
        $stmt->bindValue('task', $_POST['task']);
        $stmt->bindValue('description', $_POST['description']);
        $stmt->bindValue('dateCreate', $_POST['dateCreate']);

        $stmt->execute();*/

    }
    public function deleteAction()
    {

    }

}