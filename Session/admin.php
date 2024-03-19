<?php
include('myclass/MyLoginClass.php');
include('myclass/MyFileClass.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
session_start();
$p = new login();
$result = $p->checkingInput($_SESSION['user'], $_SESSION['password']);
if ($result == 0) {
        header('location: loginForm.php');
}
else {
        if (isset($_FILES['fi'])) {
                $p = new file();
                $result = $p->uploadFile($_FILES['fi']['tmp_name'], 'data/' . $_FILES['fi']['name']);
                if ($result)
                        echo 'Đã upload thành công';
                else
                        echo 'Upload không thành công';
        }
}
?>

<body>
        <form method="post" enctype="multipart/form-data">
                <table>
                        <tr>
                                <td><label for="">Hãy chọn file</label> <br></td>
                                <td colspan="2"><input type="file" name="fi"><br></td>
                        </tr>
                        <tr>
                                <td colspan="3"><input type="submit" value="Xác nhận"></td>
                        </tr>
                </table>
        </form>
</body>
</html>