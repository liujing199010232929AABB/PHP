<?php 
//字符串的大小写转换
echo strtolower('THIS IS A PHP COURSE'), '<br>';

echo strtoupper('this is php course'), '<br>';

echo ucfirst('this is php course'), '<br>';

echo ucwords('this is php course'), '<br>';

//应用1: 将文件名全部转为小写,实现跨平台(linux是区分大小写的)
$files = ['Model.php','Action.php','CreateUser.php'];
foreach ($files as $file) {
   $res[] = strtolower($file);
}
//print_r($res);
$files = $res;
echo var_export($files, true), '<br>';

//应用2: 将要判断的字符串统一转为小写或大写,便于比较
$opt = 'Edit'; // EDIT/edit, DELETE/delete/,Select/SELECT/select....
$opt = strtolower($opt);  //全部转为小写,便于统一处理
switch ($opt)
{
    case 'select':
        print '查询操作';
        break;
    case 'edit':
        print '编辑操作';
        break;
    case 'delete':
        print '删除操作';
        break;
    case 'update':
        print '更新操作';
        break;
    default:
        exit('非法操作');

}