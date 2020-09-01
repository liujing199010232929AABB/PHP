<?php
// 连接数据库
$dbc = mysqli_connect('127.0.0.1','root','root','php');
//判断连接是否成功
if (mysqli_connect_errno()) {
    die('连接失败'.mysqli_connect_error());
}