<?php

/* 
 *  命名空间的分层管理
 * 1.非限定名称: 空间成员名称前不使用空间前缀,类似于当前目录上访问
 * 2.
 */

//声明命名空间one
namespace one ;

class Demo{public $name='Peter Zhu';}

const SITE='PHP中文网';

function add($a,$b){return $a+$b;}

//限定名称: 类似于相对路径访问
//tow\Demo 会自动加上当前空间前缀:one
//最终解析为: one\two\Demo
echo (new two\Demo)->name,'<br>';

//声明命名空间two,two是one的子空间
namespace one\two;

class Demo{public $name='朱老师';}

const  SITE = 'www.php.cn';

function add($a,$b){return $a+$b;}


//非限定名称:类似当前目录下访问
//在当前空间内访问不需要添加空间前缀
echo (new Demo)->name,'<br>';

//完全限定名称:从全局空间开始,类似于从根目录开始
//从当前的one\two\开始,访问另一个空间的成员,要从根开始
echo (new \one\Demo)->name;








