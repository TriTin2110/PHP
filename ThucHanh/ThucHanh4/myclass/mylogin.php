<?php
class login
{
        function getConnectionLogin()
        {
                $con = mysql_connect('localhost', 'sa', 'nguyentritin');
                if (!$con) {
                        echo ('Kết nối không thành công');
                } else {
                        mysql_select_db('ThucHanh4');
                        return $con;
                }
        }

        function mylogin($userName, $password, $table) {
                if (!isset($table)) {
                        $table = 'taikhoan';
                }
                $password = md5($password);
                $sql = "select iduser, username, password from $table where username='$userName' and password = '$password' limit 1";
                $link = $this->getConnectionLogin();
                $result = mysql_query($sql, $link);
                $numRow = mysql_num_rows($result);
                if ($numRow > 0) {
                        session_start();
                        while ($row = mysql_fetch_array($result)) {
                                $id = $row['iduser'];
                                $username = $row['username'];
                                $password = $row['password'];
                                $_SESSION['id'] = $id;
                                $_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                        }
                        return 1;
                } else {
                        return 0;
                }
        }
        function confirmLogin($id, $user, $pass) {
                $sql = "select iduser from taikhoan where username='$user' and password = '$pass' and iduser='$id' limit 1";
                $link = $this->getConnectionLogin();
                $result = mysql_query($sql, $link);
                $numRow = mysql_num_rows($result);
                return $numRow;
        }
}

?>