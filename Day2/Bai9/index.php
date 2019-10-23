<?php
$number1 = 1;
$number2 = 2;
$number3 = 3;
$number4 = 4;
$number5 = 5;
$number6 = 6;
$number7 = 7;
$number8 = 8;
$number9 = 9;
$number10 = 10;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 9</title>
</head>
<body>
<table style="text-align: center" border="1">
    <tr style="background: lightskyblue; color: red">
        <td><b><?php echo $number1;?></b></td>
        <td><b><?php echo $number2;?></b></td>
        <td><b><?php echo $number3;?></b></td>
        <td><b><?php echo $number4;?></b></td>
        <td><b><?php echo $number5;?></b></td>
    </tr>
    <tr>
        <td>
            <?php
                for($i = 1; $i <= 10; $i++){
                    echo "$number1 x $i = " . $number1 * $i . "<br>";
                }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number2 x $i = " . $number2 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number3 x $i = " . $number3 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number4 x $i = " . $number4 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number5 x $i = " . $number5 * $i . "<br>";
            }
            ?>
        </td>
    </tr>
    <tr style="background: lightskyblue; color: red">
        <b>
        <td><b><?php echo $number6;?></b></td>
        <td><b><?php echo $number7;?></b></td>
        <td><b><?php echo $number8;?></b></td>
        <td><b><?php echo $number9;?></b></td>
        <td><b><?php echo $number10;?></b></td>
        </b>
    </tr>
    <tr>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number6 x $i = " . $number6 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number7 x $i = " . $number7 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number8 x $i = " . $number8 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number9 x $i = " . $number9 * $i . "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "$number10 x $i = " . $number10 * $i . "<br>";
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
