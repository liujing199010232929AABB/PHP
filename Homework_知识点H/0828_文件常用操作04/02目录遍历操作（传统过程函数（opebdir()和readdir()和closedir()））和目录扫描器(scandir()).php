<?php 
/**
 * 目录遍历操作: 
 * 1. 传统过程函数: opendir(),readdir(),closedir()
 * 2. 目录扫描器: scandir()
 */

/**
 * 第一种方式: 传统目录函数
 * 
 * 第一步: opendir('目录')打开目录,成功返回资源,失败返回false
 * 第二步: readdir($dir)读取目录内容,世功返回文件名,失败返回false
 * 第三步: closedir($dir)关闭当前目录
 * 
 */
$dir = opendir('../0827_常用字符串函数04') or die('打开失败');
// $dir = opendir('./') or die('打开失败');  //.或./当前目录
while (false != ($file = readdir($dir))) {
	// print $file."<br>";
	// print nl2br($file."\n");	

	if ($file != "." && $file != "..") {      
			print $file."<br>";
     }
}
closedir($dir);

echo '<hr>';

/***********************************************************/

/**
 * 第二种方式:将目录内容保存到数组中进行遍历
 * 第一步:scandir($dir)将目录转数组中保存
 * 第二步:遍历目录数组
 */
//读到一个目录内容到数组中: 
$fileArr = scandir('../0827_常用字符串函数04/');
// print_r($fileArr);
foreach ($fileArr as $file) {
	if ($file != "." && $file != "..") {
        echo "$file<br>";
     }
}

//说明: 如果想要递归所有目录,要编写自定义函数来解决,我们介绍一种更方便的递归遍历技术






















