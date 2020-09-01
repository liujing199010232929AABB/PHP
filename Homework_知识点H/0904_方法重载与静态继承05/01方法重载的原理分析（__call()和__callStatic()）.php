<?php
/**
 * 重载: 动态的"创建"出类的属性和方法
 * 重载都是借助: 魔术方法来实现的,用双下划线开头的特殊方法
 * 重载方法必须声明为: public
 * 重载分为: 属性重载和方法重载
 * 属性重载: __get(),__set(),__isset(),__unset()
 * 方法重载: __call(), __callStatic()
 * 1. __call($method, $arguments): 当用户访问一个不存在或无权限的方法时调用
 * 2.__callStatic($method, $arguments):当用户访问一个不存在或无权限的静态方法时调用
 */

class Test
{
    // 普通方法的重载
    public function __call($method, $arguments)
    {
//        return $method;  // 方法名称
//        return $arguments;
        $args = implode(',',$arguments);
        return '方法名: '. $method. '<br>参数: '. $args;
    }

    //创建一个私有方法
    private function select()
    {
        return __METHOD__;
    }

    // 静态方法的重载
    public static function __callStatic($name, $arguments)
    {
        $args = implode(',',$arguments);
        return '方法名: '. $name. '<br>参数: '. $args;
    }
}

$test = new Test();
//访问一个不存在的非静态/普通/动态方法
//echo $test->show(), '<br>';
//print_r($test->show('合肥','杭州','上海'));
//echo $test->show('合肥','杭州','上海'), '<br>';

echo $test->select('staff','id,name,age'),'<br>';
echo '<hr>';
// 我从类外部访问一个不存在的静态方法
echo Test::assign('html','css','javascript');

// 方法重载的作用绝不是这么简单