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

// 一次性取出
//$rows = $stmt->fetchAll();
//foreach ($rows as $row) {
//    echo 'name: ',$row['name'],',   email: ',$row['email'],'<br>';
//}

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo var_export($row),'<br>';
}
