<?php
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['success'] = "Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form";
    header("Location: login_success.php");
    exit();
}
$error = "";
iF(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($password) || empty($password)){
        $error = "Không được để trống username hoặc password";
    }
    else if($username ==  "admin" && $password == "123456"){
        $_SESSION['username'] = $username;
        header("Location: login_success.php");
        exit();
    }
    else{
        $error = "Sai tài khoản hoặc mật khẩu";
    }
}
?>

<form action="" method="POST">
    Username <br>
    <input type="text" name="username" value=""> <br>
    Password<br>
    <input type="password" name="password" value=""> <br>
    <input type="submit" name="login" value="LOGIN">
</form>
