<?php
/**
 * 新增记录
 */

//1连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//2创建预处理对象
$stmt = $pdo->prepare("INSERT `user` SET `name`= :name , `email`= :email, `password`= sha1(:password)");

//3.执行添加
$stmt->execute(['name'=>'金轮法王1','email'=>'yzp@php.cn','password'=>'123']);
$stmt->execute(['name'=>'金轮法王2','email'=>'yzp@php.cn','password'=>'123']);
$stmt->execute(['name'=>'金轮法王3','email'=>'yzp@php.cn','password'=>'123']);
$stmt->execute(['name'=>'金轮法王4','email'=>'yzp@php.cn','password'=>'123']);
$stmt->execute(['name'=>'金轮法王5','email'=>'yzp@php.cn','password'=>'123']);
echo '<h3>成功添加了'.$stmt->rowCount().'条记录</h3>';
