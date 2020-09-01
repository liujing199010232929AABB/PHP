<?php
/**
 * 删除记录
 */

//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//准备SQL语句,占位符我们不再用?,用"命名占位符"
$sql = "DELETE FROM `user` WHERE `id`= :id";

//创建预处理对象
$stmt = $pdo->prepare($sql);


if ($stmt->execute(['id'=>11])) {
    // rowCount(): 返回受影响的记录数量
    echo '<h3>成功删除了'.$stmt->rowCount().'条记录</h3>';
} else {
    echo '<h3>无删除</h3>';
    print_r($stmt->errorInfo());
    exit();
}

$stmt = null;
// 关闭连接
$pdo = null;