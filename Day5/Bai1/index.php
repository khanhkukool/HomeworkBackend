<?php
$error = "";
$result = "";
if (isset($_POST['submit'])) {
    $fileArr = $_FILES['upload'];
    $fileName = $fileArr['name'];
    $fileSize = $fileArr['size'];
    $fileSizeMb = $fileSize / 1024 / 1024;
    $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
    if (in_array($extension, ['png', 'gif', 'jpg', 'jpeg']) == FALSE) {
        $error = "Cần upload file có định dạng ảnh";
    } else if ($fileSizeMb > 1) {
        $error = "File upload không được > 1Mb";
    } else {
        $directoryUploads = __DIR__ . '/uploads';
        if (file_exists($directoryUploads) == FALSE) {
            mkdir($directoryUploads);
        }
        $tmpName = $fileArr['tmp_name'];
        $destination = $directoryUploads . '/' . $fileName;
        $isUploaded = move_uploaded_file($tmpName, $destination);
        $fileType = pathinfo($fileArr['name'], PATHINFO_EXTENSION);
        $result .= "Ảnh vừa upload: <br>";
        $result .= "<img src='uploads/$fileName'><br>";
        $result .= "Tên file: $fileName <br>";
        $result .= "Định dạng file: $fileType";
    }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    Select a file to upload
    <br>
    <input type="file" name="upload"><br>
    <input type="submit" name="submit" value="Upload">
    <h4>
        <?php
        echo $error;
        echo $result;
        ?>
    </h4>
</form>
