<?php
// cookie

//1.设置cookie
//setcookie('username','admin',time()+3600);

//2.查看cookie: 超全局系统变量[数组]: $_COOKIE
//echo '<br>',$_COOKIE['username'];

//3.删除cookie
setcookie('username','admin',time()-3600);

echo '<br>',$_COOKIE['username'];