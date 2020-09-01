<?php
//连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');

//创建预处理对象
$stmt = $pdo->prepare("SELECT `id`,`name`,`age`,`salary` FROM `staff` LIMIT :num");

//执行查询
$stmt->bindValue(':num', 10, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table,th,td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;  /*折叠表格线*/
            width: 600px;
            margin: 30px auto;
            text-align: center;
            padding: 5px;
        }

        table tr:first-child {
            background-color: lightgreen;
        }
        table caption {
            font-size: 1.5em;
            margin-bottom: 15px;
        }
    </style>
    <title>MVC简介</title>
</head>
<body>
    <table>
        <caption>员工信息表</caption>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>工资</th>
        </tr>
        <?php foreach ($result as $staff): ?>
        <tr>
            <td><?php echo $staff['id'] ?></td>
            <td><?php echo $staff['name'] ?></td>
            <td><?php echo $staff['age'] ?></td>
            <td><?php echo $staff['salary'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
