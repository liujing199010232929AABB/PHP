<?php 
//1.分解文件名

//系统常量__FILE__
echo __FILE__,'<br>';

//1.获取文件名
echo '文件名: '.basename(__FILE__).'<br>';

//2.获取目录名
echo '目录名: '.dirname(__FILE__).'<br>';
//php5.3+推荐使用常量__DIR__代替dirname()
echo __DIR__, '<br>';

//3.pathinfo():将目录名，文件名，扩展或解析到一个数组中
$pathinfo = pathinfo(__FILE__);
echo '目录名:', $pathinfo['dirname'],'<br>';
echo '文件名:', $pathinfo['basename'],'<br>';
echo '扩展名:', $pathinfo['extension'],'<br>';

//php中没有提供将这三个部分组成一个完整文件名的函数
//因为windows与unix上的目录分隔符不同
//windows是正斜线:/ , unix/linux上的是反斜线\
//所以系统提供一个常量:DIRECTORY_SEPARATOR,可以根据系统自动确定路径分隔符类型

$path = dirname(__FILE__).DIRECTORY_SEPARATOR.basename(__FILE__);
echo $path,'<br>';

var_dump($path==__FILE__);  //此晚, $path与__FILE__完全相同


