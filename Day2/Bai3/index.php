<?php
$a = 6;
const PI = 3.14;
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
        echo "Đường kính hình tròn = " . ($a) . "m" . "<br>";
        echo "Chu vi hình tròn = " . $PI*$a . "m" . "<br>";
        echo "Diện tích hình tròn = " . $PI*$a*$a . "m<sup>2</sup>" . "<br>";
        ?>
    </b>
</div>
</body>
</html>
