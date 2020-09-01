<?php
// 测试模型
require './model/Model.php';
use mvc\model\Model;
$model = new Model('php','root','root');
$model->select('staff', 10);
$result = $model->result;
//print_r($result);

require './view/View.php';
use mvc\view\View;
$view = new View($result);

$data = $view->getData();

$view->display($data);