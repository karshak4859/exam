<?php
/**
 * Created by PhpStorm.
 * User: andrejkarshakevich
 * Date: 11/14/18
 * Time: 3:18 PM
 */

namespace application\controllers;


use application\core\Controller;

class TaskController extends Controller
{
    public function indexAction()
    {
        $pdo = new \PDO('mysql:host=test-mariadb;dbname=db', 'root', 'password');
        $stmt = $pdo->prepare('SELECT * from tasks');
        $stmt->execute();
        $all = $stmt->fetchAll();

        $vars = [
            'allParam' => $all,
        ];

        $this->view->render('главная страница', $vars);

    }

    public function createAction()
    {

    }

}