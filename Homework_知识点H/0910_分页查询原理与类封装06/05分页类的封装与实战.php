<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./inc/style.css">
    <title>封装分页类,实现代码复用</title>

</head>
<body>
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

<table>
    <caption>员工信息表</caption>
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>工资</th>
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



<h3>
    <!--    当前是第一页的时候,上一页和首页链接应该不显示-->
    <?php if($currentPage != 1): ?>
        <a href="http://php.io/0910/demo5.php?p=1">首页</a>
        <a href="http://php.io/0910/demo5.php?p=<?php echo $currentPage-1; ?>">上一页</a>
    <?php endif; ?>


    <!--生成中间页码-->
    <?php for($i=1; $i<=$totalPages; $i++): ?>
        <!------高亮显示当前页码----------->
        <a class="<?php if($currentPage==$i){echo 'active';}?>" href="http://php.io/0910/demo5.php?p=<?php echo $i ?>"><?php echo $i ?></a>
    <?php endfor; ?>

    <!--当前已经是最后一页的时候,下一页和最后一页也应该不显示-->
    <?php if($currentPage != $totalPages) :?>
        <a href="http://php.io/0910/demo5.php?p=<?php echo $currentPage+1; ?>">下一页</a>

        <a href="http://php.io/0910/demo5.php?p=<?php echo $totalPages; ?>">尾页</a>
    <?php endif; ?>

    <!--实现页面的快速跳转-->
    <form action="" method="get">
        第
        <select name="p" id="">
            <?php for($i=1; $i<=$totalPages; $i++): ?>
                <!-- 循环输出全部页码,并锁定当前页-->
                <option value="<?php echo $i; ?>" <?php if($currentPage==$i){echo 'selected';} ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        页

        <button>跳转</button>
    </form>

</h3>


</body>
</html>