<?php
session_start();
class processUpload
{
        private $fileURL;
        public function process($file)
        {
                var_dump($file);
                if ($file['size'] > (340 * 1024)) {
                        //Xuất ra kết quả thông tin của file
                        // var_dump($file)
                        $bfName = $file['name'];
                        //Lấy phần tên của file
                        $name = substr($bfName, 0, strpos($bfName, ".")) . '-' . rand(1, 100);
                        //lấy phần mở rộng của file
                        $ex =  strstr($file['name'], ".");
                        $des = 'img/' . $name . $ex;
                        if (move_uploaded_file($file['tmp_name'], $des)) {
                                echo 'Upload file thành công';
                                $this->fileURL  = $des;
                        } else
                                echo 'Upload file không thành công';
                } else
                        echo 'Kích thước file phải < 340 bytes';
        }

        function getURL()
        {
                return $this->fileURL;
        }
}
