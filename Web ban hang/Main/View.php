<?php
include ('controller/Controller.php');
?>
<?php
error_reporting(0);
$p = new Controller();
//Lấy dữ liệu từ kết quả trả về của phương thức getAllData() bên class Controller
$homeChosen = 'chosen';
$kindOfProduct;
if($_REQUEST['b'] == 'Trang chủ' || !isset($_REQUEST['b']) )
{
$kindOfProduct = 'TrangChu';
} else {
        $homeChosen = '';
        switch ($_REQUEST['b']) {
                case 'Điện thoại':
                        $kindOfProduct = 'DT1';
                        $phoneChosen = 'chosen';
                        break;
                case 'Gia dụng':
                        $kindOfProduct = 'GD1';
                        $appliancesChosen = 'chosen';
                        break;
                case 'Phương tiện':
                        $kindOfProduct = 'PT1';
                        $vehicleChosen = 'chosen';
                        break;
                case 'Thời trang nam':
                        $kindOfProduct = 'TT1';
                        $menClothesChosen = 'chosen';
                        break;
                case 'Thời trang nữ':
                        $kindOfProduct = 'TT2';
                        $womenClothesChosen = 'chosen';
                        break;
        }
}

if ($kindOfProduct == 'TrangChu' || !isset ($_REQUEST['a']) && !isset ($_REQUEST['b'])) {
        $result = $p->getAllData();
        getDataByKind($result);
        // $_SESSION['firtTime'] = false;
} else {

        $result = $p->getByKindOfProduct($kindOfProduct);
        getDataByKind($result);
}


function getDataByKind($result)
{

        if ($result == -1)
                echo 'Cannot connect';
        else {
                if ($result->num_rows == 0) {
                        echo 'Data not avilable';
                }
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>

<body style="position: relative;">
        <div style="height: 100%;">
                <div id="header">
                        <h1>Web bán hàng</h1>
                </div>
                <form action="" method="get">
                        <div id="content">
                                <div id="menuSide">
                                        <div id="MenuItem">
                                                <div id="Home" >
                                                        <h3><input type="submit" class="<?php echo $homeChosen?>" name="b" value="Trang chủ"></h3>
                                                </div>

                                                <div id="Phone" class="menuPanel">
                                                        <h3><input type="submit" name="b" class="<?php echo $phoneChosen ?>" value="Điện thoại"></h3>
                                                </div>

                                                <div id="Appliances" class="menuPanel">
                                                        <h3><input type="submit" name="b" class="<?php echo $appliancesChosen ?>" value="Gia dụng"></h3>
                                                </div>

                                                <div id="Vehicle " class="menuPanel">
                                                        <h3><input type="submit" name="b" class="<?php echo $vehicleChosen ?>" value="Phương tiện"></h3>
                                                </div>

                                                <div id="Men Clothes" class="menuPanel">
                                                        <h3><input type="submit" name="b" class="<?php echo $menClothesChosen ?>" value="Thời trang nam"></h3>
                                                </div>

                                                <div id="Women Clothes" class="menuPanel">
                                                        <h3><input type="submit" name="b" class="<?php echo $womenClothesChosen ?>" value="Thời trang nữ"></h3>
                                                </div>
                                        </div>

                                </div>

                </form>


                <div id="itemPage">
                        <?php
                        echo '<table> <tr>';
                        $count = 0;
                        //fetch_assoc() duyệt từng dòng từ resultset trả về/
                        //fetch_assoc() sẽ trả về null khi đã duyệt hết tất cả các dòng trong danh sách
                        while ($r = $result->fetch_assoc()) {
                                echo '<td> <img src="../IMG/' . $r['img_san_pham'] . '" width="200" height="250p"> <br>' . $r['id_san_pham'] . '<br>' . $r['ten_san_pham'] . '</td>';
                                $count++;
                                //Xuống hàng nếu biến $count % 4 == 0
                                if ($count % 4 == 0)
                                        echo '</tr> <tr>';
                        }
                        echo '</tr> </table>';
                        ?>
                        <style>
                                <?php
                                include ('style.css');
                                ?>
                        </style>
                </div>
        </div>



</body>

</html>