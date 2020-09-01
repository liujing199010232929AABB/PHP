<?php
$page_title = '用户登录';
include 'inc/header.php';

//错误 信息显示
if (isset($errors) && !empty($errors)) {
    $errors_msg = '<p style="color:red">';
    foreach ($errors as $msg) {
        $errors_msg .= $msg .'<br>';
    }
    echo $errors_msg .'</p>';
}

?>
    <h2 style="color:red">用户登录</h2>
    <form action="login.php" method="post">
        <p>
            <label for="email">邮箱:</label>
            <input type="email" name="email" id="email" value="<?php echo isset($_POST['email'])?$_POST['email']:'' ?>">
        </p>

        <p>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password" value="<?php echo isset($_POST['password'])?$_POST['password']:'' ?>">
        </p>

        <p>
            <button type="submit" name="submit" id="submit">登录</button>
        </p>
    </form>

<?php include 'inc/footer.php'?>