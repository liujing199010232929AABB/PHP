<?php
/**
 * 更新记录
 */

//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//准备SQL语句,占位符我们不再用?,用"命名占位符"
$sql = "UPDATE `user` SET `email`= :email WHERE `id`= :id";

//创建预处理对象
$stmt = $pdo->prepare($sql);


$stmt->execute(['email'=>'yzf@qq.com','id'=>5]);
    echo '<h3>成功更新了'.$stmt->rowCount().'条记录</h3>';


$stmt = null;
// 关闭连接
$pdo = null;