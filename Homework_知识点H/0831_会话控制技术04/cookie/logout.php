<?php
//退出登录页面

//判断用户是否登录?
if (!isset($_COOKIE['id'])) {
    require 'inc/function.php';
    redirect_user();
} else {
    //退出登录,删除cookie
    setcookie('id','',time()-3600);
    setcookie('name','',time()-3600);
}


$page_title = '退出登录';
//导入页面的公共头部
include 'inc/header.php';

//heredoc
echo <<< "WELCOME"
<h2 style="color:red">退出成功</h2>

<p><a href="login.php">登录</a></p>
WELCOME;



//导入页面的公共底部
include 'inc/footer.php';