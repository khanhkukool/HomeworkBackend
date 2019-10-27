<?php
$errorlastname = '';
$errorpassword = '';
$errorconfirm = '';
$result = "";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if (empty($lastname)) {
        $errorlastname = 'Please enter your lasname';
    } elseif (empty($password)) {
        $errorpassword = 'Please provide a password';
    } elseif (empty($confirm)) {
        $errorconfirm = 'Please provide a password';
    } elseif ($confirm != $password) {
        $errorconfirm = 'Confirm password is not true';
    } else {
        $result .= "Đăng ký thành công! <br>";
        $result .= "Thông tin của bạn: <br>";
        $result .= "Firstname: $firstname <br>";
        $result .= "Lastname: $lastname <br>";
        $result .= "Username: $username <br>";
        $result .= "Email: $email <br>";
    }
}
?>
<style type="text/css">
    .row {
        margin: 5px 0;
    }
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bài 5</title>
</head>
<body>
<form action="" method="POST">
    <h2>Register</h2>
    <div class="row">
        <div class="col-md-3 col-12">
            Firstname:
        </div>
        <div class="col-md-8 col-12">
            <input type="text" name="firstname" value="<?php echo isset($firstname) ? $firstname : ''; ?>"
                   class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Lastname:
        </div>
        <div class="col-md-8 col-12">
            <input type="text" name="lastname" value="<?php echo isset($lastname) ? $lastname : ''; ?>"
                   class="form-control">
            <b style="color: red"><?php echo $errorlastname; ?></b>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-12">
            Username:
        </div>
        <div class="col-md-8 col-12">
            <input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>"
                   class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Email Address:
        </div>
        <div class="col-md-8 col-12">
            <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Password:
        </div>
        <div class="col-md-8 col-12">
            <input type="password" name="password" value="<?php echo isset($password) ? $password : ''; ?>"
                   class="form-control">
            <b style="color: red"><?php echo $errorpassword; ?></b>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-12">
            Confirm Password:
        </div>
        <div class="col-md-8 col-12">
            <input type="password" name="confirm" value="<?php echo isset($confirm) ? $confirm : ''; ?>"
                   class="form-control">
            <b style="color: red"><?php echo $errorconfirm; ?></b>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
        </div>
        <div class="col-md-8 col-12">
            <input type="submit" name="submit" value="Save" style="background: #0584ff;">
        </div>
    </div>
</form>
<b style="color: blue">
    <?php echo $result; ?>
</b>
</body>
</html>