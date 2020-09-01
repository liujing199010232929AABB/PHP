<?php
//启动会话
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //加载函数库
    require 'inc/function.php';

    //连接数据库
    require 'inc/connect.php';

    //验证登录
    list($check, $data) = check_login($dbc,$_POST['email'],$_POST['password']);

    //检测是否验证通过
    if ($check) {
        //设置session

        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        //跳转
        redirect_user('loggedin.php');
    } else {
        $errors = $data;
    }

    //关闭
    mysqli_close($dbc);
}

include 'login_page.php';