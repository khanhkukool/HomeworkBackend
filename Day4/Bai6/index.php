<?php
$error = "";
$result = "";
function sum($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mul($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

if (isset($_GET['sum'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if (empty($number1) || empty($number2)) {
        $error = "Không được để trống số a hoặc số b";
    } elseif ((is_numeric($number1) == false) || (is_numeric($number2) == false)) {
        $error = "Vui lòng nhập số";
    } else {
        $sum = sum($number1, $number2);
        $result = "a + b = $sum";
    }
}
if (isset($_GET['sub'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if (empty($number1) || empty($number2)) {
        $error = "Không được để trống số a hoặc số b";
    } elseif ((is_numeric($number1) == false) || (is_numeric($number2) == false)) {
        $error = "Vui lòng nhập số";
    } else {
        $sub = sub($number1, $number2);
        $result = "a - b = $sub";
    }
}
if (isset($_GET['mul'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if (empty($number1) || empty($number2)) {
        $error = "Không được để trống số a hoặc số b";
    } elseif ((is_numeric($number1) == false) || (is_numeric($number2) == false)) {
        $error = "Vui lòng nhập số";
    } else {
        $mul = mul($number1, $number2);
        $result = "a * b = $mul";
    }
}
if (isset($_GET['div'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if (empty($number1) || empty($number2)) {
        $error = "Không được để trống số a hoặc số b";
    } elseif ((is_numeric($number1) == false) || (is_numeric($number2) == false)) {
        $error = "Vui lòng nhập số";
    } else {
        $div = div($number1, $number2);
        $result = "a / b = $div";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bài 6</title>
</head>
<body>
<div class="container">
    <form action="" method="get">
        <h1>Thực hành toán tử</h1>
        <hr>
        <p id="error" style="color: red;"></p>
        <div class="row inputa">
            <div class="col-md-6 col-12">
                Nhập vào số a:
            </div>
            <div class="col-md-6 col-12">
                <input type="text" name="number1" class="form-control"
                       value="<?php echo isset($number1) ? $number1 : ''; ?>">
            </div>
        </div>
        <div class="row inputb">
            <div class="col-md-6 col-12">
                Nhập vào số b:
            </div>
            <div class="col-md-6 col-12">
                <input type="text" name="number2" class="form-control"
                       value="<?php echo isset($number2) ? $number2 : ''; ?>">
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary" name="sum">a + b</button>
            <button type="submit" class="btn btn-success" name="sub">a - b</button>
            <button type="submit" class="btn btn-danger" name="mul">a * b</button>
            <button type="submit" class="btn btn-warning" name="div">a / b</button>
        </div>
        <p>
            <?php echo $error; ?>
            <?php echo $result; ?>
        </p>
    </form>
</div>
</body>
</html>
