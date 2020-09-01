<?php
/* Smarty version 3.1.32, created on 2018-09-30 10:01:03
  from 'D:\myphp_www\PHPTutorial\WWW\php\0930\temp\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb09edf940b76_12013535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe455059d70e5334b321afe033c6a9347a02cd6' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\php\\0930\\temp\\layout.html',
      1 => 1538301649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb09edf940b76_12013535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302715bb09edf93d667_18573190', "title");
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190485bb09edf93faf0_05629411', "nav");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97345bb09edf940477_99070249', "content");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_302715bb09edf93d667_18573190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_302715bb09edf93d667_18573190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
页面标题<?php
}
}
/* {/block "title"} */
/* {block "nav"} */
class Block_190485bb09edf93faf0_05629411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_190485bb09edf93faf0_05629411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="">公司产品</a>
<?php
}
}
/* {/block "nav"} */
/* {block "content"} */
class Block_97345bb09edf940477_99070249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_97345bb09edf940477_99070249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="">php中文网祝大家国庆快乐</a>
<?php
}
}
/* {/block "content"} */
}
