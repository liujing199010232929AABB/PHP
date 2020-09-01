<?php
$detail = [
  0=>'<img src="inc/images/1.jpg" width="200px"><h3>帮主:黄蓉,绝招:《打狗棒法》</h3>' ,
  1=>'<img src="inc/images/2.jpg" width="200px"><h3>帮主:小龙女,绝招:《玉女剑法》</h3>' ,
  2=>'<img src="inc/images/3.jpg" width="200px"><h3>帮主:周芷若,绝招:《九阴真经》</h3>' ,
];

//$_POST['key']: 返回键名

//echo $detail[$_POST['key']];
echo $detail[$_GET['key']];
