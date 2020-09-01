<?php

/* 
 * 如何让全局代码与用户空间代码和平共处?
 * 1.全局代码:之前我们是用\进行引用的
 * 2.用户代码:用namespace 进行标识
 * 3.用户自定义命名空间,在空间标识符后有一对花括号代码之前的分号,
 * 将属于该空间的代码全部放在花括号内
 * 4.全局空间的代码,使用一个没有标识符的namespace关键字加花括号即可,将
 * 全局代码放在这对没空间标识符的花括号内
 */

//1. 声明一个命名空间one
namespace one {

class Demo{public $name='Peter Zhu';}

const SITE='PHP中文网';

function add($a,$b){return $a+$b;}
}


//2.声明命名空间:two
namespace two {

class Demo{public $name='朱老师';}

const  SITE = 'www.php.cn';

function add($a,$b){return $a+$b;}
}

//如果执行one空间中的代码?
//这样可以吗?貌似可以,但实际不行的
//原因是:如果当前脚本使用了命名空间,那么里面的全部代码都必须使用命名空间进行声明和访问
//echo (new \one\Demo())->name,'<br>';

//再声明一个命名空间three
namespace three{
    //如果执行one空间中的代码?
//这样可以吗?貌似可以,但实际不行的
echo (new \one\Demo())->name,'<br>';

}


//但是我的本意并不是想再生成一个命名空间,我只是想在全局空间执行一下某个空间中的代码罢了

//这就好比,你去电脑城只想买一个鼠标,结果老板说,鼠标不单买,必须买个电脑,鼠标是赠送的,这显然是不合理的。

//那么我们直接声明一个全局空间行不行?
//为什么不行呢?不是说全局空间的标识符就是反斜线\吗?
//namespace \ {
//   echo (new one\Demo())->name,'<br>'; 
//}

//原来默认就是全局空间,不用加反斜线的,加了就是画蛇添足,反而错了,一定要注意哟~~
namespace {
  
    echo (new one\Demo())->name,'<br>';

}
