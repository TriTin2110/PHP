<?php
class myclass
{
        function getConnect()
        {
                $con = mysql_connect('localhost', 'sa', 'nguyentritin');
                if (!$con) {
                        echo 'không thể kết nối';
                } else {
                        mysql_select_db('OnTapCK2');
                        return $con;
                }
        }

        function implement($sql)
        {
                $link = $this->getConnect();
                if (mysql_query($sql, $link)) {
                        return true;
                }
                return false;
        }

        function getLoai()
        {
                $link = $this->getConnect();
                $sql = "select * from loaisanpham;";
                $result = mysql_query($sql, $link);
                return $result;
        }

        function saveIMG($hinh)
        {
                if (move_uploaded_file($hinh['tmp_name'], '../img/' . $hinh['name']))
                        return true;
                return false;
        }

        function getDataById($sql)
        {
                $link = $this->getConnect();
                $result = mysql_query($sql, $link);
                return $result;
        }

        function getData()
        {
                $link = $this->getConnect();
                $sql = "select * from sanpham";
                $result = mysql_query($sql, $link);
                return $result;
        }

        function getDataByLoai($idloai)
        {
                if(!isset($idloai) || $idloai == '')
                        $sql = "select * from sanpham";
                else
                        $sql = "select * from sanpham where idloai = ".$idloai;
                $link = $this->getConnect();
                $result = mysql_query($sql, $link);
                return $result;
        }
}


?>