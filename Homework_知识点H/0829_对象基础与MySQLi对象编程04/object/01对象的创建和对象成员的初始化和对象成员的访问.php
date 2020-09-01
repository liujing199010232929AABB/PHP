<?php
/**
 *1.对象的创建
 * 2.对象成员的初始化
 * 3.对象成员的访问
 */

// 导入类
require 'class/GirlFriend1.php';

// 实例化类,创建对象的过程
$girlfriend1 = new GirlFriend1();

//var_dump($girlfriend1);

echo $girlfriend1->name,'<br>';  // 访问类中成员中的属性变量
echo $girlfriend1->getInfo(), '<br>'; // 访问类中成员中的方法函数
echo $girlfriend1->getInfo('金莲',30), '<br>'; // 访问类中成员中的方法函数

echo $girlfriend1->getStature([120,130,180]),'<br>';