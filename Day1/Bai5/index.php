<?php
$nameDemo = "Bùi Đức Khánh";
$emailDemo = "khanh@gmail.com";
$phoneDemo = "0332xxxxx";
$messDemo = "This is a messenger";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 5</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="css/style-bai5.css">
    <script src="js"></script>
</head>
<body>
<div class="form-1">
    <div class="container-form-1">
        <form class="info" onsubmit="return showresult()">
            <div class="row">
                <div class="col-md-4 col-12">
                    <p>Name *</p>
                    <input type="text" name="name" id="name" placeholder="<?php echo $nameDemo; ?>" class="form-control">
                </div>
                <div class="col-md-4 col-12">
                    <p>Email *</p>
                    <input type="email" name="email" id="email" placeholder="<?php echo $emailDemo; ?>" class="form-control">
                </div>
                <div class="col-md-4 col-12">
                    <p>Phone *</p>
                    <input type="number" name="phone" id="phone" placeholder="<?php echo $phoneDemo; ?>" class="form-control">
                </div>
            </div>
            <div class="messenger">
                <p>Messange *</p>
                <textarea cols="" rows="4" class="form-control" id="messenger" placeholder="<?php echo $messDemo; ?>"></textarea>
            </div>
            <button type="submit" class="btn button-send form-send">Send message</button>
        </form>
        <p>* These fields are required.</p>
    </div>
    <p id="result" style="color: #005cbf"></p>
</div>
<script type="text/javascript">
    function showresult() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var messenger = document.getElementById('messenger').value;

        document.getElementById('result').innerHTML = name + "<br>" + email + "<br>" + phone + "<br>" + messenger;
        return false;
    }
</script>
</body>
</html>