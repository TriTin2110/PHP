<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="showimg.php" method="post" enctype="multipart/form-data">
                <input type="file" name="ffile">
                <input type="submit" value="Xác nhận">
                <select name="sizeImg">
                        <option value="200">200x200</option>
                        <option value="300">300x300</option>
                        <option value="400">400x400</option>
                </select>
        </form>
</body>

</html>