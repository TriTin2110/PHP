<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                div {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                        width: 300px;
                        margin-top: 20px;
                }
        </style>
</head>

<body>
        <form action="login.php" method="$_POST">
                <div><label for="">User name: </label><input type="text" name="txtUser"></div>
                <div><label for="">Password: </label><input type="password" name="txtPassword"></div>
                <div><input type="submit" value="Login"></div>
        </form>
</body>

</html>