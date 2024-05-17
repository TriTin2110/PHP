<?php
include ('../myclass/myclass.php');
$p = new myclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body style="display: flex; justify-content: center;">
        <div style="width: 1000px">
                <?php
                $idsp = $_REQUEST['idsp'];
                $p->getProductDetail("SELECT tensp , gia , idcty , giamgia , mota, hinh FROM sanpham where idsp = $idsp LIMIT 1", $idsp);
                ?>        
        </div>
</body>
</html>