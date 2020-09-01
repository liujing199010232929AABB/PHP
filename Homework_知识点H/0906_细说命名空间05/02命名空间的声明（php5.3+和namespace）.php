<?php

/* 
 * 命名空间的声明与使用
 * 1.使用关键字:namespace
 * 2.php5.3+
 * 3.namespace 之前不能有除了declare和注释之外的任何代码,html也不行
 * 4.命名空间默认从全局开始定位,全局空间用\表示,类似于根目录
 * 5.如果当前脚本声明了命名空间,则所有成员的访问,就必须使用命名空间,包括系统函数
 */

//1. 声明一个命名空间
namespace one;

class Demo{public $name='Peter Zhu';}

const SITE='PHP中文网';

function add($a,$b){return $a+$b;}


//如果我想声明同名的类,常量与函数可以再声明一个命名空间

//2.一个脚本中允许有多个命名空间
//声明命名空间:two,使用\tow\进行引用
namespace two;

//现在声明类Demo,常量SITE,函数add,则不会冲突
class Demo{public $name='朱老师';}

const  SITE = 'www.php.cn';

function add($a,$b){return $a+$b;}

//相信大家看出来了,这非常像是在不同的目录下面,允许创建同名文件,原理是一样的

echo (new Demo)->name, '<br>'; //默认输出的是当前空间的内容
//查看一下当前的命名空间是什么?使用系统预置常量:__NAMESPACE__
echo '当前命名空间是: ',__NAMESPACE__,'<br>';

//也可以带上当前的命名空间来访问当前空间中的成员
//生成带有当前命名空间的类名
$className = __NAMESPACE__.'\Demo';

echo (new $className)->name,'<br>';

//可以带上完整的命名空间名称,从全局空间\开始,相当于从根目录开始
//专业术语: 完全限定名称
echo (new \two\Demo)->name, '<hr>'; 

//3.如何实现跨空间访问?
//如果我们要访问空间one中的Demo类中的属性,如何操作呢? 
//跨空间访问,与跨目录访问文件一样,一定要带上它完整的空间路径
//例如我们要访问one空间的类Demo中的成员
echo 'one空间的类成员:',(new \one\Demo)->name,'<br>';

//4.在声明了命名空间的脚本中,如何访问系统预定义方法?
//例如声明了一个单字符数组
$welcome = 'php中文网欢迎您';
\print_r($welcome); echo '<br>';
print($welcome); echo '<hr>';
//刚才我们说过,在空间中访问全局成员,必须要加\,这里没有加为什么可以?
//因为如果用户没有添加,那么会首先在本空间中寻找有没有var_dump()函数,
//如果没有找到,再到全局空间查找,所以不报错
//但是如果我们在当前的two空间中也创建一个var_dump()函数,则只会执行
//当前空间中用户自定义的var_dump(),系统同名函数不会被调用
function print_r($arg)
{
    echo '我是当前空间声明的函数调用:'.$arg;
}
print_r($welcome); echo '<br>';
//等价调用语法:
\two\print_r($welcome);

//注意: 此print_r(),与系统内置的print_r()无任何关系,仅名称相同而已
//就好比,上海有条长江路,咱们合肥也有一条长江路一样,这二条路除名称一样,再无任何关系

// 上海市宝山区长江路
// 合肥市庐阳区长江路
// 相信没有人会认为这是同一条路?

//事实上,这二个函数的完整调用语句应该是这样的:
//1.调用系统的:
\print_r($welcome);
//2.调用当前空间的:
\two\print_r($welcome);
//尽管后面名称一样,但是归属地是不同的


