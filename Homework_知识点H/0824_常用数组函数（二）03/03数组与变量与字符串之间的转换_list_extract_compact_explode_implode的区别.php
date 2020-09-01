<?php
//数组与变量与字符串之间的转换
//1.list() 把数组中的元素转为变量: 用在索引数组上
list($name, $course, $grade) = ['小龙女','php',80];
//$name = '小龙女';
//$course = 'php';
//$grade = 80;
//echo $name, '的 "', $course, '"课程的成功是: ', $grade, '<hr>';

//2. extract($arr, $flag): 关联数组转为变量
$arr1 = ['id'=>1, 'name'=>'杨过','sex'=>'male','salary'=>8000];
//extract():返回变量的数量
//echo '共生成了:',var_export(extract($arr1),true),'个变量:<br>';
//$id=1; $name='杨过'; $sex='male'; $salary=8000;
//echo '我的id:',$id,',姓名:',$name,',性别:',$sex,',工资: ',$salary,'元<hr>';

//3.compact(): 将变量转为关联数组
$name = '陈近南';
$faction = '天地会';
$position = '总舵主';
$arr = compact('name','faction','position');
//echo var_export($arr,true),'<hr>';
//echo '<pre>';
//4.explode():将字符串转换数组
$lang = 'html,css,javascript,jquery,php,mysql';
//echo var_export(explode(',',$lang)),'<br>';
//echo var_export(explode(',',$lang,3)),'<br>';
//echo var_export(explode(',',$lang,-2)),'<br>';//最常用

//5.implode($glue, $arr)
$arr = ['首页','公司新闻','公司新闻','联系我们'];
//echo var_export(implode($arr),true),'<br>';
echo var_export(implode('|',$arr),true),'<br>';
//添加<a>转为导航
echo var_export('<a href="#">'.implode('</a>|<a href="#">',$arr).'</a>'),'<br>';

