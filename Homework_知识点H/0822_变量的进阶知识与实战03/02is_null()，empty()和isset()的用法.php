<?php
/**
 * is_null(), empty(), isset()
 */

// is_null()
$val1;  // 声明但未赋值
$val2 = null; // 声明并初始化
$val3 = 'php';
unset($val3);

@var_dump(is_null($val1) ? true : false);
@var_dump(is_null($val2) ? true : false);
@var_dump(is_null($val3) ? true : false);

// empty()
// 空字符串, 空数组, null, 0 / '0' / false  返回 true

$str1 = '';
$str2 = []; // 空数组
$str3 = 0;
$str4 = '0';
echo '<hr>';
@var_dump(empty($str1) ? true : false);
@var_dump(empty($str2) ? true : false);
@var_dump(empty($str3) ? true : false);
@var_dump(empty($str4) ? true : false);

//isset():检测一个变量是否存在? 是 null 反操作
// 变量已经存在,并且它的值不是null,返回true
echo "<hr>";
$a = null;
var_dump(isset($a));
$b = 'zhu';
var_dump(isset($b));
$c;  // 等价于  $c = null
var_dump(isset($c));