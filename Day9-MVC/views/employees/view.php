<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Record</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>
<h3>View Record</h3>
<hr>
<?php
foreach ($employees as $employee) {
    echo "ID:<br> {$employee['id']}<br> <br> ";
    echo "Name:<br>  {$employee['name']}<br> <br> ";
    echo "Description:<br>  {$employee['description']}<br> <br> ";
    echo "Salary:<br>  {$employee['salary']}<br> <br> ";
    echo "Gender:<br>   ";
    switch ($employee['gender']) {
        case 1:
            echo "Male<br> <br>";
            break;
        case 2:
            echo "Female<br> <br>";
            break;
    }
    echo "Birthday:<br>  {$employee['birthday']}<br> <br> ";
    echo "Created_at:<br>  {$employee['created_at']}<br>";
}
?>
<a href="index.php">
    <button type="button" class="btn btn-primary">Back</button>
</a>
</body>
</html>