<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中间页码的生成原理</title>
    <style>
        table,th,td {
            border: 1px solid black;
        }
        table th {
            background-color: lightskyblue;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 30px auto;
            text-align: center;
        }
        table caption {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        h3 {
            text-align: center;
        }
        h3 a {
            text-decoration: none;
            margin-left: 10px;
            border: 1px solid black;

            display: inline-block;
            height: 30px;
            min-width: 30px;
            padding: 0 10px;
            background-color: lightgreen;
        }
        h3 a:hover{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
<?php
    //连接数据库获取到全部的记录
    $pdo = new PDO('mysql:host=localhost;dbname=php','root','root');
    //$sql = "SELECT * FROM staff LIMIT 5, 5;";
    //手工修改url中的get参数可以实现翻页查询
    $page = isset($_GET['p']) ? $_GET['p'] : 1;
    $offset = ($page-1)*5;

    $sql = "SELECT * FROM `staff` LIMIT {$offset}, 5;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //查看返回结果
    //    echo '<pre>'.print_r($rows,true).'</pre>';


    /**
     * 获取总页数分2步:
     * 1.获取总记录数
     * 2.再除以每次的显示数量,结果向上取整
     */
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM `staff`");
    $stmt->execute();
    $total = $stmt->fetchColumn(0);
    $pages = ceil($total / 5);  //获取到总页数 $pages
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
    <?php foreach ($rows as $row): ?>
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
    <?php if($page != 1): ?>
    <a href="http://php.io/0910/demo3.php?p=1">首页</a>
    <a href="http://php.io/0910/demo3.php?p=
<?php
    //    echo $page-1;//发现到第一页就挂掉了,怎么办?必须对$page=0进行控制
    echo (($page-1)==0)? 1 : ($page-1);
    ?>">上一页</a>
    <?php endif; ?>




<!--生成中间页码-->
    <!--将当前页码的背景色锁定:当前页码等于GET中的参数p-->
    <?php for($i=1; $i<=$pages; $i++): ?>
        <a

          href="http://php.io/0910/demo3.php?p=<?php echo $i ?>"

          <?php
            echo ($i == $page) ? 'style="background-color: red;"' : '';
          ?>

        >

        <?php echo $i ?>

        </a>
    <?php endfor; ?>





<!--当前已经是最后一页的时候,下一页和最后一页也应该不显示-->
  <?php if($page != $pages) :?>
    <a href="http://php.io/0910/demo3.php?p=
<?php
    //发现越界了,怎么办?最大页不能超过总页数才可以.
    echo (($page+1)>$pages)?$pages:($page+1);
    ?>">下一页</a>

    <a href="http://php.io/0910/demo3.php?p=<?php echo $pages; ?>">尾页</a>
 <?php endif; ?>

</h3>
</body>
</html>