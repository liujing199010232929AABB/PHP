<?php
$detail = [
    '<img src="inc/images/1.jpg" width="200"><h3>帮主: 黄蓉, 绝招:《打狗棒》</h3>',
    '<img src="inc/images/2.jpg" width="200"><h3>掌门: 小龙女, 绝招:《玉女剑法》</h3>',
    '<img src="inc/images/3.jpg" width="200"><h3>掌门: 周芷若, 绝招:《九阴真经》</h3>'
];

echo $detail[$_POST['key']];      // post 请求时开启
//echo $detail[$_GET['key']];     // get 请求时开启