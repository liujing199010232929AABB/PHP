<?php

/* 
 * 使用别名导入命名空间
 * use 关键字的使用
 */

//1. 声明一个命名空间one
namespace one ;

//use one\two\three\Demo;
//如果当前类也有一个同名的Demo类,怎么办?为导入的类取一个别名
use one\two\three\Demo as Demo1;

//class Demo1{public $name='Peter Zhu';}
class Demo{public $name='Peter Zhu';}

const SITE='PHP中文网';

function add($a,$b){return $a+$b;}

//在当前空间访问: one\two\three空间中类
//必须要添加很长的空间前缀
//echo (new two\three\Demo)->name;
//echo (new Demo)->name;
echo (new Demo1)->name;



//2.声明命名空间:one\two\three
namespace one\two\three; 

class Demo{public $name='朱老师';}

const  DOMAIN = 'www.php.cn';

function add($a,$b){return $a+$b;}

