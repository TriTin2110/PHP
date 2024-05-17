<?php
class myadmin
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

        function checking($username, $password)
        {
                $password = md5($password);
                $link = $this->getConnect();
                $sql = "select * from taikhoan where username = '$username' and password = '$password' limit 1";
                $result = mysql_query($sql, $link);
                if (mysql_num_rows($result) > 0) {
                        session_start();
                        while ($r = mysql_fetch_array($result)) {
                                $_SESSION['id'] = $r['iduser'];
                                $_SESSION['username'] = $r['username'];
                                $_SESSION['password'] = $r['password'];
                        }
                        return true;
                }
                return false;
        }
}


?>