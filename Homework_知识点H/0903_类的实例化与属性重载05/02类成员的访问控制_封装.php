<?php
/**
 * 对象的三大特征: 封装,继承,多态
 * 对象三要素之一: 封装
 *
 * 1.[封装]是指类中成员的访问进行限制,从而实现类的封装;
 * 2.类成员包括二类: 类属性, 类方法
 * 3.类成员的访问限制符(3p): public, protected, private
 * 4.类成员的访问应该通过公共接口(方法)进行,提高安全性
 * 5.类中成员可以使用 $this->成员 直接访问
 * 6.$this 是对象伪变量,代表着当前类的一个实例对象
 */

class Demo2
{
    //声明类属性,属性值必须是字面量,不能是变量或表达式
    public $name;   // 未初始化,默认值为null
    public $salary = 6800; // public 公共属性
    //将类属性进行封装,外部不能访问
    protected $sex = 0;   // protected 受保护的成员,仅限本类或本类的子类访问,0男1女
    private $age = 33;  // private 私有成员,仅限本类访问

    //声明类方法:创建公共接口,供外部访问类中访问受限成员
    public function getSex()
    {
        //返回语义化的性别名称
        return ($this->sex == 0) ? '男' : '女';
    }

    //创建$age属性的公共访问接口
    public function getAge()
    {
        // 男性直接输出年龄,女性拒绝查看
        return  ($this->sex == 0) ? $this->age : '保密';
    }
}

//类的实例化
$demo2 = new Demo2();

//测试属性默认值
var_dump(is_null($demo2->name));    // ($demo2->name === null) 返回同样结果: true

//查看公共属性 salary
echo $demo2->salary,'<br>';

//echo $demo2->sex,'<br>'; // protected 成员,类外部不可访问
//echo $demo2->age,'<br>'; // private 成员,类外部不可访问

echo '性别是: ', $demo2->getSex(),'<br>';  // 根据标志,返回语义化的中文
echo '年龄是: ', $demo2->getAge(),'<br>';  // 男人就显示年龄,女孩子的年龄是保密的

