<?php
/**
 * PDO 预处理查询
 */

//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//准备SQL语句,占位符我们不再用?,用"命名占位符"
$sql = "SELECT `id`,`name`,`email`  FROM `user` WHERE `id` < :id";

//创建预处理对象
$stmt = $pdo->prepare($sql);

//执行查询
$stmt->execute(['id'=>5]);

//获取一行一列,无法获取同一行其它列
//echo $stmt->fetchColumn(0),'<br>';
//指针自动下移，获取二行２列
//echo $stmt->fetchColumn(1),'<br>';

$stmt = $pdo->prepare("select * from staff where salary > :salary");
$stmt->execute(['salary'=>6000]);
// 结果看上去是正确的，但是是有问题的，不要这样做
echo '工资大于6000的人数: '. $stmt->rowCount();

echo '<hr>';

$stmt = $pdo->prepare("select count(*) from staff where salary > :salary");
$stmt->execute(['salary'=>6000]);
echo '工资大于6000的人数: '. $stmt->fetchColumn();