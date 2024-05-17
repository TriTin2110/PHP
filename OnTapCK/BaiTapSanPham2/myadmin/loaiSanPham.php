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
if (isset($_REQUEST['idloai'])) {
        $data1 = $p->getDataById("select * from loaisanpham where idloai = " . $_REQUEST['idloai'] . " limit 1");
        $dataSet = mysql_fetch_array($data1);
}

if (isset($_REQUEST['button'])) {
        $tenloai = $_REQUEST['tenloai'];

        switch ($_REQUEST['button']) {
                case 'Thêm':
                        $sql = "INSERT INTO loaisanpham VALUES (NULL , '" . $tenloai . "');";
                        if ($p->implement($sql)) {
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
                        if (mysql_num_rows($p->getDataByLoai($dataSet['idloai'])) > 0) {
                                echo '
                        <script>
                                alert("Vui lòng xóa các sản phẩm của loại này trước!");
                        </script>
                        ';
                        } else {
                                $sql = "UPDATE loaisanpham SET tenloai = '" . $tenloai . "' where idloai = " . $dataSet['idloai'] . " LIMIT 1 ;";
                                if ($p->implement($sql)) {
                                        $dataSet['tenloai'] = '';
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

                        }
                        break;
                case 'Xóa':
                        if (mysql_num_rows($p->getDataByLoai($dataSet['idloai'])) > 0) {
                                echo '
                        <script>
                                alert("Vui lòng xóa các sản phẩm của loại này trước!");
                        </script>
                        ';
                        } else {
                                $sql = "delete from loaisanpham where idloai = " . $dataSet['idloai'];
                                if ($p->implement($sql)) {
                                        $dataSet['tenloai'] = '';
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
                                        <h3>Trang Loại Sản Phẩm</h3>
                                        <a href="admin.php">Trang sản phẩm</a>
                                </td>
                        </tr>
                        <tr>
                                <td>Tên loại sản phẩm</td>
                                <td style="float: left;"><input type="text" name="tenloai"
                                                value="<?php echo $dataSet['tenloai'] ?>"></td>
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
                        <th>Tên loại</th>
                </tr>
                <?php
                $data = $p->getLoai();
                if (mysql_num_rows($data) > 0) {
                        while ($r = mysql_fetch_array($data)) {
                                echo ' <tr style="text-align: center;">
                                        <td><a href="?idloai=' . $r['idloai'] . '">' . $r['idloai'] . '</a></td>
                                        <td><a href="?idloai=' . $r['idloai'] . '">' . $r['tenloai'] . '</a></td>
                                        </tr>';
                        }
                }
                ?>
        </table>
</body>

</html>