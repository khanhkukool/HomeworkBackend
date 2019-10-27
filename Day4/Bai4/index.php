<?php
$error = '';
$result = '';
if (isset($_GET['submit'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $gender = $_GET['gender'];
    $genderText = '';
    switch ($gender){
        case 1:
            $genderText = 'Male';
            break;
        case 2:
            $genderText = 'Female';
            break;
    }
    $state = $_GET['state'];
    $stateText = '';
    switch ($state){
        case 1:
            $stateText = 'Johor';
            break;
        case 2:
            $stateText = 'Johor1';
            break;
    }
    if (empty($firstname)) {
        $error .= "Firstname không được để trống";
    }
    else if(empty($lastname)){
        $error .= "Lastname không được để trống";
    }
    else {
        $result .= "Firstname: $firstname<br>";
        $result .= "Lastname: $lastname<br>";
        $result .= "Gender: $genderText<br>";
        $result .= "State: $stateText";
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
    <title>Bai 4</title>
</head>
<style type="text/css">
    .btn-primary {
        width: 100%;
        margin: 1px 0;
    }
</style>
<body>
<div class="container">
    <form action="" method="get">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="header-1">
                    <div class="container">
                        <h1>Registration FORM</h1>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        Firstname <br>
                        <input type="text" name="firstname" value="<?php echo isset($_GET['firstname']) ? $firstname : ''; ?>" class="form-control"> <br>
                        Lastname <br>
                        <input type="text" name="lastname" value="<?php echo isset($_GET['lastname']) ? $lastname : ''; ?>" class="form-control"> <br>
                        Gender
                        <?php
                        $checkedMale = '';
                        $checkedFemale = '';
                        if (isset($_GET['gender'])) {
                            switch ($_GET['gender']) {
                                case 1:
                                    $checkedMale = 'checked';
                                    break;
                                case 2:
                                    $checkedFemale = 'checked';
                                    break;
                            }
                        }
                        ?>
                        <input type="radio" name="gender" value="1" <?php echo $checkedMale; ?>> Male
                        <input type="radio" name="gender" value="2" <?php echo $checkedFemale; ?>> Female
                        <br>
                        State <br>
                        <select class="form-control" name="state">
                            <option value="1">Johor</option>
                            <option value="2">Johor1</option>
                        </select>
                        <button type="submit" name="submit" class="btn btn-success" style="margin: 10px 0;">Save
                            Record
                        </button>
                        <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="header-2">
                    <div class="container">
                        <h1>Exercise List</h1>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        <button type="button" class="btn btn-primary">Home Diretory</button>
                        <br>
                        <button type="button" class="btn btn-primary">FORM</button>
                        <br>
                        <button type="button" class="btn btn-primary">operator</button>
                        <br>
                        <button type="button" class="btn btn-primary">array</button>
                        <br>
                        <button type="button" class="btn btn-primary">if - else</button>
                        <br>
                        <button type="button" class="btn btn-primary">Repectition</button>
                        <br>
                        <button type="button" class="btn btn-primary">string</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<b>
    <?php
    echo $error;
    echo $result;
    ?>
</b>
</body>
</html>
