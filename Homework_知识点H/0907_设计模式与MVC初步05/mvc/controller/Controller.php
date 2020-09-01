<?php
/**
 *控制器类
 */
namespace mvc\controller;
use mvc\model\Model;
use mvc\view\View;
class Controller
{
    public function index()
    {
        require './model/Model.php';

        $model = new Model('php','root','root');
        $model->select('staff', 10);
        $result = $model->result;


        require './view/View.php';

        $view = new View($result);

        $data = $view->getData();

        $view->display($data);
    }
}