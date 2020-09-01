<?php
/**
 * 删除数据
 */

//连接数据库
require '01mysqli数据库连接.php';

//准备SQL语句:带有占位符
$sql = "DELETE FROM `staff`  WHERE `id`= ?;";

//创建一个SQL语句的预处理对象
$stmt = $mysqli->prepare($sql);

//参数绑定
$id = 26;
$stmt->bind_param('i',$id);

//执行SQL语句
if ($stmt->execute()) {
    //执行成功

    //检测是否有数据被新增
    if ($stmt->affected_rows > 0) {
        echo '<br>成功的删除'.$stmt->affected_rows.' 条记录';
    } else {
        echo '<br>没有删除记录';
    }
} else {
    exit($stmt->errno. ':' .$stmt->error);
}


//注销stmt对象
$stmt->close();

//关闭连接
$mysqli->close();