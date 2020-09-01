<?php
/**
 * 字符串中的html标签过滤与转换
 * 1. nl2br():在换行符\n前插入html换行标记<br>
 * 2. htmlspecialchars(),将代码中的单双号号,&符与<和>转为html实体字符,不解析
 *    反操作: htmlspecialchars_decode(): 与htmlspecailchars()功能相反,将实体字符进行解析还原
 * 3. htmlentities(): 将所有的html标记全部转实体,包括了htmlspecailchars中的标记,功能更强大
 *    反操作: html_entity_decode()
 * 4. strip_tags(): 过滤掉所有的html或php标记,可以设置允许保留的标记,很实用
 */

//1. nl2br()
$str1 = "2018年世界杯 \n 中国除了足球队没有去,其它的都去了";
echo $str1, '<br>'; //没有出现预想中的换行,因为浏览器将\n解析为一个空格
//如果想让\n产生换行的效果,可以在前面加上一个<br>标签,尽管你可以使用很多方法实现,但系统提供一个更简单的方案
echo nl2br($str1), '<hr>';

//2. htmlspecailchars() 和反操作: htmlspecialchars_decode(),
$str2 = '<h1>他是\'一个&nbsp;有"故事"的人</h1>';
//不转义输出
echo '不转义输出:',$str2, '<br>';
//正常转义: ',",&,<,>
echo '正常转义:', htmlspecialchars($str2), '<hr>';

$str3 = "&lt;h1&gt;我也是'一个&amp;nbsp;有&quot;故事&quot;的人&lt;/h1&gt";
//将字符串中html实体字符解析成正常的标签进行显示
echo htmlspecialchars_decode($str3), '<br>';

//3. htmlentities() 和 反操作:html_entity_decode()
$str4 = "<p>中美&贸\$易战,'中国'必胜</p>";
//echo $str4;
echo htmlentities($str4),'<br>';
echo '<hr>';

//4.strip_tags()很实用的一个函数
$str5 = '<p>php是世界上<span style="color:red">最好的</span>编程语言吗?</p>';
echo $str5;
//过滤掉所有的html标签
echo strip_tags($str5),'<br>';
//保留span标签
echo strip_tags($str5,'<span>'),'<br>';
