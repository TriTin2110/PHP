<?php
error_reporting(0);
class myclass
{
        function getConnection() {
                $con = mysql_connect('localhost', 'sa', 'nguyentritin');
                if (!$con) {
                        echo ('Kết nối không thành công');
                }
                else {
                        mysql_select_db('ThucHanh4');
                        return $con;
                }
        }

        function getDataProduct($sql) {
                $con = $this->getConnection();
                $result = mysql_query($sql, $con);
                $row = mysql_num_rows($result);
                if ($row > 0) {
                        while ($re = mysql_fetch_array($result)) {
                                $price = $re['gia'];
                                $name = $re['tensp'];
                                $img = $re['hinh'];
                                $idsp = $re['idsp'];
                                echo 
                                '
                                        <div class="sanPham">
                                                <div class="nameProduct">'.$name.'</div>
                                                <div class="IMG">
                                                <a href="chitiet.php?idsp='.$idsp.'">
                                                        <img width="120" height="150" src="../IMG/' . $img . '">
                                                </a></div>
                                                <div class="priceProduct">'.$price.'$</div>
                                        </div>
                                ';
                        
                        }
                } else {
                        echo 'Không có dữ liệu';
                }

        }
        function getDataCompany($sql){
                $link = $this->getConnection();
                $result = mysql_query($sql, $link);
                $i = mysql_num_rows($result);
                if ($i > 0) {
                        while ($re = mysql_fetch_array($result)) {
                                $namecty = $re['namecty	'];
                                $address = $re['address'];
                        }
                }
                else {
                        echo 'Không có dữ liệu!';
                }


        }
        function uploadFile($tmp_name, $des) {
                if (move_uploaded_file($tmp_name, $des)) 
                        return true;
                return false;
                
        }

        function getTableProduct($sql) {
                $con = $this->getConnection();
                $result = mysql_query($sql, $con);
                $row = mysql_num_rows($result);
                if ($row > 0) {
                        while ($re = mysql_fetch_array($result)) {
                                $idsp = $re['idsp'];
                                $tensp = $re['tensp'];
                                $gia = $re['gia'];
                                $mota = $re['mota'];
                                $hinh = $re['hinh'];
                                $giamgia = $re['giamgia'];
                                $idcty = $re['idcty'];
                                echo
                                        '
                                        <tr class="tableProduct">
                                                <td><a href="?idSanPham='.$idsp.'">'.$idsp.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$tensp.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$gia.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$mota.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$hinh.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$giamgia.'</a></td>
                                                <td><a href="?idSanPham=' . $idsp . '">'.$idcty.'</a></td>
                                        </tr>
                                ';

                        }
                } else {
                        echo 'Không có dữ liệu';
                }
        }

        function getDataByID($sql)
        {
                $con = $this->getConnection();
                $result = mysql_query($sql, $con);
                $row = mysql_num_rows($result);
                if ($row > 0) {
                        $re = mysql_fetch_array($result);
                        return $re;
                }         
        }

        function getProductDetail($sql, $idsp)
        {
                session_start();
                $con = $this->getConnection();
                $result = mysql_query($sql, $con);
                $row = mysql_num_rows($result);
                if ($row > 0) {
                        if (isset($_SESSION['id'])) {
                                $userFullName = $this->getDataByID("SELECT hodem, ten FROM khachhang WHERE iduser = " . $_SESSION['id']." limit 1");
                                $hoDem = $userFullName['hodem'];
                                $ten = $userFullName['ten'];
                                echo '
                                <p style="text-align: right">
                                        <span> Xin chào ' . $hoDem.' '.$ten . ' | </span>
                                        <a href="logout.php">Đăng xuất</a>
                                </p>';
                        }
                        
                        echo '
                        <form action="../main/checkingLogin.php?table=khachhang&idsp='.$idsp.'" method="post">
                                 <table border="1" style="width: 600px; margin: 0px auto;">
                        ';
                        while ($re = mysql_fetch_array($result)) {
                                $price = $re['gia'];
                                $name = $re['tensp'];
                                $img = $re['hinh'];
                                $discount = $re['giamgia'];
                                $resultComp = $this->getDataByID("SELECT namecty FROM congty WHERE idcty = " . $re['idcty']);
                                $comp = $resultComp['namecty'];
                                $description = $re['mota'];
                                echo
                                        "
                                <tr>
                                        <td rowspan=\"7\"><img src=\"../IMG/$img\"></td>
                                        <td>Tên sản phẩm</td>
                                        <td>$name</td>
                                </tr>
                                <tr>
                                        <td>Công ty sản xuất</td>
                                        <td>$comp</td>
                                </tr>
                                <tr>
                                        <td>Mô tả</td>
                                        <td>$description</td>
                                </tr>
                                <tr>
                                        <td>Giá</td>
                                        <td>$price</td>
                                </tr>
                                <tr>
                                        <td>Giảm giá</td>
                                        <td>$discount</td>
                                </tr>
                                <tr>
                                        <td>Số lượng</td>
                                        <td><input type=\"number\" name=\"quantity\"></td>
                                </tr>
                                <tr>
                                        <td>Đặt hàng</td>
                                        <td><input type=\"submit\" value=\"Đặt hàng\"></td>
                                </tr>
                                ";

                        }
                        echo '
                                </table>
                        </form>
                        ';
                        $this->showTable();
                } else {
                        echo 'Không có dữ liệu';
                }

        }

        //Kết quả từ table sản phẩm
        function showTable() {
                session_start();
                $userName = null;
                $count = 1;
                $con = $this->getConnection();
                $sql = "SELECT *
                        FROM dathang_chitiet dhct
                        JOIN sanpham sp ON dhct.idsp = sp.idsp
                        JOIN dathang dh ON dhct.iddh = dh.iddh
                        where dh.idkh = ".$_SESSION['id'];
                $result = mysql_query($sql, $con);
                if (mysql_num_rows($result) > 0) {
                        echo
                        '
                        <table border="1" style="width: 1000px; margin: 30px auto; text-align: center; border-collapse: collapse;">
                                <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên công ty</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Mô tả</th>
                                        <th>Tổng tiền</th>
                                </tr>
                        ';
                        while ($re = mysql_fetch_array($result)) {
                              
                                $hodem = $this->getDataByID("select hodem from khachhang where iduser = " . $_SESSION['id'] . " limit 1") ;
                                $ten = $this->getDataByID("select ten from khachhang where iduser = " . $_SESSION['id'] . "  limit 1");
                                $userName = $hodem['hodem'] . ' ' . $ten['ten'];
                                $price = $re['gia'];
                                $name = $re['tensp'];
                                $resultComp = $this->getDataByID("SELECT namecty FROM congty WHERE idcty = " . $re['idcty']);
                                $quantity = $re['soluong'];
                                $comp = $resultComp['namecty'];
                                $description = $re['mota'];
                                echo
                                        " <tr>
                                        <td>$count</td>
                                        <td>$name</td>
                                        <td>$comp</td>
                                        <td>$price</td>
                                        <td>$quantity</td>
                                        <td>$description</td>
                                        <td>".$price*$quantity."</td>
                                </tr>"
                                ;
                                $count++;
                        }
                        echo '</table>';
                        
                } else {
                        echo 'Không có dữ liệu';
                }
                
        }
}

?>