<?php
// 使用下载的压缩包进行导入
//require __DIR__ . '/libs/Smarty.class.php';

// 使用Composer 的类库自动加载机制进入导入
require __DIR__ . '/vendor/autoload.php';


$smarty = new Smarty();
var_dump($smarty);
