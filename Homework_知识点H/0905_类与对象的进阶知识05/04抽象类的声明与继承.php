<?php
/**
 * 抽象类
 * 1. abstract : 抽象
 * 2. 是类又不是类,与trait相似,不能被实例化
 * 3. 抽象类必须被继承才可以使用
 */

abstract class Fruits
{
    protected $name;

    abstract public function eat();

    public function __construct($name)
    {
        $this->name = $name;
        return '构造器,实例化自动调用';
    }

}

class Apple extends Fruits
{
    protected $name ;

    public function eat()
    {
        return $this->name . '可以直接生吃';
    }
    public function __construct($name)
    {
        parent::__construct($name);
    }


}

echo (new Apple('苹果'))->eat(), '<hr>';