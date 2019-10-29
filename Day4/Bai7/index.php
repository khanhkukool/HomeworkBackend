<?php
$error = "";
$result = "";
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $web = $_GET['web'];
    $message = $_GET['message'];
    if(empty($name) || empty($email) || empty($phone) || empty($web)|| empty($message)){
        $error = "Không được để trống các trường";
    }
    elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)){
        $error = "Trường website cần phải có định dạng url";
    }
    else{
        $result .= "Send contact thành công!<br>";
        $result .= "Your name: $name<br>";
        $result .= "Your email: $email<br>";
        $result .= "Your phone number: $phone<br>";
        $result .= "Your website: $web<br>";
        $result .= "Your message: $message";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style type="text/css">
    form{
        background: #dadada;
        width: 400px;
        padding: 20px 10px;
    }
    .inpuform{
        width: 100%;
        margin: 8px 0;
        padding: 5px 10px;
    }
    .inputsubmit{
        padding: 0;
        font-size: 25px;
        background: red;
        color: #fff;
    }
</style>
<body>
    <form action="" method="get">
        <div class="container">
            <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>" placeholder="Your name" class="inpuform"><br>
            <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" placeholder="Your Email Address" class="inpuform"><br>
            <input type="number" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" placeholder="Your Phone Number" class="inpuform"><br>
            <input type="text" name="web" value="<?php echo isset($web) ? $web : ''; ?>" placeholder="Your Web Site starts with http://" class="inpuform"><br>
            <textarea rows="5" name="message" placeholder="Type your Message Here..." class="inpuform"></textarea><br>
            <input type="submit" name="submit" value="SUBMIT" class="inpuform inputsubmit">
            <p>
                <?php
                    echo $error;
                    echo $result;
                ?>
            </p>
        </div>
    </form>
</body>
</html>
