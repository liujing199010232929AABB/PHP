<?php
//登录成功页面

//判断用户是否登录?
if (!isset($_COOKIE['id'])) {
    require 'inc/function.php';
    redirect_user();
}

$page_title = '登录成功';
//导入页面的公共头部
include 'inc/header.php';

//heredoc
echo <<< "WELCOME"
<h2 style="color:red">登录成功</h2>
<p>欢迎您: 亲爱的 {$_COOKIE['name']}</p>
<p><a href="logout.php">退出</a></p>
WELCOME;



//导入页面的公共底部
include 'inc/footer.php';