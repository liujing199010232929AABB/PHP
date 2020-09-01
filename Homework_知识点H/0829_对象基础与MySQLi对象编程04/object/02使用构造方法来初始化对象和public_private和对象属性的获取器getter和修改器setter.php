<?php
/**
 * 1.使用构造方式来初始化对象
 * 2. 对象的访问控制,public,private
 * 3. 对象属性的获取器/ getter 和 修改器 / setter
 */

require 'class/GirlFriend2.php';

$girlfriend2 = new GirlFriend2('金莲妹妹',23,[87,88,89]);

//echo $girlfriend2->name,'<br>';
echo $girlfriend2->getName('西门大官人');

$girlfriend2->setAge(139);
//echo $girlfriend2->getAge();