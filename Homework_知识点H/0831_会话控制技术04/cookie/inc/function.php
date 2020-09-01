<?php
/**
 * 公共函数库
 */

//用户登录成功之后的跳转
function redirect_user($page='index.php')
{
    //默认的url
    $url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

    //如果有,去掉url右侧的斜线
    $url = rtrim($url, '/\\');

    //添加上当前脚本名称
    $url .= '/'.$page;

    //跳转到指定地址
    header('Location:' .$url);
    exit();
}

//验证用户登录
function check_login($dbc, $email='', $password)
{
    //初始一个保存错误信息的数组
    $errors = [];

    //非空验证
    if (empty($email)) {
        $errors[] = '邮箱不能为空';
    } else {
        $e = mysqli_real_escape_string($dbc,trim($email));
    }

    //非空验证
    if (empty($password)) {
        $errors[] = '密码不能为空';
    } else {
        $p = mysqli_real_escape_string($dbc,trim($password));
    }

    //到表中进行数据验证
    if (empty($errors)) {
        // 根据邮箱和密码进行验证,并返回id, name
        $sql = "SELECT `id`,`name` FROM `user` WHERE `email`='$e' AND `password`=sha1('$p')";

        //执行查询
        $res = mysqli_query($dbc, $sql);

        if (mysqli_num_rows($res) == 1) {
           $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            //返回查询结果
            return [true, $row];
        } else {
            $errors[] = '邮箱或密码不正确，请重新输入';
        }

        return [false, $errors];

    }

}