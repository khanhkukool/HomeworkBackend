<?php
$error = "";
$result = "";
if (isset($_POST['submit']) && isset($_POST['accept'])) {
    $username = $_POST['username'];
    $passsword = $_POST['password'];
    $userType = $_POST['userType'];
    $displayName = $_POST['displayName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $genderText = "";
    switch ($gender) {
        case 1:
            $genderText = "Male";
            break;
        case 2:
            $genderText = "Female";
            break;
    }
    $userTypeText = '';
    switch ($userType){
        case 1:
            $userTypeText = 'Select 1';
            break;
        case 2:
            $userTypeText = 'Select 2';
            break;
        case 3:
            $userTypeText = 'Select 3';
            break;
    }
    if (empty($username)) {
        $error .= "Không được để trống username";
    } else if (empty($passsword)) {
        $error .= "Không được để trống password";
    } else if (empty($displayName)) {
        $error .= "Không được để trống Display Name";
    } else if (empty($address)) {
        $error .= "Không được để trống address";
    } else if (empty($email)) {
        $error .= "Không được để trống email";
    } else if (strlen($displayName) > 24) {
        $error .= "Display Name không được vượt quá 24 ký tự";
    } else {
        $result .= "Username: $username <br>";
        $result .= "User type: $userTypeText <br>";
        $result .= "Display name: $displayName <br>";
        $result .= "Address: $address <br>";
        $result .= "Email: $email <br>";
        $result .= "Gender: $genderText <br>";
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
    <title>Bài 2</title>
</head>
<body>
<form action="" method="post">
    <table border="1" cellspacing="0" cellpadding="5" style="background: #008061">
        <tr style="background: #027471">
            <td colspan="2" style="text-align: center">
                Registration Form
            </td>
        </tr>
        <tr>
            <td>
                Username
            </td>
            <td>
                <input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password" name="password" value="">
            </td>
        </tr>
        <tr>
            <td>
                User Type
            </td>
            <td>
                <select name="userType">
                    <option value="1">select 1</option>
                    <option value="2">select 2</option>
                    <option value="3">select 3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Display Name
            </td>
            <td>
                <input type="text" name="displayName" value="<?php echo isset($displayName) ? $displayName : ''; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Address
            </td>
            <td>
                <textarea cols="20" rows="3" name="address"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
            </td>
        </tr>
        <tr>
            <?php
            $genderMale = 'checked';
            $genderFemale = '';
            if (isset($_POST['gender'])) {
                switch ($_POST['gender']){
                    case 1:
                        $genderMale = 'checked';
                        break;
                    case 2:
                        $genderFemale = 'checked';
                        break;
                }
            }
            ?>
            <td>
                Gender
            </td>
            <td>
                <input type="radio" name="gender" value="1" <?php echo $genderMale; ?>> Male
                <input type="radio" name="gender" value="2" <?php echo $genderFemale; ?>> Female
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <input type="checkbox" name="accept" value=""> I accept Term and Conditions
            </td>
        </tr>
        <tr style="background: #027471">
            <td colspan="2" style="text-align: center">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
<b>
    <?php echo $error; ?>
    <?php echo $result; ?>
</b>
</body>
</html>
