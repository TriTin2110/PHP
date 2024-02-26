<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                table {
                        width: 80%;
                        border: 3px solid black;
                        border-collapse: collapse;
                }

                th,
                td {
                        text-align: center;
                        border: 2px solid black;
                }

                body {
                        display: flex;
                        justify-content: center;
                }
        </style>
</head>

<?php
include('xuLyDangKy.php');
$submit = $_REQUEST["submit"];

if ($submit == "Đăng ký") {
        session_start();
        $p = new xuLyDangKy();
        $email = $_REQUEST["email"];
        $_SESSION['email'] = $email;
        $password = $_REQUEST["password"];
        $_SESSION['password'] = $password;
        $rePassword = $_REQUEST["rePassword"];
        $_SESSION['rePassword'] = $rePassword;
        $name = $_REQUEST["name"];
        $_SESSION['name'] = $name;
        $homeTown = $_REQUEST["homeTown"];
        $gender = $_REQUEST["gender"];
        $phoneNum = $_REQUEST["phoneNum"];
        $hobby = $_REQUEST["hobby"];
        if ($p->kiemTraThongTin($email, $password, $rePassword, $name, $homeTown, $phoneNum) == false) {
                header("location: dangKy.php");
        }
} else {
        $_SESSION['email'] = "";
        $_SESSION['password'] = "";
        $_SESSION['rePassword'] = "";
        $_SESSION['name'] = "";
        header("location: dangKy.php");
}
?>

<body>

        <table>
                <tr>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Home town</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Hobby</th>
                </tr>

                <tr>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $homeTown; ?></td>
                        <td><?php echo $phoneNum; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php foreach ($hobby as $key) {
                                        echo $key . ', ';
                                } ?></td>
                </tr>
        </table>
</body>

</html>