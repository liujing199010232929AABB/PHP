<?php
//导入分页类
require 'inc/Page.php';
use model\Page;

//实例化分页类
$page = new Page();

//连接数据库
$page->connect('mysql','localhost','php','root','root');

//获取当前页
$currentPage = $page->getPage();

//获取总页数
$totalPages = $page->getPages('staff');

//获取分页数据
$data = $page->getData('staff');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
    <title>Bootstrap分页查询</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--表格展示数据-->
            <table class="table table-bordered table-hover text-center">
                <caption class="h3 text-center">员工信息表</caption>
                <tr class="info">
                    <td>ID</td>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>性别</td>
                    <td>工资</td>
                </tr>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['sex']?'男':'女'; ?></td>
                        <td><?php echo $row['salary']; ?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <nav>
                <ul class="pagination">

                    <!--    当前是第一页的时候,上一页和首页链接应该不显示-->
                    <?php if($currentPage != 1): ?>
                        <li><a href="http://php.io/0910/demo6.php?p=1">首页</a></li>
                        <li><a href="http://php.io/0910/demo6.php?p=<?php echo $currentPage-1; ?>">&laquo;</a></li>
                    <?php endif; ?>



                <?php for($i=1; $i<=$totalPages; $i++): ?>
                        <!------高亮显示当前页码----------->
                    <li class="<?php if($currentPage==$i){echo 'active';}?>">
                        <a href="http://php.io/0910/demo6.php?p=<?php echo $i ?>">
                            <?php echo $i ?>
                        </a>
                    </li>

                <?php endfor; ?>


                    <!--当前已经是最后一页的时候,下一页和最后一页也应该不显示-->
                    <?php if($currentPage != $totalPages) :?>
                       <li><a href="http://php.io/0910/demo6.php?p=<?php echo $currentPage+1; ?>">&raquo;</a></li>

                        <li><a href="http://php.io/0910/demo6.php?p=<?php echo $totalPages; ?>">尾页</a></li>
                    <?php endif; ?>


                </ul>
            </nav>
        </div>
    </div>
</div>
<script src="inc/jquery/jquery.js"></script>
<script src="inc/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>