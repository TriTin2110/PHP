<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="..\\css\\style.css">
</head>
<?php
session_start();
$taiKhoan = $_REQUEST['taiKhoan'];
$matKhau = $_REQUEST['matKhau'];
if (isset($taiKhoan) && isset($matKhau)) {
        if ($taiKhoan == $_SESSION['taiKhoan'] && $matKhau == $_SESSION['matKhau']) {
                header('location: admin.php');
        }

}
?>
<body>
         <form action="" method="post">
                <table>
                        <tr><td colspan="4"><h1>Đăng nhập</h1></td> </tr>
                        <tr>
                                <td colspan="2">Tài khoản</td>
                                <td colspan="2"><input type="text" name="taiKhoan" id=""></td>
                        </tr>
                        <tr>
                                <td colspan="2">Mật khẩu</td>
                                <td colspan="2"><input type="password" name="matKhau" id=""></td>
                        </tr>
                        <tr>
                                <td colspan="4"><input type="submit" value="Đăng nhập"></td>
                        </tr>
                        <tr>
                                <td colspan="4"><a href="SignupForm.php">Đăng ký</a></td>
                        </tr>
                </table>
        </form>
</body>
</html>