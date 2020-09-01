<?php
/**
 * 流程控制: 条件判断与多分支
 */

//1.单分支
$grade = 55;
if ($grade < 60) {
    echo '<p style="color:red">很不幸,您得补考</p>';
}

//2.双分支
$grade = 75;
if ($grade < 60) {
    echo '<p style="color:red">很不幸,您得补考</p>';
} else {  // $grade >= 60
    echo '<p style="color:green">恭喜，及格了</p>';
}

//3.多分支
$grade = 85;
if ($grade < 60) {
    echo '<p style="color:red">很不幸,您得补考</p>';
} else if ($grade >= 60 && $grade < 80) {  // $grade >= 60
    echo '<p style="color:green">考得还不错</p>';
} else if ($grade >= 80 && $grade <= 100) {  // $grade >= 60
    echo '<p style="color:green">真TM的是个天才</p>';
}

//4.三元判断:双分一个简写
$age = 16;
echo ($age >= 18) ? '<script>alert("已成年,可以浏览但不可沉迷其中")</script>' : '<p style="color:red">未成年自觉离开</p>';

//5 switch
$program = 'Java';
switch (strtolower($program)) {
    case 'php':
        echo '<p>php是全世界最好的编程语言~~</p>';
        break;
    case 'java':
        echo '<p>通用的编程语言~~</p>';
        break;
    case 'html':
        echo '<p>超文本标记语言~~</p>';
        break;
    default:  // 相当于 else
        echo '<p>你关心的语言未收录~~</p>';
}