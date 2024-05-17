<?php
include ("../myclass/mylogin.php");
$p = new login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
$username = $_REQUEST['userName'];
$password = $_REQUEST['password'];
$table = $_REQUEST['table'];
switch ($_REQUEST['button']) {
        case 'Đăng nhập':
                if ($p->mylogin($username, $password, $table) == 0) {
                        echo '
                        <script>
                        alert("Sai tài khoản hoặc mật khẩu!")
                        </script>
                        ';
                } else {
                        if ($table == 'khachhang') {
                                header('location:main.php');
                        } else {
                                header('location:admin.php');
                        }
                }
                break;
}

?>
<body>
        <form action="" method="post">
                <table style="text-align: center; margin: 0px auto;">
                        <tr>
                                <td colspan="3"><h1>Đăng nhập</h1></td>
                        </tr>
                        <tr>
                                <td colspan="1">Tài khoản</td>
                                <td colspan="2"><input type="text" name="userName"></td>
                        </tr>
                        <tr>
                                <td colspan="1">Mật khẩu</td>
                                <td colspan="2"><input type="password" name="password"></td>
                        </tr>
                        <tr>
                                <td colspan="3"><input name="button" type="submit" value="Đăng nhập"></td>
                        </tr>
                </table>

        </form>
        
</body>
</html>