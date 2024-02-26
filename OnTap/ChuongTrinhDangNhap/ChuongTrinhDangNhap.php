<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                .in {
                        margin-top: 20px;
                }
        </style>
</head>

<?php
$userName = $_POST["userName"];
$password = $_POST["userPassword"];
if (isset($userName) && isset($password)) {
        if ($userName == "admin" && $password == "123") {
                header('Location: Success.php');
        } else
                header('Location: Fail.php');
}

?>

<body>
        <div style="text-align: center;">
                <h3>Đăng nhập</h3>
                <form action="" method="post">
                        <div class="in">
                                <label for="">Tài khoản </label>
                                <input type="text" name="userName">
                        </div>
                        <div class="in">
                                <label for="">Mật khẩu </label>
                                <input type="password" name="userPassword">
                        </div>
                        <div class="in">
                                <input type="submit" value="Xác nhận">
                        </div>
                </form>
        </div>
</body>

</html>