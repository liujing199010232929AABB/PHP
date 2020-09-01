<?php
/**
 * 数据库的连接
 */
//创建一个数据库连接,并返回mysqli对象
require 'config.php';
error_reporting(E_ALL ^E_WARNING);
//简化: 将连接参数转为变量或数组

$mysqli = new mysqli($db_host,$db_user,$db_pass, $db_name);

//判断是否连接成功?
if ($mysqli->connect_errno) {
    // 自定义错误提示信息
    die('连接错误'.$mysqli->connect_errno.': '. $mysqli->connect_error);
}

echo '<h1>连接成功</h1>';

// 设置默认数据库
//$mysqli->select_db($db_name);

//设置客户端默认的字符编码集
$mysqli->set_charset($db_charset);

// 将默认数据库在连接的时候，直接通过构造方法传入

