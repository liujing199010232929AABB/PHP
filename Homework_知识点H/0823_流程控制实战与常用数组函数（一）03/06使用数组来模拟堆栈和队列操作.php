<?php
/**
 * 使用数组来模拟堆栈和队列操作
 */
$user = ['id'=>5, 'name'=>'peter','gender'=>'male'];
echo '<pre>',print_r($user,true);
//echo '当前长度: '. count($user), '<br>';
// 入栈：array_push()返回新数组的长度= count()
//echo array_push($user, 'php中文网');
//echo '当前长度: '. count($user), '<br>';
//print_r($user);

//echo array_pop($user),'<br>';
//echo array_pop($user),'<br>';
//echo array_pop($user),'<br>';
//print_r($user);
//队: shift(),unshift()
//echo array_unshift($user, 'www.php.cn','peterzhu');
//print_r($user);
//echo array_shift($user),'<br>';
//print_r($user);
//模拟队列操作: 增删只能在二端进行,不允许同一端进行
array_push($user, 'php'); //尾部进队
print_r($user);

array_shift($user); // 头部出队
print_r($user);

array_unshift($user, 'html'); // 头部进队
print_r($user);

array_pop($user);  // 尾部出队
print_r($user);

