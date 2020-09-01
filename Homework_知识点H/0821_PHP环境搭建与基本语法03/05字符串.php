<?php
//字符串

$money = '95亿美元';
//$title1 = '阿里'.$money.'收购了饿了么';
$title1 = '阿里$money收购了\'饿了么\'';
$title2 = "阿里{$money}收购了\\\"饿了么\"";

echo $title1, '<br>', $title2, '<br>';
echo nl2br($title2);

echo '<hr>';

//heredoc
// heredoc 等价使用了双引号的字符中，可以解析内部的变量和转义特殊字符
echo  <<< "HEREDOC"
{$title2} \n  \r \t 
HEREDOC;

// nowdoc
// 相当于用单引号包装的字符串
echo <<< 'NOWDOC'
{$title2} \n  \r \t
<h3><a href="">Hello 同学们晚上好呀</a></h3>
NOWDOC;

