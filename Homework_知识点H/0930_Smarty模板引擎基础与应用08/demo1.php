<?php
session_start();
//Smarty中的变量与函数

// 1加载配置
require  __DIR__ . '/config/config.php';

$name = 'peter zhu'; //标量

$courses = ['html','css','javascript','php']; //数组

class Test
{
    public $site = 'php中文网';
    public function welcome()
    {
        return '欢迎来到' . $this->site;
    }
}

$price = 100;

$test = new  Test();

const SITE = 'www.php.cn';

//系统变量不需要进行模板赋值
$_POST['user_name'] = '超级管理员';
//$_GET['page'] = 10;
$_SESSION['password'] = sha1('123456');


function add($a, $b)
{
    return $a+$b;
}

// 2模板赋值
//$smarty->assign('模板中的变量名称', 变量名);
$smarty->assign('myName', $name);
$smarty->assign('courses', $courses);
$smarty->assign('test', $test);
$smarty->assign('price', $price);


// 3渲染模板
//$smarty->display('temp/demo1.html');
$smarty->display('demo1.html');