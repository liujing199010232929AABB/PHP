<?php
echo '<pre>';
//echo var_export(array_unique([1,2,2,3,3,4,4,5,6]));

//echo var_export(array_fill(0,10,0));

//echo var_export(array_rand(range(1,33),7));
//echo var_export(array_rand(range(1,16),3));
$arr = ['东邪','西毒','南帝','北丐'];
shuffle($arr);  // 验证码
echo var_export($arr);

//array_merge():合并多个数组,相同键名互相覆盖
$db_sys = ['host'=>'127.0.0.1','user'=>'root','pass'=>'root'];
$db_user = ['host'=>'localhost', 'pass'=>sha1('123456')];

$res=array_merge($db_sys, $db_user);
echo var_export($res);
