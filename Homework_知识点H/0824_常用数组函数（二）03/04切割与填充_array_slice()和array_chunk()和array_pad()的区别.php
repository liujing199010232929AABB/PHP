<?php
//切割与填充
// array_slice():从数组中指定位置,返回指定数量的元素
$arr = [10,20,30,40,50,60];
//$arr = range(10,60,10);
echo '<pre>';
//print_r($arr);
// 0表示从第一个元素开始输出
//echo var_export(array_splice($arr,0),true),'<br>';
// array_chunk(): 将大数组分割为小数组
$arr = range(1,10);
//echo var_export(array_chunk($arr,3),true),'<br>';
//echo var_export(array_chunk($arr,3,true),true),'<br>';

// array_pad(),将数组用指定的数组填充到指定的长度
$arr = [50,60,70];
//echo var_export(array_pad($arr, 6, 99),true),'<br>';
echo var_export(array_pad($arr, -5, 'php'),true),'<br>';
