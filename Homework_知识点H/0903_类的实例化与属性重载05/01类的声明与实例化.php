<?php
/**
 * 类的声明与实例化
 * 1. 类声明: class;
 * 2. 类的实例化: new
 * 3. 对象成员的访问:->
 */

//用关键字class声明一个类
class Demo1
{

}
//用关键字 new 实例化一个类
$demo1 = new Demo1();

//给当前对象添加一些属性和方法
$demo1->name = '朱老师';
$demo1->sex = '男';
$demo1->hello = function(){
    return '我是一个自定义的类方法';
};
//使用对象访问符:-> 来访问对象中的成员(属性和方法)
echo $demo1->name,': ',$demo1->sex,'<br>';

//错误的调用方式,因为当前对象方法不是一个普通函数,而是一个对象方法
//echo $demo1->hello();
//正确的调用方式,对象方法应该以回调的方式运行
echo call_user_func($demo1->hello);