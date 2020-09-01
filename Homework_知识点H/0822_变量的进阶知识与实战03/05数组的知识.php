<?php
/**
 * 数组的知识
 */
echo '<h3>数组的创建访问与更新</h3>';
echo '<hr color="green">';

//创建
$city = ['合肥','上海','杭州','南京']; //索引数组
echo $city[0], '<br>';
echo $city[2], '<br>';

// 键值对
$user = ['id'=>10,'name'=>'猪哥','course'=>'php','grade'=>89]; //关联数组
echo $user['name'],'<br>';
echo $user['grade'],'<br>';

//更新
$user['name'] = '朱老师';
echo $user['name'],'<br>';

//删除
//unset($user['grade']);
unset($user);
echo '<pre>',print_r($user,true);
