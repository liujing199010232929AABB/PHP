<?php
$page_title = '我是首页';
//导入页面的公共头部
include 'inc/header.php';

echo '<h2 style="color:red">我是首页</h2>';
//判断用户是否登录?
if (isset($_COOKIE['id']) && basename($_SERVER['PHP_SELF']) != 'logout.php') {
    echo '<a href="logout.php">退出</a>';
} else {
    echo '<a href="login.php">登录</a>';
}

//导入页面的公共底部
include 'inc/footer.php';