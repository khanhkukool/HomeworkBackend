<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<h3>Create Record</h3>
<hr>
<form action="" method="POST">
    Name <br>
    <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
    <br>
    Description <br>
    <textarea cols="21" rows="3" name="description"></textarea>
    <br>
    Salary <br>
    <input type="number" name="salary" value="<?php echo isset($salary) ? $salary : ''; ?>">
    <br>
    Gender <br>
    <?php
    $checkedMale = 'checked';
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
    <input type="radio" name="gender" value="1" <?php echo $checkedMale ?>> Male
    <input type="radio" name="gender" value="2" <?php echo $checkedFemale ?>> Female
    <br>
    Birthday <br>
    <input type="date" name="birthday" value="birthday">
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    <a href="list.php"><button type="button" class="btn btn-light">Cancel</button></a>
</form>
<h4 style="color: red">
    <?php
    echo $error;
    ?>
</h4>
</body>
</html>
