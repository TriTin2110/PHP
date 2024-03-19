<?php
include('../myClass/myTest.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
session_start();
if (isset($_SESSION['taiKhoan']) && isset($_SESSION['matKhau'])) {
        $file = $_FILES['myFile'];
        if (isset($file)) {
                $p = new myClass();
                $des = '../data/' . $file['name'];
                $_SESSION['des'] = $des;
                if($p->myFile($file['tmp_name'], $des))
                {
                        if ($file['type'] == 'text/plain') {
                                echo 'Đã upload file thành công';
                                header('location: InputStudent.php');
                        } else
                                echo 'File không thõa yêu cầu';
                }
                else
                        echo 'Upload file không thành công';
        }

} else {
        header('location: LoginForm.php');
}
?>
<body>
        <form action="" method="post" enctype="multipart/form-data">
                <table>
                        <tr>
                                <td>Hãy chọn file</td>
                                <td><input type="file" name="myFile"></td>
                        </tr>
                        <tr>
                                <td colspan="2">
                                        <input type="submit" value="Xác nhận">
                                </td>
                        </tr>
                </table>
        </form>
</body>
</html>