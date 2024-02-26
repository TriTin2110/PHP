<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" name="ffile">
                <input type="submit" value="Upload" name="submitUpload">
        </form>

        <form action="hienThiHinhAnh.php" method="get">
                <input type="submit" value="Hiển thị hình ảnh">
        </form>


        <?php
        if (isset($_REQUEST["submitUpload"])) {
                include('processUpload.php');
                $p = new processUpload();
                $p->process($_FILES['ffile']);
        }
        ?>
</body>

</html>