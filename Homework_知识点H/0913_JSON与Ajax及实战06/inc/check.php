<?php

//print_r($_POST['data']);
//echo $data['email'];


$user = json_decode($_POST['data']);
//echo $user->email;
$email = $user->email;
$password = sha1($user->password);

$pdo = new PDO('mysql:host=localhost;dbname=php','root','root');

$sql = "SELECT COUNT(*) FROM `user` WHERE `email`='{$email}' AND `password`='{$password}' ";

$stmt = $pdo->prepare($sql);

$stmt->execute();

if ($stmt->fetchColumn(0) == 1) {
    echo json_encode(['status'=>1,'msg'=>'登录成功,正在跳转...']) ;
    exit;
} else {
    echo json_encode(['status'=>0,'msg'=>'邮箱或密码错误,登录失败!']) ;
    exit;
}

