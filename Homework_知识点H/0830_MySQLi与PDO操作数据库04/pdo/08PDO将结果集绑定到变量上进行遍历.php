<?php
/**
 * PDO 预处理查询
 */

//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//准备SQL语句,占位符我们不再用?,用"命名占位符"
$sql = "SELECT `name`,`email`  FROM `user` WHERE `id` < :id";

//创建预处理对象
$stmt = $pdo->prepare($sql);

//执行查询
$stmt->execute(['id'=>5]);

//将结果集中的列绑定到变量上
$stmt->bindColumn('name', $name);
$stmt->bindColumn('email', $email);

//用列变量来遍历结果集
while ($stmt->fetch(PDO::FETCH_BOUND)) {
    echo '姓名: ',$name, ',  邮箱: ', $email, '<br>';
}