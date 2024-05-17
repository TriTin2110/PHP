<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
include ('myclass/myclass.php');
$p = new myclass();
$sql = "select * from sanpham where idsp = " . $_REQUEST['idsp'] . " limit 1";
$dataIncome = $p->getDataById($sql);
$data = mysql_fetch_array($dataIncome);
?>
<body>
        <table style="text-align: center;">
                <tr>
                        <td rowspan="3">
                                <img src="img/<?php echo $data['hinh']?>" alt="">
                        </td>
                        <td><b>Tên sản phẩm:</b></td>
                        <td><?php echo $data['tensp']?></td>
                </tr>
                <tr>
                        <td><b>Giá sản phẩm:</b> </td>
                        <td><?php echo $data['gia'] ?></td>
                </tr>
                <tr>
                        <td><b>Loại sản phẩm:</b></td>
                        <td><?php
                        $loai = $p->getLoai();
                        while ($r = mysql_fetch_array($loai)) {
                                if ($r['idloai'] == $data['idloai'])
                                        echo $r['tenloai'];
                        }
                        ?></td>
                </tr>
        </table>
</body>
</html>