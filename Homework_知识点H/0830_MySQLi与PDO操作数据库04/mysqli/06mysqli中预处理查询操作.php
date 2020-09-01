<?php
/**
 * 预处理查询操作
 */

//连接数据库
require '01mysqli数据库连接.php';

//准备SQL语句
$sql = "SELECT `id`,`name`,`salary`  FROM `staff` WHERE `salary` > ? ;";

// 创建预处理对象
$stmt = $mysqli->stmt_init();

if ($stmt->prepare($sql)) {
    //绑定参数
    $stmt->bind_param('i', $salary);

    //设置参数
    $salary = 5000;

    if ($stmt->execute()) {

        //获取结果集并放到缓存区
        $stmt->store_result();

        //将结果集中的列绑定到变量上
        $stmt->bind_result($id,$name, $salary);

        //结果集是否不为,只有不为空的时候才遍历
        if ($stmt->num_rows > 0) {
            // 循环遍历结果集
            // fetch()每次获取一条记录，并将指针自动下移
            while ($stmt->fetch()) {
                echo '<p>id:'.$id.'---姓名:' .$name.'---工资:'.$salary.'</p>';
            }
        } else {
            exit('<p>当前表中没有数据</p>');
        }

        // 释放结果集
        $stmt->free_result();
    } else {
        //返回执行阶段的出错信息
        exit($stmt->errno. ': ' . $stmt->error);
    }
} else {
    //返回sql语句检测阶段的出错信息
    exit($stmt->errno. ': ' . $stmt->error);
}


//注销stmt对象
$stmt->close();

//关闭连接
$mysqli->close();