<?php


class GirlFriend1
{
    // 类中的成员: 属性(变量),方法(函数)
    // 类中用类似变量的方式定义类的属性
    //姓名,public 是访问控制,
    public $name = '冰冰姐';

    //年龄
    public $age = 18;

    // 三维
    public $stature = [90,80,90];

    //类中使用类似函数的方式来定义方法
    public function getInfo($name='', $age=0)
    {
//        $this: 当前类被实例化之后的对象, -> 对象成员访问符
        $this->name = empty($name) ? $this->name : $name;
        $this->age = ($age == 0) ? $this->age : $age;

        return '姓名:' . $this->name . ', 年龄:' . $this->age. '<br>';
    }

    public function getStature($stature =[])
    {
//        $this: 当前类被实例化之后的对象, -> 对象成员访问符
        $this->stature = empty($stature) ? $this->stature : $stature;

        return '胸围:' . $this->stature[0] . ', 腰围:' . $this->stature[1]. ',臀围:'. $this->stature[2].'<br>';
    }

}