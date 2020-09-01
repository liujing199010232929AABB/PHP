<?php
/**
 * 框架入口文件
 * 首页
 */

require './controller/Controller.php';
use mvc\controller\Controller;
$controller = new Controller;
$controller->index();
