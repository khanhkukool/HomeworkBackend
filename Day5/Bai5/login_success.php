<?php
session_start();
if (isset($_SESSION['username']) == FALSE) {
    $_SESSION['success'] = "Bạn cần đăng nhập để tiếp tục";
    header("Location: create.php");
    exit();
}
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    $_SESSION['success'] = "Bạn đã đăng xuất khỏi hệ thống";
    header("Location: create.php");
    exit();
}
?>
<p>
    Đăng nhập thành công! <br>
    Chào mừng bạn, <?php echo $_SESSION['username']; ?> <br>
    Thời gian hiện tại đang login <?php echo date('d/m/Y - H:i:s'); ?>
</p>
<form action="" method="POST">
    <input type="submit" name="logout" value="Logout">
</form>

