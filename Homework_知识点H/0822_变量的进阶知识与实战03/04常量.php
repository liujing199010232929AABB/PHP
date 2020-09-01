<?php
/**
 *常量:只读变量,不可更新,不可删除，没有作用域限制,直接在函数中使用而不声明
 * 通常常量全部采用大写字母,并且不能以$开头，多个单词建议中间用下划线连接
 */
echo '<h3>常量声明,赋值,输出</h3>';
echo '<hr color="green">';

//创建
define('SITE_NAME','Peter Zhu的博客'); // define()函数
const COUNTRY = '中国'; // 关键字const

//访问
echo SITE_NAME, COUNTRY, '<br>';

echo constant('SITE_NAME'),'<br>';

//echo '<pre>',print_r(get_defined_constants(),true),'</pre>';

//检测
echo defined('SITE_NAME1') ? '已定义' : '<span style="color:red">未定义</span>';

