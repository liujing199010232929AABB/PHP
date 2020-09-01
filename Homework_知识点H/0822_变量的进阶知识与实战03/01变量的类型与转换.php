<?php
echo '<h3>变量的类型与转换</h3>';
// 标量: 单值变量, 数值(整数,浮点),字符串,布尔(true/false),基本数据类型
// 复合类型: 多值变量,数组 Array, 对象Object
// 特殊类型: 资源,null

$age = 30;  // Integer
$salary = 3560.88;  // Float
$name = 'peter zhu'; // String
$isMarried = true; // Boolean

//echo $name . '的年龄是: '.$age. ',工资是: '.$salary. ',是否已婚: '. $isMarried. '<br>';
//echo $name,'的<span style="color:red">年龄</span>是: ',$age, ',工资是: ',$salary, ',是否已婚: ', $isMarried. '<hr>';

$books = ['php','mysql','html','css','javascript']; //Array
echo '<pre>';
//print_r($books);

$student = new stdClass();  // Object
$student->name = '罗盼';
$student->course = 'php';
$student->grade = 80;

//var_dump($student);
//var_dump($student->name);
//echo $student->name,'<br>';
//echo '<h3 style="color: blue">',print_r($student->name,true),'</h3>';
// 资源类型
$file = fopen('test.txt','r') or die('打开失败');
echo fread($file, filesize('test.txt'));
//fclose($file);

//null
$price = null;
echo '$price is ' . $price;
echo '<br>';

echo is_null($price) ? '是NULL' : '不是NULL';

//变量检测
// gettype()
echo gettype($file), '<hr>';  //resource

// 设置类型
$price = 124.99;
settype($price, 'integer');
echo $price, '<hr>';
echo gettype($price);
