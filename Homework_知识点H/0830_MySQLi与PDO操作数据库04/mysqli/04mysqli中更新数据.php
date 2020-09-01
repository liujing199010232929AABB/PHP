<?php
/**
 * 更新数据
 */

//连接数据库
require '01mysqli数据库连接.php';

//准备SQL语句:带有占位符
$sql = "UPDATE `staff` SET `salary`= ? WHERE `id`=?;";

//创建一个SQL语句的预处理对象
$stmt = $mysqli->prepare($sql);

//参数绑定
$salary = 9999;
$id = 25;
$stmt->bind_param('ii',$salary, $id);

//执行SQL语句
    if ($stmt->execute()) {
        //执行成功

        //检测是否有数据被新增
        if ($stmt->affected_rows > 0) {
            echo '<br>成功的更新'.$stmt->affected_rows.' 条记录';
        } else {
            echo '<br>没有更新记录';
        }
    } else {
        exit($stmt->errno. ':' .$stmt->error);
    }


//注销stmt对象
$stmt->close();

//关闭连接
$mysqli->close();