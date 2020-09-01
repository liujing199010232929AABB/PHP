<?php
/**
 * PDO PHP数据对象,是PHP操作所有数据库的抽象层,提供了一个统一的访问接口
 */

// 数据源:设置数据库的类型,以及数据库服务器和默认的数据库
$dsn = 'mysql:host=127.0.0.1; dbname=php';
//用户名
$user = 'root';
//密码
$pass = 'root';
//实例化PDO类,创建pdo对象,并完成了数据库的连接
try {

    $pdo = new PDO($dsn, $user, $pass);
//    echo '<h2>连接成功</h2>';

} catch (PDOException $e) {
    die('Connect ERROR! :'. $e->getMessage());
}

// 关闭连接
//$pdo = null;

//unset($pdo);
