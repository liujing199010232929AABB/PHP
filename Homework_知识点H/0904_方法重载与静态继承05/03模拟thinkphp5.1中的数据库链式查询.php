<?php
/**
 * 方法重载的实战案例: 模拟ThinkPHP5.1中的数据库链式操作
 * 用方法重载实现方法跨类调用
 */

// Db::table()->fields()->where()->select();
require 'Query.php';
// 数据库操作的入口类
class Db
{
    public static function __callStatic($name, $arguments)
    {
        //call_user_func_array([类名, 方法],[])
        //call_user_func_array([对象, 方法],[])
        return call_user_func_array([(new Query()),$name],$arguments);
    }
}

$result = Db::table('staff')
            ->fields('id,name,age,salary')
            ->where('salary > 2000')
            ->select();
//print_r($result);
// 用表格将查询结果格式化输出
$table = '<table border="1" cellpadding="5" cellspacing="0" width="60%" align="center">';
$table .= '<caption style="font-size: 1.5rem;margin:15px;">员工信息表</caption>';
$table .= '<tr bgcolor="#90ee90"><th>ID</th><th>姓名</th><th>年龄</th><th>工资</th></tr>';

foreach ($result as $staff) {
    $table .= '<tr align="center">';
    $table .= '<td>'.$staff['id'].'</td>';
    $table .= '<td>'.$staff['name'].'</td>';
    $table .= '<td>'.$staff['age'].'</td>';
    $table .= '<td>'.$staff['salary'].'</td>';
    $table .= '</tr>';
}

$table .= '</table>';
$num = '<p style="text-align: center"> 共计:  <span style="color:red">'.count($result).'</span>   条记录</p>';
echo $table, $num;

