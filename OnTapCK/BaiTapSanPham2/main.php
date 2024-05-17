<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include ('myclass/myclass.php');
$p = new myclass();
?>

<body>
        <div id="container">
                <table style="text-align: center; width: 800px;">
                        <form action="">
                                <tr>
                                        <td style="background-color: red;" colspan="2">
                                                <p>Tìm kiếm sản phẩm</p>
                                                <input type="text" name="searching" placeholder="Hãy nhập tên sản phẩm">
                                                <input type="submit" value="Tìm" name="buttonSearch">
                                        </td>
                                </tr>
                                <tr>
                                        <td id="leftside" style="background-color: yellow;">
                                                <?php
                                                echo '<p><a href="?idloai=">Trang chủ</a></p>';
                                                $loai = $p->getLoai();
                                                if (mysql_num_rows($loai) > 0) {
                                                        while ($r = mysql_fetch_array($loai)) {
                                                                echo '<p><a href="?idloai=' . $r['idloai'] . '">' . $r['tenloai'] . '</a></p>';
                                                        }
                                                } else {
                                                        echo 'Không có dữ liệu!';
                                                }
                                                ?>
                                        </td>



                                        <td id="rightside" style="background-color: green;">
                                                <?php
                                                $tencantim = $_REQUEST['searching'];
                                                if (isset($tencantim)) {
                                                        $sql ="select * from sanpham where tensp like '%" . $tencantim."%'";
                                                        $data = $p->getDataById($sql);
                                                } else {
                                                        $data = $p->getDataByLoai($_REQUEST['idloai']);
                                                }
                                                if (mysql_num_rows($data) > 0) {
                                                        while ($r = mysql_fetch_array($data)) {
                                                                echo '
                                                        <span class="sanpham">
                                                                <div>' . $r['tensp'] . '</div>
                                                                <a href="chitiet.php?idsp=' . $r['idsp'] . '">
                                                                        <img width="100px" height="130px" src="img/' . $r['hinh'] . '"></img>
                                                                </a>
                                                                <div>' . $r['gia'] . '</div>
                                                        </span>
                                                        ';
                                                        }
                                                } else {
                                                        echo 'Không có dữ liệu!';
                                                }
                                                ?>
                                        </td>
                                </tr>
                                <tr>
                                        <td style="background-color: blue;" colspan="2">Footer</td>
                                </tr>
                        </form>
                </table>
        </div>
</body>

</html>