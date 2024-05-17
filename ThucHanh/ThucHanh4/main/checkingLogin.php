<?php
include ('../myclass/mylogin.php');
include ('../myclass/myadmin.php');
$p = new login();
$a = new myadmin();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <?php
        $table = $_REQUEST['table'];
        if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
                if ($p->mylogin($_SESSION['username'], $_SESSION['password'], $table) == 0) {
                        echo "
                        <script>
                                alert(\"Bạn chưa đăng nhập\");
                                window.location.href = \"login.php?table=$table\";
                        </script>
                ";
                }
        }
        else {
                $idkh = $_SESSION['id'];
                $ngaydat = date('Y-m-d');
                $idsp = $_REQUEST['idsp'];
                $a->implementProduct("INSERT INTO dathang (idkh,ngaydathang) VALUES ($idkh, '$ngaydat')");
                $resultDH = $a->getDataByID("select * from dathang where idkh = $idkh order by iddh desc limit 1");
                $resultSP = $a->getDataByID("select * from sanpham where idsp = $idsp limit 1");
                $iddh = $resultDH['iddh'];
                $idsp = $resultSP['idsp'];
                $soluong = $_REQUEST['quantity'];
                $gia = $resultSP['gia'];
                $giamgia = $resultSP['giamgia'];

                $sql = "INSERT INTO dathang_chitiet (iddh,idsp,soluong,dongia,giamgia) VALUES ($iddh, $idsp, $soluong, $gia, $giamgia)";
                if ($a->implementProduct($sql)) {
                        echo '
                                <script>
                                        alert("Thành công");
                                        window.location.href = "chitiet.php?idsp='.$idsp.'";
                                </script>
                        ';
                }
                else {
                        echo '
                                <script>
                                        alert("Thất bại");
                                        window.location.href = "chitiet.php?idsp=' . $idsp . '";
                                </script>
                        ';
                }
                
        }
        ?>
</body>
</html>