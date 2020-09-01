<?php
/**
 * call_user_func_array():执行方法或回调函数
 * call_user_func_array(函数/方法[, 参数数组])
 */

//call_user_func_array()的使用场景:
//场景一: 执行回调函数
// 计算二个整数之和
echo call_user_func_array(function($m,$n){return $m+$n;},[10,20]),'<hr>';

//场景二: 执行对象方法
class Hello1
{
    public function add($m, $n)
    {
        return $m + $n;
    }
}
//call_user_func_array([对象, '方法'],[参数数组])
//$obj = new Hello1();
//$method = 'add';
//$args = [30, 50];
//echo call_user_func_array([$obj, $method],$args), '<hr>';
//可以简写:
echo call_user_func_array([(new Hello1()), 'add'],[35,50]),'<hr>';

//场景三: 执行类中的静态方法
class Hello2
{
    public static function add($m, $n)
    {
        return $m + $n;
    }
}

//Hello2::add()
echo call_user_func_array(['Hello2','add'],[40,60]),'<hr>';
