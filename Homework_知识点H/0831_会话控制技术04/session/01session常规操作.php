<?php
// session

// 开启会话,在浏览上创建一个基于cookie的session_id
session_start();

//创建sessoin
$_SESSION['user_name'] = 'admin';
$_SESSION['user_id'] = 120;

//更新
$_SESSION['user_name'] = 'peter zhu';

// 查看
echo $_SESSION['user_name'];

//删除
session_destroy(); //服务器上的sessoin删除了

setcookie('PHPSESSID','',time()-3600); //浏览器上的session_id删除