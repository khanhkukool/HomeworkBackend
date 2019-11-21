<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-6">
        <h3>Employees List</h3>
    </div>
    <div class="col-md-6">
        <a href="index.php?controller=employee&action=create">
            <button type="button" class="btn btn-success">+ Add new employee</button>
        </a>
    </div>
</div>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td>id</td>
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
                    case 2:
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
                <?php
                    $urlView = "index.php?controller=employee&action=view&id=".$employee['id'];
                    $urlUpdate = "index.php?controller=employee&action=update&id=".$employee['id'];
                    $urlDelete = "index.php?controller=employee&action=delete&id=".$employee['id'];
                ?>
                <a href="<?php echo $urlView ?>"><i class="fas fa-eye"></i></a>
                <a href="<?php echo $urlUpdate ?>"><i class="fas fa-pen"></i></a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="<?php echo $urlDelete ?>"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
