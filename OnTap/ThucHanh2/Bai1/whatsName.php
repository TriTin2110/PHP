<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                .userInput {
                        border: none;
                        width: 50px;
                        margin-bottom: 20px;
                }
        </style>
</head>

<body>
        <h1>What's your name</h1>
        <form action="hiUser.php" method="get">
                <div>
                        <label for="">Hãy nhập tên của bạn: </label>
                        <input type="text" class="userInput" name="userName" placeholder="..............">
                </div>
                <input type="submit" value="Xác nhận">
        </form>
</body>

</html>