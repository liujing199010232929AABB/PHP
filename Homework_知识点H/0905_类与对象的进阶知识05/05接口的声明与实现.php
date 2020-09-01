<?php
/**
 * 接口: interface
 * 1. 类是对象的模板,对象是类的实例
 * 2. 接口就是类的模板,所以可以将接口看成一个特殊的类
 * 3. 接口中的方法只声明不实现,与抽象类的抽象方法是一样的
 * 4. 接口中可以声明常量,而且必须初始化(字面量)
 */

interface Animal
{
    // 接口常量
    const status = 'viable'; // 能存活的

    // 接口方法
    public function feeding($foods);
}

interface Feature
{
    public function hobby($hobby);
}



class Cat implements Animal
{
    private $name = '猫';

    //必须将接口中的接口方法实现
    public function feeding($foods)
    {
        return  $this->name . '吃: '. $foods;

    }
}

class Dog implements Animal, Feature
{
    private $name = '狗';
    //必须将接口中的Animal接口方法feeding实现
    public function feeding($foods)
    {
        echo  $this->name . '吃: '. $foods;
        return $this;
    }

    public function hobby($hobby)
    {
        echo $hobby;

    }
}

// 实例化
//echo (new Cat())->feeding('老鼠');
//echo '<hr>';
(new Dog())->feeding('肉')->hobby('忠诚,勇敢');
//echo '<hr>';
//echo (new Dog())->hobby('忠诚,勇敢');