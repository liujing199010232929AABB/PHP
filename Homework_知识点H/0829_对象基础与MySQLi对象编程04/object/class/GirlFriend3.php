<?php


class GirlFriend3
{
    //访问控制: private
    private $name;

    //年龄
    private $age;

    // 三维
    private $stature = [];

    //属性收集器
    private $data = [];

    // 声明构造方法: 对象属性的初始化,在类实例化的时候，自动调用
    public function __construct($name, $age, array $stature)
    {
        // private 访问符限制的属性仅在当前对象内部可以使用
        $this->name = $name;
        $this->age = $age;
        $this->stature = $stature;
    }

    //创建对外访问的公共接口
    // 类中用双下划线的方法是系统定义,由系统自动调用,叫魔术方法
    public function __get($name)
    {
        $msg = null;
        if (isset($this->$name)) {
            $msg = $this->$name;
        } elseif (isset($this->data[$name])) {
            $msg = $this->data[$name];
        } else {
            $msg = '无此属性';
        }
        return $msg;
    }

    //设置器
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}