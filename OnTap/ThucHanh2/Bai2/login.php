<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                div {
                        display: flex;
                        justify-content: center;
                }

                .userInput {
                        margin-top: 20px;
                        display: flex;
                        width: 250px;
                        justify-content: space-between;
                }
        </style>
</head>

<body>
        <div>
                <form action="dologin.php" method="post">
                        <div class="userInput">
                                <label for="userName">Tài khoản</label>
                                <input type="text" name="userName">
                        </div>

                        <div class="userInput">
                                <label for="userPassword">Mật khẩu</label>
                                <input type="password" name="userPassword">
                        </div>

                        <div style="margin-top: 20px;">
                                <input type="submit" value="Đăng nhập!">
                        </div>
                </form>
        </div>
</body>

</html>