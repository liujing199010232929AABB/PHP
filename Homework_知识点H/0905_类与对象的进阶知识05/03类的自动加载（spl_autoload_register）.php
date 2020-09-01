<?php
/**
 * 类的自动加载
 */
//include './class/Demo1.php';
//include './class/Demo2.php';


spl_autoload_register(function ($className){
    require './class/'.$className.'.php';
    //存在命名空间的情况下

//    $className = str_replace("\\","/", $className);
//    require './class/'.$className.'.php';
});

echo Demo1::CLASS_NAME, '<hr>';
echo Demo2::CLASS_NAME, '<hr>';

