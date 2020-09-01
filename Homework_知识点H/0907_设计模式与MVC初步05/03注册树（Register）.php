<?php
/**
 * 注册树: 就是创建一个对象集合/对象池/对象树,对象容器来存储对象
 */

// 先声明三类个,一会让他们上树
class Demo1 {};
class Demo2 {};
class Demo3 {};

// 声明一个对象注册树
class Register
{
    // 保存着已经挂到树上的对象
    public static $objs = [];

    // 将对象挂到树上
    public static function set($index, $obj)
    {
        self::$objs[$index] = $obj;
    }

    // 取出对象来用一下
    public static function get($index)
    {
        return self::$objs[$index];
    }

    // 销毁对象
    public static function del($index)
    {
        unset(self::$objs[$index]);
    }
}

// 将三个类的对象上树
Register::set('demo1', new Demo1);
Register::set('demo2', new Demo2);
Register::set('demo3', new Demo3);

// 检测
//var_dump(Register::$objs);
//查看
//var_dump(Register::$objs['demo2']);
var_dump(Register::get('demo1'));

// 删除
//Register::del('demo3');
var_dump(Register::get('demo3'));


