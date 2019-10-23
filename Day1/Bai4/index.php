<?php
    $name = "Bùi Đức Khánh";
    $age = 20;
    $birthDay = "21/01/1999";
    $sex = "Nam";
    $country = "Thái Nguyên";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 5</title>
</head>
<body>
<b>Thông tin căn bản về bạn</b>
<table border="1">
    <tr>
        <td><b>Họ tên</b></td>
        <td><b>Tuổi</b></td>
        <td><b>Ngày sinh</b></td>
        <td><b>Giới tính</b></td>
        <td><b>Quê quán</b></td>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $age; ?></td>
        <td><?php echo $birthDay; ?></td>
        <td><?php echo $sex; ?></td>
        <td><?php echo $country; ?></td>
    </tr>
</table>
</body>
</html>
