<?php
/* Smarty version 3.1.32, created on 2018-09-30 09:00:13
  from 'D:\myphp_www\PHPTutorial\WWW\php\0930\temp\demo1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb0909d15be49_24935811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78430b59486e04605f11561290d24939e2d161ee' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\php\\0930\\temp\\demo1.html',
      1 => 1538298010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb0909d15be49_24935811 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smarty中的变量与函数</title>
</head>
<body>
<h3>我的名字是: <?php echo $_smarty_tpl->tpl_vars['myName']->value;?>
</h3>
<h3>我的课程是: <?php echo $_smarty_tpl->tpl_vars['courses']->value[2];?>
</h3>
<h3>我的课程是: <?php echo $_smarty_tpl->tpl_vars['courses']->value['2'];?>
</h3>
<h3>我的课程是: <?php echo $_smarty_tpl->tpl_vars['courses']->value[3];?>
</h3>
<h3>站点名称: <?php echo $_smarty_tpl->tpl_vars['test']->value->site;?>
</h3>
<h3>欢迎语: <?php echo $_smarty_tpl->tpl_vars['test']->value->welcome();?>
</h3>
<h3><?php echo $_smarty_tpl->tpl_vars['price']->value+200;?>
</h3>
<h3>域名:<?php echo @constant('SITE');?>
</h3>
<h3>我的身份是: <?php echo $_POST['user_name'];?>
</h3>
<h3>当前页码是: <?php echo $_GET['page'];?>
</h3>
<h3>密码是: <?php echo $_SESSION['password'];?>
</h3>
<h3>用函数来求和: <?php echo add(30,50);?>
</h3>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "app.ini", null, 0);
?>

<p>当前的应用名称: <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'app_name');?>
</p>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "app.ini", "database", 0);
?>

<p>当前主机名称: <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'host_name');?>
</p>



</body>
</html><?php }
}
