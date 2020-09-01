<?php
/**
 * 1数组分类
 * 2.数组定义
 * 3.数组遍历
 */

//1. 数组分为二类:索引数组，关联数组
$arts = ['亢龙有悔','飞龙在天','见龙在田','鸿渐于陆','潜龙勿用','突如其来']; // 索引数组
//索引从0开始计数
//echo $arts[0],'<br>'; // 键名是数字索引
//echo $arts[1],'<br>';
//echo $arts[5],'<br>';
//关联数组
$swordsman = ['name'=>'郭靖','position'=>'金刀驸马','skill'=>'降龙十八掌'];
//echo $swordsman['name'],'<br>'; // 键名是字符串
//echo $swordsman['skill'],'<br>'; // 键名是字符串

//2.数组定义
// 1. 整体创建
//$a = '见龙在田';
//$b = ['鸿渐于陆','潜龙勿用','突如其来'];
//$arts = ['亢龙有悔','飞龙在天',$a,$b]; // 索引数组
//echo '<pre>', print_r($arts,true);

//2.逐个来创建
$swordsman = []; //声明一个空数组
$swordsman['name'] = '杨康';  //通过追加的方式添加到新数组中
$swordsman['position'] = '金国小王爷';
$swordsman['skill'] = '九阴白骨爪';
//echo '<pre>', print_r($swordsman,true);
//echo '<hr>';

//3. 数组的遍历
//for ()
$res1 = '';
for ($i=0; $i<count($arts); $i++) {
     $res1 .= $arts[$i].'---';
}
//echo rtrim($res1,'---'),'<hr>';

//while()

$res2 = '';
$i=0;
while ( $i<count($arts)) {
    $res2 .= $arts[$i].'---';
    $i++;
}
//echo rtrim($res2,'---'),'<hr>';
// do~while()
// foreach()
// $value 叫循环变量,每一次数组将要输出的当前的元素赋值给$value
//foreach ($swordsman as $key=>$value) {
//    echo '['.$key,'] => ',$value,'<br>';
//}
echo '<hr>';

// list()和each()
//while(list($key, $value) = each($swordsman)) {
//    echo '['.$key,'] => ',$value,'<br>';
//}
$arts = ['亢龙有悔','飞龙在天','见龙在田','鸿渐于陆','潜龙勿用','突如其来']; // 索引数组
//数组的内部指针
reset($arts);  // 将指针复位,指向第一个元素
//获取当前元素的键名和值
echo key($arts),'-----',current($arts),'<br>';
//下移指针
next($arts);
//获取当前元素的键名和值
echo key($arts),'-----',current($arts),'<br>';
//最后一个
end($arts);
//获取当前元素的键名和值
echo key($arts),'-----',current($arts),'<br>';
reset($arts);  // 将指针复位,指向第一个元素
//获取当前元素的键名和值
echo key($arts),'-----',current($arts),'<br>';

