<style type="text/css">
    div {
        display: inline-block;
        border: solid 1px #000000;
    }
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$n = 20;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i % 2 == 0) {
            if ($j % 2 == 0) {
                echo "<div style='width: 50px; height: 50px; background: #000000'></div>";
            } else echo "<div style='width: 50px; height: 50px; background: #ffffff'></div>";
        } else {
            if ($j % 2 != 0) {
                echo "<div style='width: 50px; height: 50px; background: #000000'></div>";
            } else echo "<div style='width: 50px; height: 50px; background: #ffffff'></div>";
        }
    }
    echo "<br>";
}
?>
</body>
</html>
