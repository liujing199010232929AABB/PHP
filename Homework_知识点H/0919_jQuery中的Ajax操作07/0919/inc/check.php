<?php
//echo json_encode('测试数据');

//连接数据库并验证用户信息
$email = htmlspecialchars(trim($_POST['email']));
$password = sha1(htmlspecialchars(trim($_POST['password'])));
$pdo = new PDO('mysql:host=localhost;dbname=php','root','root');
$sql = "SELECT COUNT(*) FROM `user` WHERE `email`= :email AND `password`= :password";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email'=>$email,'password'=>$password]);
if ($stmt->fetchColumn(0) == 1) {
    $status = 1;
    $messsage = '验证通过!';
} else {
    $status = 0;
    $messsage = '邮箱或密码错误~';
}
echo json_encode(['status'=>$status,'message'=>$messsage]);


