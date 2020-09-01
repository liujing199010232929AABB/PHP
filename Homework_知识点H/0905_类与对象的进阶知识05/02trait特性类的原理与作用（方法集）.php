<?php
/**
 * Trait 是什么东西?
 * 1. php 只能实现单继承,trait打破了限制
 * 2. trait 是代码复用机制(函数, 类的继承)
 * 3. trait 使的类的语法，但不是类,所以不能实例化
 * 4. triat 相当于方法集
 */

if (!class_exists('Person')) {
    class Person
    {
        protected $name;
        public function __construct($name='小明')
        {
            $this->name = $name;
        }

        public function study($course='php')
        {
            return $this->name . '在学习: ' . $course;
        }
    }
}

// 创建一个trait特性类
trait Course
{
    public $frient = '小华';
    public function study($name='踢足球')
    {
        return $this->name .'在学习'. $name;
    }
}

trait Recreation
{
    public $friend = '小军';
    public function study($name='打篮球')
    {
        return $this->name.'和'.$this->friend.$name;
    }
}

//问题1: 父类Person与triat类Course之间的关系?
// trait 类位于 Person 与 Student之间
class Student extends Person
{
//    use Course;  // 导入了一个trait 类
//    use Recreation;

    use Course, Recreation {
        Course::study insteadof Recreation;
        Recreation::study as MySport;
    }



}

$student = new Student();

echo $student->study(), '<hr>';
echo $student->MySport(), '<hr>';
