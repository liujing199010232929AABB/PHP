<?php
// 1加载配置
require  __DIR__ . '/config/config.php';

// 3渲染模板
$smarty->display('demo4.html');

//1. 首先渲染的是layout.html布局文件
//2. 再渲染demo4.html