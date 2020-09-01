<?php 

//删除文件:unlink(file)
// unlink('temp.php') or die ('删除失败');

//复制copy(old, new) 
// copy('maxim.txt', '../0419/maxim01.txt') or die('复制失败');

//更名:rename(old,new):二个参数在同一目录下
// rename('maxim01.txt', 'maxim02.txt') or die('移动失败');

//移动:rename(old,new):二个参数在不同的目录下
// rename('file3.txt', __DIR__.'/../0418/file3.txt') or die('移动失败');
// rename('file2.txt', '../0418/file2.txt') or die('移动失败');

//创建目录: mkdir(dirname)
// mkdir('admin');
// rename('file.txt', 'admin/file.txt') or die('移动失败');

//删除目录
//先清空目录
// unlink('admin/file.txt');
rmdir('admin');