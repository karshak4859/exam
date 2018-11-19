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
        if(isset($_POST['task']) && isset($_POST['description'])) {
            $params = [
                'task' => $_POST['task'],
                'description' => $_POST['description'],
                'dateCreate' => $_POST['dateCreate']
            ];
            $data = $db->query('INSERT INTO tasks (task , description , dateCreate)  
                                    VALUES (:task, :description, :dateCreate) ', $params);

        }



    }
    public function deleteAction()
    {
        $this->view->render('главная страница');
        $db = new Db;
        if(isset($_GET['id'])) {
            $params = [
                'id' => $_GET['id'],
            ];
            $data = $db->query('DELETE from tasks WHERE  id = :id', $params);

        }


    }
    public function editAction()
    {
        $db = new Db;
        if(isset($_GET['id'])) {
            $params = [
                'id' => $_GET['id'],
            ];
            $data = $db->column('SELECT * from tasks WHERE id=:id', $params);
            $vars = [
                'param' => $data,
            ];
            $this->view->render('главная страница', $vars);

            $db = new Db;
            if(isset($_POST['task']) && isset($_POST['description']) && isset($_POST['dateCreate'])){

                $params = [
                    'id'=>$_GET['id'],
                    'task' => $_POST['task'],
                    'description' => $_POST['description'],
                    'dateCreate' => $_POST['dateCreate']
                ];
                $stmt = $db->prepare("UPDATE tasks 
                             SET task= :task , description= :description, dateCreate=:dateCreate 
                             WHERE id= :id",$params);



            }
        }
        else{

            $this->view->render('главная страница');

        }


        //header("Location: /task/");


    }

}