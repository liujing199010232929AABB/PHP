<?php
/**
 * 匿名类:
 * 1. php 7.0+ 才支持
 * 2. 类似于匿名函数,就是没有名称的类
 * 3. 匿名类适合于一次性的创建与引用
 * 4. 匿名类总是与: new 配套使用
 */

class BadPerson
{
    private $name = '西门大官人';
    public function story($name)
    {
        return $this->name.'喜欢上了: <span style="color:red">'.$name.'</span>';
    }
}

//有三种方式来访问 story()
//1. 对象
$badPerson = new BadPerson();
echo $badPerson->story('金莲妹妹'), '<hr>';
//2.匿名对象
echo (new BadPerson())->story('绿茶妹妹'), '<hr>';
//3.匿名类
echo (new class {
    private $name = '西门大官人';
    public function story($name)
    {
        return $this->name.'喜欢上了: <span style="color:red">'.$name.'</span>';
    }
})->story('神仙姐姐'), '<hr>';

// 匿名类的三种应用场景
//1. 匿名类中可以使用构造方法
echo (new class ('欧阳克'){
    private $name;
    // 匿名类中的构造方法
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function story($name)
    {
        return $this->name.'喜欢上了: <span style="color:red">'.$name.'</span>';
    }
})->story('灭绝师太'), '<hr>';

//2. 在匿名类中可以继承其它类中的成员
class KungFu
{
    protected $kill;  //招数
    public function __construct($art='')
    {
        $this->kill = $art;
    }
    public function show()
    {
        return $this->kill ? : '黯然销魂掌';
    }
}

echo (new class ('西门大官人','御女剑法') extends KungFu {
    private $name;
    // 匿名类中的构造方法
    public function __construct($name,$art='')
    {
        parent::__construct($art);
        $this->name = $name;
    }

    public function story($name)
    {
        return $this->name.'喜欢上了: <span style="color:red">'.$name.'</span>';
    }
    public function show()
    {
        return $this->name.'的绝招是: '.'<span style="color:red">'.parent::show().'</span>';
    }
})->show(), '<hr>';
//3.可以在类声明中嵌套一个匿名类
class Anmal   // 宿主类, 父类的角色
{
    public $name = '狗';
    protected $color = '黑色';
    private $type = '哈士奇';

    protected function info ()
    {
        return '市场售价3000元';
    }
    public function demo1()
    {
        // 宿主类中的私有成员不能在匿名类中直接使用
        // 可以通过在匿名类创建一个构造方法将宿主类中的私有成员进行注入
        // 3. 将宿主类中的私有属性做为匿名类的构造方法的参数传入即可
        return (new class ($this->type) extends Anmal {
            //1. 在匿名类中创建一个属性用来接收宿主类中的私有属性
            private $type;

            //2. 创建一个构造方法
            public function __construct($type)
            {
                $this->type = $type;
            }

            public function demo2()
            {
                return '我是嵌套匿名类中的方法: '. __METHOD__;
            }

            public function show()
            {
                return
                    '动物的名称是: ' .$this->name. '<br>'.
                    '动物的颜色是: ' .$this->color. '<br>'.
                    '动物的品种是: ' .$this->type. '<br>';
            }

        });
    }
}

// 访问匿名类中的 demo2()
echo (new Anmal())->demo1()->demo2();

echo '<hr>';

echo (new Anmal())->demo1()->show();