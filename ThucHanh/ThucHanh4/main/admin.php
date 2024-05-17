<?php
session_start();
include ('../myclass/mylogin.php');
$q = new login();
if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        if ($q->confirmLogin($id, $username, $password) == 0) {
                header('location: login.php');
        }
} else {
        header('location: login.php');
}
?>


<?php
include ('../myclass/myadmin.php');
$p = new myadmin();
?>

<style>
        <?php
        include ('../css/style.css');
        ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
$chose = $_REQUEST['button'];
$idSanPham = $_REQUEST['idSanPham'];
$data = $p->getDataByID('select * from sanpham where idsp =' . $idSanPham);
if (isset($chose)) {
        $congty = $_REQUEST['congty'];
        $tenSanPham = $_REQUEST['tenSanPham'];
        $giaSanPham = $_REQUEST['giaSanPham'];
        $moTaSanPham = $_REQUEST['moTaSanPham'];
        $file = $_FILES['hinhSanPham'];

        $hinhAnh = $file['name'];
        $p->uploadFile($file['tmp_name'], '../IMG/' . $hinhAnh);

        $giamGiaSanPham = $_REQUEST['giamGiaSanPham'];

       

        switch ($chose) {
                case 'Thêm':
                        $sql = "insert into sanpham (idsp ,tensp ,gia ,mota ,hinh,giamgia ,idcty) values ('$idSanPham', '$tenSanPham', '$giaSanPham', '$moTaSanPham', '$hinhAnh', '$giamGiaSanPham', '$congty');";
                        if ($p->implementProduct($sql))
                        {
                                echo '
                                <script>
                                        alert("Đã thêm thành công");
                                 </script>
                                ';
                        } else {
                                echo '
                                <script>
                                        alert("Thêm KHÔNG thành công");
                                 </script>
                                ';
                        }
                        break;

                case 'Xóa':
                        $sql = "delete from sanpham where idsp = '$idSanPham';";
                        if ($p->implementProduct($sql)) {
                                echo '
                                <script>
                                        alert("Đã xóa thành công");
                                 </script>
                                ';
                        } else {
                                echo '
                                <script>
                                        alert("Xóa KHÔNG thành công");
                                 </script>
                                ';
                        }
                        break;

                case 'Sửa':
                        $hinhAnh = $data['hinh'];
                        $sql = "update sanpham set tensp= '$tenSanPham',gia ='$giaSanPham',mota='$moTaSanPham' ,hinh='$hinhAnh',giamgia='$giamGiaSanPham' ,idcty='$congty' where idsp= '$idSanPham';";
                        if ($p->implementProduct($sql)) {
                                echo '
                                <script>
                                        alert("Đã cập nhật thành công");
                                 </script>
                                ';
                        } else {
                                echo '
                                <script>
                                        alert("Cập nhật KHÔNG thành công");
                                 </script>
                                ';
                        }
                        break;
                
        }
}
?>

<body>
       
        <form method="post" enctype="multipart/form-data">
                <table style="margin: 0px auto">
                <tr style="text-align: center;">
                        <td colspan="3"><h1>Quản lý sản phẩm</h1></td>
                </tr>
                <tr>
                        <td colspan="1">Id công ty</td>
                        <td id="inputComp" colspan="2">
                                <select name="congty" id="congty">
                                        <option value="#">Hãy chọn công ty</option>

                                        <option value="1" <?php if($data['idcty'] == 1) 
                                        echo 'selected';?>>Apple</option>

                                        <option value="2" <?php if ($data['idcty'] == 2)
                                        echo 'selected'; ?>>SamSung</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td colspan="1">Tên sản phẩm</td>
                        <td id="inputProduct">
                                <input type="text" name="tenSanPham" value="<?php echo $data['tensp']?>">
                        </td>
                </tr>
                <tr>
                        <td colspan="1">Giá sản phẩm</td>
                        <td id="inputProduct">
                                <input type="number" name="giaSanPham" value="<?php echo $data['gia'] ?>">
                        </td>
                </tr>
                <tr>
                        <td colspan="1">Mô tả sản phẩm</td>
                        <td colspan="2" id="inputProduct">
                                <textarea name="moTaSanPham" id="moTaSanPham" cols="50" rows="5"><?php echo $data['mota'] ?></textarea>
                        </td>
                </tr>
                <tr>
                        <td colspan="1">Hình sản phẩm</td>
                        
                        <td colspan="2">
                                <?php
                                if ($data['hinh']=='') {
                                        echo '<input type="file" name="hinhSanPham" title="tit">';
                                }
                                else {
                                        echo $data['hinh'];
                                }
                                ?>
                        </td>
                </tr>
                 <tr>
                        <td colspan="1">Giảm giá</td>
                        <td  id="discountProduct">
                                <input type="number" name="giamGiaSanPham" value="<?php echo $data['giamgia'] ?>">
                        </td>
                </tr>
                <tr>
                        <td colspan="1">Id sản phẩm</td>
                        <td  id="inputProduct">
                                <input type="number" value="<?php echo $idSanPham?>" name="idSanPham">
                        </td>
                </tr>
                <tr style="text-align: center;">
                        <td colspan="3">
                                <input type="submit" value="Thêm" name="button">
                                <input type="submit" value="Sửa" name="button">
                                <input type="submit" value="Xóa" name="button">
                        </td>
                        
                </tr>
        </table>
        </form>

        <hr>

        <table border="1" style="width: 800px; border-collapse: collapse;">
                <tr style="font-weight: bold;" class="tableProduct">
                        <td>idsp</td>
                        <td>tensp</td>
                        <td>gia</td>
                        <td>mota</td>
                        <td>hinh</td>
                        <td>giamgia</td>
                        <td>idcty</td>
                </tr>
                <?php
                $p->getTableProduct('select * from sanpham');
                ?>
        </table>
        
</body>
</html>