<?php
class dangNhap{
        public function kiemTraUser($userName, $password) {
                if($userName == "admin" && $password == "123456")
                        return true;
                else
                        return false;
        }
}
?>
