<?php
$error = '';
$result = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $academic = $_POST['academic'];
    $token = isset($_POST['token']) ? $_POST['token'] : [];
    $message = $_POST['message'];
    $concentration = $_POST['concentration'];
    $concentrationText = '';
    switch ($concentration) {
        case 1:
            $concentrationText = 'Computer Science';
            break;
        case 2:
            $concentrationText = 'Information Science';
            break;
        case 3:
            $concentrationText = 'Information Technology';
            break;
    }
    $academicText = '';
    switch ($academic) {
        case 1:
            $academicText .= "Freshman";
            break;
        case 2:
            $academicText .= "Senior";
            break;
        case 3:
            $academicText .= "Junior";
            break;
    }
    if (empty($email)) {
        $error .= "Không được để trống name";
    } else if (empty($password)) {
        $error .= "Không được để trống email";
    } else if (strlen($password) < 8) {
        $error .= "Password phải có độ dài tối thiểu 8 ký tự";
    } else {
        $result .= "Đăng ký thành công !<br>";
        $result .= "Thông tin của bạn: <br>";
        $result .= "Email: $email <br>";
        $result .= "Select academy: $academicText <br>";
        if(in_array(1,$token) == TRUE){
            $result .= "Token: CSSCI 1700 <br>";
        }
        if(in_array(2,$token) == TRUE){
            $result .= "Token: CSSCI 1800 <br>";
        }
        if(in_array(3,$token) == TRUE){
            $result .= "Token: CSSCI 2800 <br>";
        }
        if(in_array(4,$token) == TRUE){
            $result .= "Token: CSSCI 2150 <br>";
        }
        if(in_array(5,$token) == TRUE){
            $result .= "Token: CSSCI 2910 <br>";
        }
        $result .= "Concentration: $concentrationText <br>";
        $result .= "Message: $message";
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
    <title>Bài 1</title>
</head>
<body>
<form action="" method="POST" style="max-width: 500px; background: #04d2c6; padding: 5px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12">
                Enter e-mail address:
            </div>
            <div class="col-md-7 col-12">
                <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                Enter password:
            </div>
            <div class="col-md-7 col-12">
                <input type="password" name="password" value="<?php echo isset($password) ? $password : ''; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                Select academic level:
            </div>
            <div class="col-md-7 col-12">
                <select name="academic">
                    <option value="1">Freshman</option>
                    <option value="2">Senior</option>
                    <option value="3">Junior</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                Identify courses taken:
            </div>
            <div class="col-md-7 col-12">
                <input type="checkbox" name="token[]" value="1"> CSCI 1710 <br>
                <input type="checkbox" name="token[]" value="2"> CSCI 1800 <br>
                <input type="checkbox" name="token[]" value="3"> CSCI 2800 <br>
                <input type="checkbox" name="token[]" value="4"> CSCI 2910 <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                Select concentration:
            </div>
            <div class="col-md-7 col-12">
                <?php
                $checkedCS = '';
                $checkedIS = '';
                $checkedIT = '';
                if (isset($_POST['concentration'])) {
                    switch ($_POST['concentration']) {
                        case 1:
                            $checkedCS = 'checked';
                            break;
                        case 2:
                            $checkedIS = 'checked';
                            break;
                        case 3:
                            $checkedIT = 'checked';
                            break;
                    }
                }
                ?>
                <input type="radio" name="concentration" value="1" <?php echo $checkedCS ?>> Computer Science (CS) <br>
                <input type="radio" name="concentration" value="2" <?php echo $checkedIS ?>> Information Science (IS) <br>
                <input type="radio" name="concentration" value="3" <?php echo $checkedIT ?>> Information Technology (IT) <br>
            </div>
        </div>
        <div class="row">
            <textarea name="message" cols="60" rows="5" placeholder="Enter any comments you have here." style="margin: 0 auto;"></textarea>
        </div>
        <div style="text-align: center;">
            <input type="submit" name="submit" value="Submit Data">
        </div>
    </div>
</form>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: blue">
    <?php echo $result; ?>
</h3>
</body>
</html>