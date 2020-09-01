<?php
/**
 * 1.常用的键值操作
 * 2.数组内部指针操作(巡航)
 */
$user = ['id'=>5, 'name'=>'peter','gender'=>'male','age'=>20];
echo '<pre>',print_r($user,true);
//in_array()判断数组中是否存在某个值
//echo in_array('peter',$user) ? '存在<br>' : '不存在<br>';
//array_key_exists():判断某个键名是否存在于数组中?
//echo array_key_exists('salary',$user) ? '存在<br>' : '不存在<br>';
// array_values():以索引方式返回数组的值组成的数组
//print_r(array_values($user));
// array_keys()
//print_r(array_keys($user));
// array_search():以字符串的方式返回指定值的键
//echo $user[array_search('peter',$user)];
//键值对调
//print_r(array_flip($user));

//数组的内部操作
echo count($user),'<br>';
//key()返回当前元素的键
echo key($user),'<br>';
//current()返回当前元素的值
echo current($user),'<hr>';
//next()指针下移
next($user);
echo key($user),'<br>';
echo current($user),'<hr>';
next($user);
echo key($user),'<br>';
echo current($user),'<hr>';
//复位
reset($user);
echo key($user),'<br>';
echo current($user),'<hr>';
//尾部
end($user);
echo key($user),'<br>';
echo current($user),'<br>';
reset($user);
// each()返回当前元素的键值的索引与关联的描述,并自动下移
print_r(each($user));
//print_r(each($user));
//list() //将索引数组中的值，赋值给一组变量
list($key, $value) = each($user);
echo $key, '******', $value,'<hr>';
// while,list(),each() 遍历数组

reset($user);
while (list($key, $value) = each($user)) {
    echo $key , ' => ', $value, '<br>';
}