<?php
class xuLyDangKy
{
        private $email;
        // Kiểm tra thông tin có bị bỏ trống hay không
        public function kiemTraThongTin($email, $password, $rePassword, $name, $homeTown, $phoneNum)
        {
                if (trim($email) == "" || trim($password) == "" || trim($rePassword) == "" || trim($name) == "") {
                        return false;
                }

                //Lấy giá trị trả về của hàm xuLyTaiKhoan(...)
                return $this->xuLyTaiKhoan($password, $rePassword, $name, $email);
        }

        //Kiểm tra thông tin có hợp lệ hay không
        public function xuLyTaiKhoan($password, $rePassword, $name)
        {
                if ($password != $rePassword)
                        return false;
                for ($i = 0; $i < 10; $i++) {
                        if (strpos($name, $i))
                                return false;
                }
                return true;
        }
}
