<?php
$a = 10;
$b = 5;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1</title>
</head>
<body>
<div>
    <b>
        <?php
        echo "Chiều dài hình chữ nhật = " . ($a) . "m" . "<br>";
        echo "Chiều rộng hình chữ nhật = " . ($b) . "m" . "<br>";
        echo "Chu vi hình chữ nhật = " . ($a + $b) . "m" . "<br>";
        echo "Diện tích dài hình chữ nhật = " . ($a * $b) . "m<sup>2</sup>" . "<br>";
        ?>
    </b>
</div>
</body>
</html>
