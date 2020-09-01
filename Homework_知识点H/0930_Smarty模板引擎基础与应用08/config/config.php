<?php
/**
 * Smarty模板引擎的全局配置文件
 */
// 使用Composer 的类库自动加载机制进入导入
require __DIR__ . '/../vendor/autoload.php';
//创建smarty模板对象
$smarty = new Smarty();

//配置目录: 必选
//模板目录
$smarty->setTemplateDir(__DIR__ . '/../temp');

//编译目录,内部的文件是php与html混写的
$smarty->setCompileDir(__DIR__ . '/../temp_c');

//缓存目录
$smarty->setCacheDir(__DIR__ . '/../cache');

//配置目录
$smarty->setConfigDir(__DIR__ . '/../config');

//配置定界符: 可选
$smarty->setLeftDelimiter('{');
$smarty->setRightDelimiter('}');

// 配置缓存
$smarty->setCaching(false);  // true 开启  false 关闭
$smarty->setCacheLifetime(60*60*24*7);

