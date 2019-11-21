<?php
session_start();
require_once 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (!is_numeric($id)) {
        $_SESSION['error'] = "Cần phải truyền id là số";
        header("Location: index.php");
        exit();
    }
    $querySelect = "SELECT * FROM employees WHERE id = $id";
    $results = mysqli_query($connection, $querySelect);
    $employee = [];
    if (mysqli_num_rows($results) > 0) {
        $employeeArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $employee = $employeeArr[0];
    }
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
//    if ($name != NULL) {
//        $updateName = "UPDATE employees set `name` = '$name' WHERE id = {$employee['name']}";
//        $isUpdateName = mysqli_query($connection, $updateName);
//        if ($isUpdateName) {
//            $_SESSION['success'] = 'Update name thành công';
//            header("Location: index.php");
//            exit();
//        }
//    }
    $queryUpdate = "UPDATE emloyees set `name` = '$name' WHERE id = {$employee['id']}";
    $isUpdate = mysqli_query($connection, $queryUpdate);
    if ($isUpdate) {
        $_SESSION['success'] = 'Update thành công';
        header("Location: index.php");
        exit();
    } else {
        //
    }
//    if($description != ''){
//        $updateDescription = "UPDATE employees set `description` = '$description' WHERE id = {$employee['description']}";
//        $isUpdateDescription = mysqli_query($connection, $updateDescription);
//    }
//    if(!empty($name)){
//        $updateSalary = "UPDATE employees set `salary` = '$salary' WHERE id = {$employee['salary']}";
//        $isUpdateSalary = mysqli_query($connection, $updateSalary);
//    }
//    if(!empty($name)){
//        $updateGender = "UPDATE employees set `gender` = '$gender' WHERE id = {$employee['gender']}";
//        $isUpdateGender = mysqli_query($connection, $updateGender);
//    }
//    if(!empty($name)){
//        $updateBirthday = "UPDATE employees set `birthday` = '$birthday' WHERE id = {$employee['birthday']}";
//        $isUpdateBirthday = mysqli_query($connection, $updateBirthday);
//    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<h3>Update Record</h3>
<hr>
<p>Please edit the input values and submit to update the record</p>
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
    <a href="list.php">
        <button type="button" class="btn btn-light">Cancel</button>
    </a>
</form>
</body>
</html>