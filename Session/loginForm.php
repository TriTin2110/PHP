<?php
error_reporting(0);
include('myclass/MyLoginClass.php');
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
$p = new login();
if (isset($_REQUEST['reset'])) {
        $us = '';
        $pa = '';
} else {
        if (isset($_REQUEST['user']) && isset($_REQUEST['password'])) {
                session_start();
                $us = $_REQUEST['user'];
                $pa = $_REQUEST['password'];
                $_SESSION['user'] = $us;
                $_SESSION['password'] = $pa;
                $result = $p->checkingAccount($_REQUEST['user'], $_REQUEST['password']);
                if ($result == 1) {
                        header('location: admin.php');
                }
        }
}
?>

<body>
        <form method="post">
                <table>
                        <tr>
                                <td colspan="3"><h1>Đăng nhập</h1></td>
                        </tr>
                        <tr>
                                <td><label for="">Tài khoản</label></td>
                                <td colspan="2"><input type="text" name="user" value="<?php echo $us ?>"></td>
                        </tr>
                        <tr>
                                <td><label for="">Mật khẩu</label></td>
                                <td colspan="2"><input type="password" name="password" value="<?php echo $pa ?>"></td>
                        </tr>
                        <tr>
                                <td colspan="3"><input type="submit" value="Đăng nhập"><input name="reset" type="submit" value="Reset"></td>
                        </tr>
                </table>
        </form>
</body>
</html>