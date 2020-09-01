<?php
/**
 * 数组函数_排序
 * 数组元素由键名与值二部分组成,所以有二个排序依据
 * 一、根据值排序
 *  1.忽略键名:sort(),rsort(),usort()
 *  2.保留键名:asort(),arsort(),uasort()
 *
 * 二、根据键名排序
 *  1.
 *
 *
 * 记忆规律:
 * 1.函数名有a: 保留键值关系,适合关联数组
 * 2.函数名有r:逆序(降序),由大到小排列
 * 3.函数名有u:自定义回调处理
 */

/**
 * 一、根据数组的值进行排序
 * 第一组: 忽略键名,主要针对索引数组
 * 1.sort($arr) 升序
 * 2.rsort($arr) 降序
 * 3.usort($arr,$callback) 回调
 */

/**
 * 老师,我的手机通讯录中有200多个联系人,如何将他们按姓名进行排序呢?
 * 这个非常简单呀,将好友的姓名全部放到一个数组中,进行排序就可以解决
 */



//1.升序
$arr = [45,90,22,10,3,18,33];
sort($arr);
echo var_export($arr,true), '<br>';

//2.降序
$arr = [45,90,22,10,3,18,33];
rsort($arr);
echo var_export($arr,true), '<br>';

//3.回调
$arr = [45,90,22,10,3,18,33];
usort($arr,function($var1, $var2){
    $res = $var1 - $var2;
    switch ($res) {
        case ($res < 0):
            return -1;
//            return 1;     //降序
            break;
        case ($res > 0):
            return 1;
//            return -1;    //降序
            break;
        case ($res == 0):
            return 0;
            break;
    }
});
echo var_export($arr,true), '<br>';
//如果仅是简单的升降排序,显然sort(),rsort()更合适
//其实 usort()更多是与strcmp()配合实现多维数组的排序

$stu = [
    ['name'=>'林心如', 'grade'=>98],
    ['name'=>'范冰冰', 'grade'=>55],
    ['name'=>'左小青', 'grade'=>73],
];
//输出原始数组
echo '排序前:',var_export($stu,true), '<br>';

//用户自定义回调排序
usort($stu,function($m, $n){
    return strcmp($m['grade'], $n['grade']);
});

echo '排序后:',var_export($stu,true), '<hr>';

/**
 * 一、根据数组的值进行排序
 * 第二组: 保留键值关系,主要针对关联数组
 * 1.asort($arr) 升序
 * 2.arsort($arr) 降序
 * 3.uasort($arr,$callback) 回调
 */


//1.升序,键值保留
$price = ['合肥'=>18000, '上海'=>36000, '南京'=>25000,];  //房价排行榜
asort($price);
echo var_export($price,true), '<br>';

//2.降序,键值保留
$price = ['合肥'=>18000, '上海'=>36000, '南京'=>25000,];  //房价排行榜
arsort($price);
echo var_export($price,true), '<hr>';

//3.回调,案例请参考usort(),基本思路是一致的;


/**
 * 二、根据键名排序
 * 1. ksort()
 * 2. krsort()
 * 3. uksort()
 */

//1.按键名升序
$lang = ['html'=>'标记语言','css'=>'样式表','javascript'=>'前端脚本','php'=>'后端脚本'];
ksort($lang);
echo var_export($lang,true), '<br>';

//2.按键名降序
$lang = ['html'=>'标记语言','css'=>'样式表','javascript'=>'前端脚本','php'=>'后端脚本'];
krsort($lang);
echo var_export($lang,true), '<br>';

//3.自定义回调对键名排序
//根据键名的第二个字母进行排序
$lang = ['html'=>'标记语言','css'=>'样式表','javascript'=>'前端脚本','php'=>'后端脚本'];

uksort($lang,function($m, $n){
    //分别取出每个键名的第二个字母进行比较
   $a = substr($m,1,1);
   $b = substr($n, 1, 1);
   return strcmp($a, $b);
});
echo var_export($lang,true), '<br>';

/**
 * 数组排序看上去很复杂,其实很简单,排序的依据无非就是数组的键和值,顺序只有升序和降序二种,对不对?
 * 是的,完全正确,不必刻意的去背,记住规律,多做几个练习就记住了
 */



