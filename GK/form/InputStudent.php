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
        $des = $_SESSION['des'];
        $myfile = fopen($des, "w");
        fwrite($myfile, $_REQUEST['id']);
        fwrite($myfile, $_REQUEST['name']);
        fwrite($myfile, $_REQUEST['age']);
        $myfile = fopen($des, "r");
        echo fgets($myfile);
        fclose($myfile);
} else
        header('location: LoginForm.php');
?>
<body>
      <form action="" method="get">
        <table>
                <tr>
                        <td>Hãy nhập mã sinh viên</td>
                        <td><input type="text" name="id"></td>
                </tr>
                <tr>
                        <td>Hãy nhập tên sinh viên</td>
                        <td><input type="text" name="name"></td>
                </tr>
                <tr>
                        <td>Hãy nhập tuổi sinh viên</td>
                        <td><input type="text" name="age"></td>
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