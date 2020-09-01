<?php
/**
 * 数组的回调处理
 * 将一个函数做为参数进行传递
 * 1. array_filter($arr, $callback)
 * 2. array_walk($arr, $callback())
 */

//1. array_filter():回调处理数组中的每个元素的值,仅返回结果为true的元素
$arr1 = [5,0,'',20,null,88,false,'php'];
echo '<pre>';
//echo '原始数组',var_export($arr1,true),',共有:',count($arr1),'个元素<hr>';
// ''空字符串,0,null,false: false
$arr2 = array_filter($arr1);
//echo '新数组',var_export($arr2,true),',共有:',count($arr2),'个元素<hr>';
//非常适合删除数组中的空元素
//传入一个回调: 匿名函数
$arr3 = ['html','css','javascript'];
$arr4 =array_filter($arr3, function ($value){
    return $value !== 'css';
});
//echo var_export($arr4),'<hr>';

//2. array_walk():对数组中每个元素的键和值进行处理
$arr = ['name'=>'admin','email'=>'admin@php.cn'];
echo var_export($arr, true), '<hr>';
//格式化
array_walk($arr, function (&$value, $key) {
    echo $key,':',$value,'<br>';
});
echo '<hr>';
// 回调的第三个参数的用法

array_walk($arr, function (&$value, $key, $name) {
    //如果当前的用户名是:admin,则授权查看，否则拒绝
    if ($value != $name) {
        exit('无权查看');
    } else {
        exit($key.':'.$value);
    }

},'admin1');
