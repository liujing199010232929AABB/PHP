<?php
/**
 * 类常量,对象初始化,属性的重载
 * 1. 类常量可用来创建对象之间的共享数据
 * 2. 对象初始化: 用构造方法实现,创建对象之前会自动调用,完全对象的一些初始化工作
 *    例如:对象属性初始化,创建对象时自动调用的方法等,方法名称固定:__construct()
 * 3.属性重载:在类的外部访问不存在或者无权限访问的属性时,会自动触发此类方法调用
 *   属性重载涉及四个方法:__get(),__set(),__isset(),__unset()
 */

class Demo3
{
    //类常量:所有对象共享,用类名加范围解析符(::)访问,且默认为公共属性public
    //类常量可用来创建对象之间的共享数据
    const SITE_NAME = 'PHP中文网';

    //声明二个私有属性
    private $name;
    private $course;
    private $grade;

    //构造方法
    public function __construct($name,$course, $grade)
    {
        $this->name = $name;
        $this->course = $course;
        $this->grade = $grade;
        //构造方法中不仅可以初始化对象属性,还可以调用类方法
        echo $this->show();
    }

    //输出属性内容
    public function show()
    {
        return $this->name.'的《'.$this->course.'》课程的成绩是: '.$this->grade.'分!';
    }

    //获取属性的重载
    public function __get($name)
    {
        if ($name == 'grade') {
            return $name.'不允许查看';
        }
        return $this->$name;
    }

    //更新属性的重载
    public function __set($name, $value)
    {
        if ($name == 'grade') {
            echo $name.'不允许修改','<br>';
        }
        $this->$name = $value;
    }

    //属性检测的重载
    public function __isset($name)
    {
        if ($name == 'grade') {
            return false;
        }
        return isset($this->$name);
    }

    //销毁属性的重载
    public function __unset($name)
    {
        if ($name == 'grade' || $name == 'name') {
            return false;
        }
        unset($this->$name);
    }
}

//访问类常量:类常量可以被该类的所有对象所共享,所以不属于任何一个对象,应该使用类来访问
echo '站点名称: ', Demo3::SITE_NAME, '<br>';

//实例化Demo3,创建对象
$demo3 = new Demo3('小皮','PHP', 82);
var_dump($demo3);
//访问属性,因为属性全部被封装,所以必须通过一个统一的外部接口访问
echo $demo3->show();
echo '<hr>';

//如果想简化以上操作,可以在实例化之前,在构造方法中调用属性访问接口方法
new Demo3('小皮','PHP', 82);
echo '<hr>';

//属性操作: 获取,设置,检测,销毁
//获取
echo '姓名: ', $demo3->name, '<br>';   // 访问私有属性,如类中无__get()会出错,如有自动触发
echo '成绩: ', $demo3->grade, '<br>';  // 可以在__get()进行属性访问的权限控制

//设置
$demo3->course = 'Python';
echo '课程: ', $demo3->course,'<br>';
$demo3->grade = 65;

//检测,因为grade私有,所以外部检测不到,如类中有__isset()方法就可以检测到
echo isset($demo3->name) ? '存在<br>' : '<span style="color:red">不存在</span><br>';
echo isset($demo3->grade) ? '存在<br>' : '<span style="color:red">不存在</span><br>';

//销毁
unset($demo3->course);
echo $demo3->course,'<br>';

unset($demo3->name);    // 重载方法中__unset()不允许销毁grade和name属性
echo $demo3->name,'<br>';   // 所以这里仍可以访问到name属性


