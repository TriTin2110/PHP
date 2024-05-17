<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
include ('myadmin.php');
$p = new myadmin();
if (isset($_REQUEST['button'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if (isset($username) && isset($password)) {
                if ($p->checking($username, $password)) {
                        header('location: admin.php');
                } else {
                        echo '
                        <script>
                                alert("Sai tên tài khoản hoặc mật khẩu");
                        </script>
                        ';
                }
        }
}
?>

<body>
        <form action="" style="display: flex; justify-content: center; text-align: center;">
                <table>
                        <tr>
                                <td colspan="2">
                                        <h3>Đăng nhập</h3>
                                </td>
                        </tr>
                        <tr>
                                <td>Tài khoản</td>
                                <td><input type="text" name="username" id="username"></td>
                        </tr>
                        <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                                <td colspan="2">
                                        <input type="submit" name="button" value="Đăng nhập">
                                </td>
                        </tr>
                </table>
        </form>
</body>

</html>