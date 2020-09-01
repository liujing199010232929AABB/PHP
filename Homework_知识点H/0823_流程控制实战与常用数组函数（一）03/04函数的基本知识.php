<?php
/**
 * 函数的基本知识
 * 1.声明的语法
 * 2.参数设置
 * 3.返回值
 * 4.作用域
 */

//声明
function hello()
{
  return    '欢迎来到php中文网学习';
}
//调用: 按名调用,名称后跟上一对圆括号
echo hello(),'<hr>';

function hello1($siteName)
{
    return    '欢迎来到'.$siteName.'学习';
}
echo hello1('php中文网'),'<hr>';

//当有可选参数的时候，必须把必选参数往前放
function hello2($lang,$siteName='php中文网')
{
    return    '欢迎来到'.$siteName.'学习'.$lang;
}
echo hello2('php'),'<hr>';

//参数实际就是一个占位符,仅供参考，可以没有
function hello3()
{
//    return print_r(func_get_args(),true);
//    return func_get_arg(2);
//   return func_num_args(); //获取参数的数量
    return (func_get_arg(0) + func_get_arg(1) + func_get_arg(2));
}

echo hello3(4,5,6),'<hr>';

$siteName = 'php中文网';
// php中只有函数作用域,函数外部声明的变量在函数内部不能直接使用
function hello4 ()
{
//    global $siteName;
    return $GLOBALS['siteName'];
}
echo hello4();


