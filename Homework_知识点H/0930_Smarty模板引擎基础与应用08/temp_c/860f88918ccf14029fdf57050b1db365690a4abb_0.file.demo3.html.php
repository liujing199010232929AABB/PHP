<?php
/* Smarty version 3.1.32, created on 2018-09-30 09:47:15
  from 'D:\myphp_www\PHPTutorial\WWW\php\0930\temp\demo3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb09ba365bfc7_17658344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '860f88918ccf14029fdf57050b1db365690a4abb' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\php\\0930\\temp\\demo3.html',
      1 => 1538300824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/title.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_5bb09ba365bfc7_17658344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"中秋节"), 0, false);
$_smarty_tpl->assign('title', ob_get_clean());
?>

<p>在这个带“国”字头的节日里，人们趁着假期，或举家出游、欣赏秋景，或阖家团圆、
    休闲娱乐，都会以轻松愉快的方式享受一年一度的“黄金周”。
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    但，过好国庆节，
    我们无论是出行、购物，还是与友欢聚、捧书私叙，都不能忘记国庆是“为祖国庆生”
    的内涵和意义，理应找寻适当方式，为我们朝夕于是的国家庆生。</p>

<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
