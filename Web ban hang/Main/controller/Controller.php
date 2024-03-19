<?php
include ('connect/Connection.php');
class Controller
{
        function getAllData() {
               
                
                $p = new Connnect();
                $str = 'select * from san_pham';
                $conn = $p->getConnection();
                mysqli_set_charset($conn, 'utf8');
                //Thực thi câu lệnh $str
                $result = $conn->query($str);
                //Kiểm tra kết nối đã thành công hay chưa
                if (!$conn)
                        return -1;
                else
                        return $result;

        }

        function getByKindOfProduct($nameOfKind){
                $p = new Connnect();
                $str = "select * from san_pham where id_loai = '".$nameOfKind."'";
                $conn = $p->getConnection();
                mysqli_set_charset($conn, 'utf8');
                //Thực thi câu lệnh $str
                $result = $conn->query($str);
                //Kiểm tra kết nối đã thành công hay chưa
                if (!$conn)
                        return -1;
                else
                        return $result;
        }
}

?>