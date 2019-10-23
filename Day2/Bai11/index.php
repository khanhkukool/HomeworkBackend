<?php
function checkNT($number)
{
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i == 0) {
            return FALSE;
        }
    }
    return TRUE;
}
?>
<style type="text/css">
    .checkNgto{
        display: inline-block;
        border: 1px solid #000000;
        text-align: center;
        padding-top:20px;
    }
    .SNT{
        margin: 0 auto;
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
$n = 100;
for ($i = 1; $i <= $n; $i++) {
    if (checkNT($i) &&  $i != 1) {
        echo "<div style='width: 80px; height: 35px; background:greenyellow;' class='checkNgto'><b>" .$i. "</b></div>";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    else {
        echo "<div style='width: 80px; height: 35px; background: #ffffff;' class='checkNgto'><b>" .$i. "</b></div>";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
}
?>
</div>
</body>
</html>