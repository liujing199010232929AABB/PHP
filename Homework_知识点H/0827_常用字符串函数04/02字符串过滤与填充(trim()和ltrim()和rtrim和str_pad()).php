<?php
/**
 * 字符串过滤与填充
 * 1.trim(),ltrim(),rtrim():
 * 2.str_pad()
 */

/**
 * 一、trim(字符串,要过滤的字符串)
 * 1.功能: 过滤掉字符串左右二边指定字符串
 * 2.语法: trim($string[, '要从结果中过滤掉的字符串' ])
 * 3.参数: 1. 必选: 原始字符串
 *      2. 指定要过滤掉的字符串,默认为\n\r\t,null
 *      3. 可自定义,如trim($path, '/');
 *      4. 可使用正则范围指示符: trim($name,'0-9 a-z)
 *      5. 可以用strlen()通过字符串长度来检测是否过滤掉了
 *      6. 默认过滤:\n\r\t, null
 * 4.返回: 返回过滤后的新字符串
 * 5.场景: 过滤用户输入的表单数据; 删除指定字符实现路径拼接:trim($file,'.')
 * 6.类似函数: ltrim()过滤左边字符,  rtrim()过滤右边字符
 */

$input = '   admin  ';
echo '过滤前:', $input, '原始长度',strlen($input), '<br>';
$input = trim($input);
echo '过滤后:', $input, '长度',strlen($input), '<br>';
$str = '02print_r()var_dump()var_export()的区别.ajax2.ajax2';
//删除扩展名php
$str = rtrim($str,'.php');
echo $str, '<br>';
//删除www.php.cn前的www
$str = 'www.php.cn';
$str = ltrim($str,'www.');
echo $str, '<br>';
//过滤字符也可以用区间正则
$str = '132php中文网0987';
//过滤掉字符串二边的数字, '0..9',字母可以用'a..zA..Z'
$str = trim($str,'0..9');
echo $str, '<hr>';

/**
 * 二、.字符填充
 * 1.语法: str_pad($str,$size,$str,FLAG)
 * 2.参数: $str(必),$size(必),$str(选)填充字符,FLAG(选)填充方向
 *      默认用空格,向右填充
 *      填充标志: STR_PAD_RIGHT, STR_PAD_BOTH, STR_PAD_LEFT
 * 3.返回: 返回填充后的新字符串
 * 4.场景: 隐藏敏感信息,简单加密处理
 */

$str = 'php.cn';
echo '<pre><span style="background-color:yellow">'.$str.'</span></pre><br>';
echo '当前长度: ', strlen($str), '<br>';
//默认用空格向右填充
$str = str_pad($str, 20);
echo '当前长度: ', strlen($str), '<br>';
echo '<pre><span style="background-color:yellow">'.$str.'</span></pre><br>';
//指定填充字符与方向
$str = 'php.cn';
//$str = str_pad($str, 20,'*',STR_PAD_RIGHT);
//$str = str_pad($str, 20,'*',STR_PAD_LEFT);
$str = str_pad($str, 20,'*',STR_PAD_BOTH);
echo '<pre><span style="background-color:yellow">'.$str.'</span></pre><br>';

//应用: 用在数据加密
//密码一般采用md5或sha1加密,但相同的密码,生成的加密字符串总是相同的
//例如,密码:123456
$pass = '123456';
echo sha1($pass),'<br>';

//如果将密码用指定字符填充到一定长度后再加密,将会更加的安全
$pass = str_pad($pass,40,'php',STR_PAD_BOTH);
echo sha1($pass),'<br>'; //现在的保密性肯定要比直接用123456要安全得多





