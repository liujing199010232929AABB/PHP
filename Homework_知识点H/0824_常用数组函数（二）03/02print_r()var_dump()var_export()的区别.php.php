<?php
$arr1 = ['id'=>1, 'name'=>'杨过','sex'=>'male','salary'=>8000];

/**
 * 1. print_r($arr, $bool)
 * 2. var_dump($var1,$var2....)
 * 3. var_export($arr,true),输出的就是字符串表示: 就是创建这个数组的php语句
 */
//$res = print_r($arr1,true);
//echo '<pre>',$res,'<br>';
//var_dump($arr1);
//var_export($arr1);

//1. array_values()
echo '<pre>',print_r(array_values($arr1),true);
echo '<pre>', var_export(array_values($arr1),true);

//2. array_keys()
echo '<pre>', var_export(array_keys($arr1),true),'<br>';

//3. in_array()
echo in_array('male1', $arr1) ? '存在' : '<span style="color:red">不存在</span><br>';

//4. array_key_exists()
echo array_key_exists('name2', $arr1) ? '存在' : '<span style="color:red">不存在</span><br>';

//5. array_flip()
echo '<pre>', var_export(array_flip($arr1),true);

//6. array_reverse()
echo '<pre>', var_export(array_reverse($arr1),true);

