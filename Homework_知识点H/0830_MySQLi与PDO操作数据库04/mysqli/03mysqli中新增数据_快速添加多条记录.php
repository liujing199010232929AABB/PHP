<?php
/**
 * 新增数据
 */

//连接数据库
require '01mysqli数据库连接.php';

//准备SQL语句:带有占位符
$sql = "INSERT IGNORE `staff` SET `name`= ?, `salary`= ?;";

//创建一个SQL语句的预处理对象
$stmt = $mysqli->prepare($sql);

//用数组准备要添加的数据
$data[] = ['name'=>'杨过','salary'=>4000];
$data[] = ['name'=>'小龙女','salary'=>5000];
$data[] = ['name'=>'金轮法王','salary'=>8000];


//参数绑定
$stmt->bind_param('si',$name,$salary);

foreach ($data as $staff) {
    //准备一下要插入的数据
    $name = $staff['name'];
    $salary = $staff['salary'];


//执行SQL语句
    if ($stmt->execute()) {
        //执行成功

        //检测是否有数据被新增
        if ($stmt->affected_rows > 0) {
            echo '<br>成功的插入'.$stmt->affected_rows.' 条记录,新增记录的主键id是: ' . $stmt->insert_id;
        } else {
            echo '<br>没有新增记录';
        }
    } else {
        exit($stmt->errno. ':' .$stmt->error);
    }
}

//注销stmt对象
$stmt->close();

//关闭连接
$mysqli->close();