<?php
session_start();
require_once 'config.php';
$sqlSelect = "SELECT * FROM employees";
$results = mysqli_query($connection, $sqlSelect);
$employees = [];
if (mysqli_num_rows($results) > 0) {
    $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-6">
        <h3>Employees List</h3>
    </div>
    <div class="col-md-6">
        <a href="create.php">
            <button type="button" class="btn btn-success">+ Add new employee</button>
        </a>
    </div>
</div>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Description</td>
        <td>Salary</td>
        <td>Gender</td>
        <td>Birthday</td>
        <td>Created_at</td>
        <td>Action</td>
    </tr>
    <?php foreach ($employees AS $employee): ?>
        <tr>
            <td>
                <?php echo $employee['id'];  ?>
            </td>
            <td>
                <?php echo $employee['name']; ?>
            </td>
            <td>
                <?php echo $employee['description']; ?>
            </td>
            <td>
                <?php echo $employee['salary']; ?>
            </td>
            <td>
                <?php
                switch ($employee['gender']) {
                    case 1:
                        echo "Male";
                        break;
                    case 0:
                        echo "Female";
                        break;
                }
                ?>
            </td>
            <td>
                <?php echo $employee['birthday']; ?>
            </td>
            <td>
                <?php echo $employee['created_at']; ?>
            </td>
            <td>
                <a href="view.php?id=<?php echo $employee['id'] ?>">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="update.php?id=<?php echo $employee['id'] ?>">
                    <i class="fas fa-pen"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                   href="delete.php?id=<?php echo $employee['id'] ?>">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
