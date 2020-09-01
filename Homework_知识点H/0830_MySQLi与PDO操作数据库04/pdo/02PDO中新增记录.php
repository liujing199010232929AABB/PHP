<?php
/**
 * 新增记录
 */

//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//准备SQL语句,占位符我们不再用?,用"命名占位符"
$sql = "INSERT `user` SET `name`= :name , `email`= :email, `password`= sha1(:password)";

//创建预处理对象
$stmt = $pdo->prepare($sql);

//绑定参数
$data = ['name'=>'杨过','email'=>'yg@php.cn','password'=>'123'];
$stmt->bindParam(':name',$data['name'],PDO::PARAM_STR);
$stmt->bindParam(':email',$data['email'],PDO::PARAM_STR);
$stmt->bindParam(':password',$data['password'],PDO::PARAM_STR);

if ($stmt->execute()) {
    // rowCount(): 返回受影响的记录数量
    echo '<h3>成功添加了'.$stmt->rowCount().'条记录</h3>';
} else {
    echo '<h3>添加失败</h3>';
    print_r($stmt->errorInfo());
    exit();
}

$stmt = null;
// 关闭连接
$pdo = null;