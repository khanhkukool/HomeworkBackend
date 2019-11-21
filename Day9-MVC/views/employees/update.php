<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>
<h3>Update Record</h3>
<hr>
<p>Please edit the input values and submit to update the record</p>
<form action="" method="POST">
    Name <br>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : $employee['name']; ?>">
    <br>
    Description <br>
    <textarea cols="21" rows="3" name="description"></textarea>
    <br>
    Salary <br>
    <input type="number" name="salary" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : $employee['salary']; ?>">
    <br>
    Gender <br>
    <?php
    $checkedMale = '';
    $checkedFemale = '';
    switch ($employee['gender']){
        case 1:
            $checkedMale = 'checked';
            break;
        case 2:
            $checkedFemale = 'checked';
            break;
    }
    if (isset($_POST['gender'])) {
        switch ($_POST['gender']) {
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
    <input type="date" name="birthday" value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : $employee['birthday']; ?>">
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    <a href="index.php">
        <button type="button" class="btn btn-light">Cancel</button>
    </a>
</form>
</body>
</html>