<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                div
                {
                        display:  flex;
                        flex-direction: row;
                        justify-content: space-between;
                        width: 300px;
                        margin-top: 20px;
                }

                span
                {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;
                        width: 300px;
                        margin-top: 20px;
                }

                body
                {
                        background-color: lightblue;
                }
        </style>
</head>
<?php
        $userName = $_REQUEST['userName'];
        $password = $_REQUEST['password'];
        include('xuLyDangNhap.php');
        $p = new dangNhap();
                if(isset($userName) && isset($password))
                {
                        if($p->kiemTraUser($userName, $password))
                                header('location: success.php');
                        else
                                header('location: fail.php');        
                }
?>
<body>
        <form action="" method="post">
                <div>
                        <label for="">User name: </label>
                        <input type="text" name="userName">
                </div>

                <div>
                        <label for="">Password: </label>
                        <input type="password" name="password">
                </div>

                <span>
                        <input type="submit" value="Hủy">
                        <input type="submit" value="Đăng nhập">
                </span>
        </form>
</body>

</html>