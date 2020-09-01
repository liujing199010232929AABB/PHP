<?php
/**
 * 变量作用域
 */
echo '<h3>变量作用域</h3>';
echo '<hr color="green">';

// php只有函数作用域
// 三种作用域: 全局, 在函数之外创建的变量,可在函数外部直接使用
//            局部,函数内部创建的变量,仅限在函数内部使用
//            静态,函数内部创建,仅在内部使用并且函数执行后他的值不消失

$siteName = 'php中文网'; // 全局变量
// 当用户定义一个全局变量的时候，这个变量同时也自动成为超全局变量数组$GLOBALS的一个元素
//$GLOBALS['siteName'] = 'php中文网';
// 超全局变量不受作用域限制
//php中函数的声明使用关键字: function 函数名(参数列表,多个参数用逗号分开) { 多条语句}
//创建一个函数，就意味着创建出一个作用域，　执行环境
// 函数中的执行结果用return 返回给调用 者
function hello()
{
//    global $siteName;
    $userName = 'Peter Zhu'; // 局部变量

//    return $userName .'是' .$siteName . '的讲师';
    return $userName .'是' .$GLOBALS['siteName'] . '的讲师';
}

echo '<h3>', hello(), '</h3>';

//echo $siteName;
echo '<hr color="red">';
function myStatic()
{
   static $num = 1;

    return '第'.$num.'次输出'.$num++. '<br>';
}

echo  myStatic(), '<br>';
echo myStatic(), '<br>';
echo myStatic(), '<br>';
echo myStatic(), '<br>';
