<?php
/**
 * while(): 入口判断型
 * do ~ while(): 出口判断型
 */

for ($i=0; $i<10; $i++) {
    echo $i<9 ? $i.',' : $i;
}

echo '<hr>';

// while()

$i=10; //初始化条件
while($i<10) {
    echo $i<9 ? $i.',' : $i;
    $i++;  //更新条伯
}
echo '<hr>';

//do ~ while()
$i=10; //初始化条件
 do {
    echo $i<9 ? $i.',' : $i;
    $i++;  //更新条伯
} while($i<10);


