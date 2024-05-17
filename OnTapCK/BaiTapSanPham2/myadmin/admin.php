<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
include ('../myclass/myclass.php');
$p = new myclass();
session_start();
if (!isset($_SESSION['id'])) {
        header('location: login.php');
}
if (isset($_REQUEST['idsp'])) {
        $data1 = $p->getDataById("select * from sanpham where idsp = " . $_REQUEST['idsp'] . " limit 1");
        $dataSet = mysql_fetch_array($data1);
}
        
if (isset($_REQUEST['button'])) {
        $tensp = $_REQUEST['tensp'];
        $gia = $_REQUEST['gia'];
        $hinh = $_FILES['hinh'];
        $idloai = $_REQUEST['idloai'];

        switch ($_REQUEST['button']) {
                case 'Thêm':
                        $sql = "INSERT INTO sanpham VALUES (NULL , '" . $tensp . "', $gia, '" . $hinh['name'] . "', $idloai);";
                        if ($p->implement($sql)) {
                                $p->saveIMG($hinh);
                                echo '
                        <script>
                                alert("Đã thêm thành công!");
                        </script>
                        ';
                        } else {
                                echo '
                        <script>
                                alert("Thêm thất bại!");
                        </script>
                        ';
                        }
                        break;

                case 'Sửa':
                        $sql = "UPDATE sanpham SET tensp = '".$tensp."',gia = $gia,hinh = '".$dataSet['hinh']."',idloai = $idloai WHERE idsp = ".$dataSet['idsp']." LIMIT 1 ;";
                        if ($p->implement($sql)) {
                                $dataSet['tensp'] = '';
                                $dataSet['hinh'] = '';
                                $dataSet['gia'] = '';
                                $dataSet['idloai'] = '';
                                echo '
                        <script>
                                alert("Đã sửa thành công!");
                        </script>
                        ';
                        } else {
                                echo '
                        <script>
                                alert("Sửa thất bại!");
                        </script>
                        ';
                        }
                        break;
                case 'Xóa':
                        $sql = "delete from sanpham where idsp = " . $dataSet['idsp'];
                        if ($p->implement($sql)) {
                                $dataSet['tensp'] = '';
                                $dataSet['hinh'] = '';
                                $dataSet['gia'] = '';
                                $dataSet['idloai'] = '';
                                echo '
                        <script>
                                alert("Đã xóa thành công!");
                        </script>
                        ';
                        } else {
                                echo '
                        <script>
                                alert("Xóa thất bại!");
                        </script>
                        ';
                        }
                        break;
        }
}


?>

<body>
        <form action="" enctype="multipart/form-data" style="text-align: center;" method="post">
                <table style="display: flex; justify-content: center; ">
                        <tr>
                                <td colspan="2">
                                        <h3>Trang Sản Phẩm</h3>
                                        <a href="loaiSanPham.php">Trang loại sản phẩm</a>
                                </td>
                        </tr>
                        <tr>
                                <td>Tên sản phẩm</td>
                                <td style="float: left;"><input type="text" name="tensp" value="<?php echo $dataSet['tensp']?>"></td>
                        </tr>
                        <tr>
                                <td>Giá sản phẩm</td>
                                <td style="float: left;"><input type="number" name="gia" value="<?php echo $dataSet['gia'] ?>"></td>
                        </tr>
                        <tr>
                                <td>Hình sản phẩm</td>
                                <?php
                                if ($dataSet['hinh'] != '') {
                                        echo '<td>'. $dataSet['hinh'].'</td>';
                                } else {
                                        echo '<td><input type="file" name="hinh"></td>';
                                }
                                ?>
                        </tr>
                        <tr>
                                <td>Loại sản phẩm</td>
                                <td style="float: left;">
                                        <select name="idloai">
                                                <?php
                                                $data = $p->getLoai();
                                                while ($r = mysql_fetch_array($data)) {
                                                        $selected = '<option value="' . $r['idloai'] . '" selected>' . $r['tenloai'] . '</option>';
                                                        $none = '<option value="' . $r['idloai'] . '">' . $r['tenloai'] . '</option>';
                                                        if ($r['idloai'] == $dataSet['idloai']) {
                                                                echo $selected;
                                                        } else
                                                                echo $none;
                                                        
                                                }
                                                ?>
                                        </select>
                                </td>
                        </tr>
                        <tr style="display: flex; justify-content: center;">
                                <td style="width: 100%;">
                                        <input type="submit" value="Thêm" name="button">
                                        <input type="submit" value="Xóa" name="button">
                                        <input type="submit" value="Sửa" name="button">
                                </td>
                        </tr>
                </table>
        </form>

        <table style="display: flex; justify-content: center;">
                <tr>
                        <th>Id</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Id loại</th>
                </tr>
                        <?php
                        $data = $p->getData();
                        if (mysql_num_rows($data) > 0) {
                                while ($r = mysql_fetch_array($data)) {
                                        echo ' <tr style="text-align: center;">
                                        <td><a href="?idsp='.$r['idsp'].'">'.$r['idsp'].'</a></td>
                                        <td><a href="?idsp=' . $r['idsp'] . '">' . $r['tensp'] . '</a></td>
                                        <td><a href="?idsp=' . $r['idsp'] . '">' . $r['gia'] . '</a></td>
                                        <td><a href="?idsp=' . $r['idsp'] . '">' . $r['hinh'] . '</a></td>
                                        <td><a href="?idsp=' . $r['idsp'] . '">' . $r['idloai'] . '</a></td>
                                        </tr>';
                                }
                        }
                        ?>
        </table>
</body>

</html>