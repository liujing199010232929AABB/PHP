<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>手工分页查询</title>
    <style>
        table,th,td {
            border: 1px solid black;
        }
        table th {
            background-color: lightskyblue;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
            text-align: center;
        }
        table caption {
            font-size: 1.5rem;
            margin-bottom: 15px;
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
//        echo '<pre>'.print_r($rows,true).'</pre>';

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
            <td><?php echo $row['sex']?'女':'男'; ?></td>
            <td><?php echo $row['salary']; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>