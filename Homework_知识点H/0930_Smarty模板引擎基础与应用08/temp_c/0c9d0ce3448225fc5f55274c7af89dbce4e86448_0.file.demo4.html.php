<?php
/* Smarty version 3.1.32, created on 2018-09-30 10:03:43
  from 'D:\myphp_www\PHPTutorial\WWW\php\0930\temp\demo4.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb09f7fe4c2d4_39650284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9d0ce3448225fc5f55274c7af89dbce4e86448' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\php\\0930\\temp\\demo4.html',
      1 => 1538301819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb09f7fe4c2d4_39650284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149635bb09f7fe476e4_52374144', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301525bb09f7fe48521_48696786', "nav");
?>

<hr>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72755bb09f7fe4b933_30231950', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "title"} */
class Block_149635bb09f7fe476e4_52374144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_149635bb09f7fe476e4_52374144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
模板继承的实例<?php
}
}
/* {/block "title"} */
/* {block "nav"} */
class Block_301525bb09f7fe48521_48696786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_301525bb09f7fe48521_48696786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="">首页</a>
<a href="">公司新闻</a>

<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


<a href="">联系我们</a>
<?php
}
}
/* {/block "nav"} */
/* {block "content"} */
class Block_72755bb09f7fe4b933_30231950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72755bb09f7fe4b933_30231950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h3>“为祖国庆生”应是 中秋节 主旋律</h3>
<p>
    但，过好国庆节， 我们无论是出行、购物，还是与友欢聚、
    捧书私叙，都不能忘记国庆是“为祖国庆生” 的内涵和意义，理
    应找寻适当方式，为我们朝夕于是的国家庆生。
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


</p>
<?php
}
}
/* {/block "content"} */
}
