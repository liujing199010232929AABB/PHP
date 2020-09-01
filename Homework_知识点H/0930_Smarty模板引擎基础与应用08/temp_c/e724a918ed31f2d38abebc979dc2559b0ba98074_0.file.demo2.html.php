<?php
/* Smarty version 3.1.32, created on 2018-09-30 09:37:10
  from 'D:\myphp_www\PHPTutorial\WWW\php\0930\temp\demo2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb099466d0ce1_07141106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e724a918ed31f2d38abebc979dc2559b0ba98074' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\php\\0930\\temp\\demo2.html',
      1 => 1538300220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb099466d0ce1_07141106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'welcome' => 
  array (
    'compiled_filepath' => 'D:\\myphp_www\\PHPTutorial\\WWW\\ajax2\\0930\\temp_c\\e724a918ed31f2d38abebc979dc2559b0ba98074_0.file.demo2.html.ajax2',
    'uid' => 'e724a918ed31f2d38abebc979dc2559b0ba98074',
    'call_name' => 'smarty_template_function_welcome_296605bb0994666a560_43119436',
  ),
  'hello' => 
  array (
    'compiled_filepath' => 'D:\\myphp_www\\PHPTutorial\\WWW\\ajax2\\0930\\temp_c\\e724a918ed31f2d38abebc979dc2559b0ba98074_0.file.demo2.html.ajax2',
    'uid' => 'e724a918ed31f2d38abebc979dc2559b0ba98074',
    'call_name' => 'smarty_template_function_hello_296605bb0994666a560_43119436',
  ),
));
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>模板中的自定义变量,函数和流程控制</title>
</head>
<body>
<?php $_smarty_tpl->_assignInScope('siteName', "php中文网");?>
<h4><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</h4>
<?php $_smarty_tpl->_assignInScope('brand', "Apple");?>
<h4><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</h4>

<?php $_smarty_tpl->_assignInScope('data', 58);
if ((1 & $_smarty_tpl->tpl_vars['data']->value)) {?>
<h4><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 是奇数</h4>
<?php } else { ?>
<h4><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 是偶数</h4>
<?php }?>

<?php $_smarty_tpl->_assignInScope('grade', 88);
if ($_smarty_tpl->tpl_vars['grade']->value > 80) {?>
<h4>优秀</h4>
<?php } elseif ($_smarty_tpl->tpl_vars['grade']->value >= 60) {?>
<h4>及格了</h4>
<?php } else { ?>
<h4 style="color:red">准备补考吧</h4>
<?php }?>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 2;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
echo $_smarty_tpl->tpl_vars['i']->value;?>
,
<?php }} else { ?>
<span style="color:red">循环条件错误</span>
<?php }
?>

<hr>
<?php $_smarty_tpl->_assignInScope('i', 0);
while (($_smarty_tpl->tpl_vars['i']->value < 20)) {
echo $_smarty_tpl->tpl_vars['i']->value++;?>

<?php }?>

<hr>

<?php $_smarty_tpl->_assignInScope('staff', array('name'=>'peter_zhu','sex'=>'male','salary'=>9999));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staff']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['key']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, "welcome", array('site'=>"www.php.cn"), true);?>


<hr>



<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'welcome', array('site'=>"php中文网"), true);?>




</body>
</html><?php }
/* smarty_template_function_welcome_296605bb0994666a560_43119436 */
if (!function_exists('smarty_template_function_welcome_296605bb0994666a560_43119436')) {
function smarty_template_function_welcome_296605bb0994666a560_43119436(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('site'=>"php中文网"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<p>欢迎来到 <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
 学习</p>
<?php
}}
/*/ smarty_template_function_welcome_296605bb0994666a560_43119436 */
/* smarty_template_function_hello_296605bb0994666a560_43119436 */
if (!function_exists('smarty_template_function_hello_296605bb0994666a560_43119436')) {
function smarty_template_function_hello_296605bb0994666a560_43119436(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<p>欢迎来到 <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
 学习</p>
<?php
}}
/*/ smarty_template_function_hello_296605bb0994666a560_43119436 */
}
