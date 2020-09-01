<?php 
/**
 * 文件操作的基本过程
 * 1. 打开文件
 * 2. 操作文件:读写追加等
 * 3. 关闭文件
 */
//1.创建或打开一个本地文件
//以r(只读)方式打开文件,不会创建新文件, 类似: r+(读写),指针在开头
// $fh = fopen('file1.txt', 'r') or die("不能打开file1.txt文件");

//以w(只写)方式打开文件,如文件不存在则创建, 类似: w+(读写),指针在开头
$fh = fopen('file2.txt', 'w') or die("不能打开file2.txt文件");

//以a(追加只写)方式打开文件,如文件不存在则创建, 类似: a+(追加读写),指针在未尾
$fh = fopen('file3.txt', 'a') or die("不能打开file3.txt文件");

//注: 在windows机器上建议读写模式符添加b,以增强对二进制文件的兼容性,如rb,wb...

//2.打开一个远程文件
$fh = fopen('http://www.php.cn/course/801.html', 'r');


//3.读取文件到浏览器
//从文件指针处读取一行并自动下移
// while ($s = fgets($fh)) { 
// 	print $s;
// }

//fgetss()可过滤掉所有的html标签
// while ($s = fgetss($fh)) {
// 	print $s;
// }

//4. 读取文件到字符串:
//file_get_contens($filename)返回字符串
// $content = file_get_contents('file.txt');
//将整个页面读入到一个字符串,这在抓取其它网站内容时很有用,配合过滤正则
// $content = file_get_contents('http://www.php.cn');
// echo '文件大小: '.strlen($content).' 字节', '<br>';
// if (strlen($content) > 0) {
// 	echo  $content;
// }

//5. 把整个文件读入到数组中,用换行符进行分割
$arr = file('maxim.txt');
// foreach ($arr as $key => $value) {
// 	echo '<span style="color:red">格言'.($key+1).':&nbsp;</span>'.$value.'<hr>';
// }
// shuffle($arr),随机打乱一个数组,返回true/false
// if (shuffle($arr)) {
// 	echo current($arr); //随机显示一条格言
// 	echo $arr[0]; //随机显示一条格言
// }
echo '<hr>';

//array_rand($arr,$length=1):从数组随机取出一个或多个元素
//取出一个只返回键名,多个则返回随机键名数组
// echo $arr[array_rand($arr)];
print_r(array_rand($arr,3));//返回三个随机的键名
echo '<hr>';
// 遍历这个键名数组,查询出对应的数组元素值
$kes = array_rand($arr,3);
foreach ($kes as $value) { //键名无意义,我们只关心值,即键名
	print $arr[$value].'<hr>';
}

//文件读写完成后，应该及时关闭
fclose($fh);

//关闭脚本后,文件也会自动关闭,但还是强烈推荐手工显示式关闭,这是一个好习惯




















