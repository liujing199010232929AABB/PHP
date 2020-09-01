<?php
/**
 * static 关键字的用途:
 * 1. 定义静态成员;
 * 2. 后期静态绑定
 *
 * 后期静态绑定:静态继承的上下文环境,用于动态设置静态方法的调用者
 */
class One
{
    public static function hello()
    {
        return __METHOD__;  // 返回当前方法名
    }

    public static function world()
    {
//        return self::hello();
        return static::hello();
    }
}

class Two extends One
{
    public static function hello()
    {
        return __METHOD__;  // 返回当前方法名
    }
}
// 静态继承上下文执行环境: 静态继承
echo Two::hello();
echo '<hr>';

echo Two::world(); //One::hello
//代码结果看上去似乎是正确的,但是业务逻辑说不通
//在子类Two中将父类中的hello()进行重写,在调用world()时,本意是想调用子类中已重写的方法hello()
// 并不想调用父类的,在父类中却不能正确识别出当前的调用者是哪个?

// 代码执行分二种个阶段: 前期:编译阶段, 后期:运行阶段
// 这种在运行阶段才确定方法的调用者的技术: 后期[运行阶段]静态绑定, 延迟静态绑定

//将 static 想像成一个变量: 始终指向静态方法的调用者
