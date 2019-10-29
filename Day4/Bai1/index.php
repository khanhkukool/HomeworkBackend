<?php
$error = '';
$result = '';
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $specific = $_GET['specific'];
    $details = $_GET['details'];
    $gender = $_GET['gender'];
    $genderText = '';
    switch ($gender) {
        case 1:
            $genderText = 'Female';
            break;
        case 2:
            $genderText = 'Male';
            break;
    }
    if (empty($name)) {
        $error .= "Không được để trống name";
    } else if (empty($email)) {
        $error .= "Không được để trống email";
    } else if (empty($specific)) {
        $error .= "Không được để trống specific";
    } else if (empty($details)) {
        $error .= "Không được để trống details";
    } else {
        $result .= "Name: $name <br>";
        $result .= "Email: $email <br>";
        $result .= "Specific Time: $specific <br>";
        $result .= "Class detail: $details <br>";
        $result .= "Gender: $genderText <br>";
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
    <title>Bài 1</title>
</head>
<body>
<form action="" method="get">
    <h2>Tutorials Point Absolute classes registration</h2>
    <div class="row">
        <div class="col-md-3 col-12">
            Name:
        </div>
        <div class="col-md-8 col-12">
            <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            E-mail:
        </div>
        <div class="col-md-8 col-12">
            <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Specific Time:
        </div>
        <div class="col-md-8 col-12">
            <input type="text" name="specific" value="<?php echo isset($specific) ? $specific : ''; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Class details:
        </div>
        <div class="col-md-8 col-12">
            <textarea cols="40" rows="4" name="details"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-12">
            Gender:
        </div>
        <div class="col-md-8 col-12">
            <?php
            $checkedFemale = 'checked';
            $checkedMale = '';
            if (isset($_GET['gender'])) {
                switch ($_GET['gender']) {
                    case 1:
                        $checkedFemale = 'checked';
                        break;
                    case 2:
                        $checkedMale = 'checked';
                        break;
                }
            }
            ?>
            <input type="radio" name="gender" value="1" <?php echo $checkedFemale ?>> Female
            <input type="radio" name="gender" value="2" <?php echo $checkedMale ?>> Male
        </div>
    </div>
    <input type="submit" name="submit" value="Submit">
    <h2>Your Given details are as:</h2>
</form>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: blue">
    <?php echo $result; ?>
</h3>
</body>
</html>