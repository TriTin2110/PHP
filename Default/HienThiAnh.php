<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                body {
                        text-align: center;
                }

                #ImageContent {
                        margin: 50px auto;
                }

                #ImageContent img {
                        display: block;
                        margin: 20px auto;
                }
        </style>
</head>

<body>
        <div>
                <h1>Hiển thị ảnh!</h1>
        </div>

        <?php
                $i = 1;
                do {
                        echo '<img src="img\Triangle' . $i . '.png" alt=""><br>';
                        //Nếu biến check = 0 thì sẽ hiện mỗi hình ảnh đầu tiên
                        $check = 0;
                        //Kiểm tra người dùng có bấm chọn show all hay không
                        if ($_GET["show"]==1) {
                                $check = 1;
                                $i++;
                        }
                } while ($i <= 3 && $check == 1);
        ?>

        <div id="ImageContent">
                <a href="HienThiAnh.php?show=1">Show all</a>
                <a href="HienThiAnh.php?show=0">Close</a>
        </div>
</body>

</html>