<?php
/**
 * 对象三要素之: 继承与多态
 * 1. 继承是指类之间的继承,是代码复用的重要手段,之前我们是通过"函数"实现的代码复用
 * 2. 继承使用关键字: extends
 * 3. 引用父类成员: parent::
 * 4. 子类可以将父类中的公共和受保护成员全部继承
 */

class Demo4
{
    //父类属性
    public $name;
    protected $age;
    private $salary;
    const APP_NAME = '学生管理系统';

    //父类构造器
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //属性访问重载
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
        return '非法属性';
    }
}

class Demo4_1 extends Demo4
{
    //子类自有属性
    private $sex;
    const APP_NAME = '教师管理系统';  //类常量可以在子类中重写

    //子类将父类同名方法进行重写,根据传入参数不同,实现不同的功能,这就是多态性
    public function __construct($name, $age, $sex='male')
    {

//        $this->name = $name;
//        $this->age = $age;
        //引用父类的构造方法来简化代码
        parent::__construct($name, $age);
        $this->sex = $sex;
    }

    //将父类属性重载方法重写后,顺利读取子类属性
    //所以属性重载方法__get()应该设置在最终工作类中(例如本类Demo4_1),而不是父类Demo4中
    //此时,将父类Demo4中的__get()删除,代码执行仍然正确
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
        return '非法属性';
    }

}

//当前类Demo4_1中即使没有任何成员,一样可以访问父类成员
$demo4_1 = new Demo4_1('peter', 80);
//访问父类中的属性
echo $demo4_1->name,'<br>';
echo $demo4_1->age,'<br>';
echo $demo4_1->salary,'<br>';   // 父类私有属性子类不可见,访问不到
echo Demo4_1::APP_NAME, '<br>';  // 访问类常量
echo $demo4_1->sex, '<br>'; //取不值,因为父类__get()不能识别子类属性