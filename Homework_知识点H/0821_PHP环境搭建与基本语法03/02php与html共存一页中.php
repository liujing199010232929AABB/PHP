<!--将php与html进行混编-->
<!--html是超文本标记语言,任何元素必须用标签的方式才可以嵌入到html文档-->
<?php

$site = 'php中文网';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo '默认标题' ?></title>
</head>
<body>
<?php
    echo '<h2>欢迎访问: <a href="http://php.cn">'.$site.'</a></h2>';
?>
</body>
</html>
<?php
 echo '<hr>原来php这么好玩';
/**
 * 1. php代码必须在服务器执行;
 * 2. php必须要用标签<?php 和 ?>嵌入到html代码中
 * 3. php代码可以出现在html中的任何地方
 * 4. 文件名必须以php结尾
 */
?>

