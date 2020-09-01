<?php
require 'class/GirlFriend3.php';

$girlfriend3 = new GirlFriend3('冰冰姐',38,[98,128,188]);

echo $girlfriend3->name,'<br>';
echo $girlfriend3->age,'<br>';
$girlfriend3->age = 45;
echo $girlfriend3->age,'<br>';
echo $girlfriend3->email,'<br>';
