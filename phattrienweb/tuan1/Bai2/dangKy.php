<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="dangKy.css">
</head>

<body style="width: 60%;">
        <div id="header">
                <h2>BANNER WEBSITE</h2>
        </div>

        <div id="content">
                <div id="leftSide">
                        <h4>Menus</h4>
                        <div id="menu-items">
                                <a href="#">Trang chủ</a>
                                <a href="#">Đăng ký</a>
                                <a href="#">Đăng nhập</a>
                        </div>
                </div>

                <form action="hienThiThongTin.php" method="post">
                        <div id="rigthSide">
                                <h3 style="text-align: center; color: black;">Thông tin đăng ký</h3>
                                <div>
                                        <h3>Thông tin tài khoản</h3>
                                        <div>
                                                <label for="">Email:</label>
                                                <input type="email" name="email" value=<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>>
                                        </div>
                                        <div>
                                                <label for="">Password:</label>
                                                <input type="password" name="password" value=<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>>
                                        </div>

                                        <div>
                                                <label for="">Nhập lại password:</label>
                                                <input type="password" name="rePassword" value=<?php if (isset($_SESSION['rePassword'])) echo $_SESSION['rePassword']; ?>>
                                        </div>
                                </div>

                                <div>
                                        <h3>Thông tin cá nhân</h3>
                                        <div>
                                                <label for="">Họ tên:</label>
                                                <input type="text" name="name" value=<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>>
                                        </div>

                                        <div>
                                                <label for="">Quê quán:</label>
                                                <select name="homeTown" id="" style="width: 170px;">
                                                        <option value="">Chọn tỉnh/Thành phố</option>
                                                        <option value="HCM">HCM</option>
                                                        <option value="Hà Nội">Hà Nội</option>
                                                </select>
                                        </div>

                                        <div>
                                                <label for="">Điện thoại:</label>
                                                <input type="number" name="phoneNum">
                                        </div>

                                        <div style="width: 357px;">
                                                <label for="">Giới tính:</label>
                                                <span>
                                                        <input type="radio" name="gender" value="Nam"><span>Nam</span>
                                                        <input type="radio" name="gender" value="Nữ"><span>Nữ</span>
                                                </span>
                                        </div>

                                        <div>
                                                <label for="">Sở thích:</label>
                                                <input type="checkbox" name="hobby[]" value="Màu xanh"><span>Màu xanh</span>
                                                <input type="checkbox" name="hobby[]" value="Màu đỏ"><span>Màu đỏ</span>
                                                <input type="checkbox" name="hobby[]" value="Đồng quê"><span>Đồng quê</span>
                                                <input type="checkbox" name="hobby[]" value="Cao nguyên"><span>Cao nguyên</span>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                                <div style="display: flex; justify-content: space-around; width: 200px;">
                                                        <input type="submit" name="submit" value="Đăng ký" style="color: white; background-color: green;">
                                                        <input type="submit" name="submit" value="Làm lại">
                                                </div>

                                        </div>
                                </div>
                        </div>
                </form>
        </div>

        <div id="footer">
                <h2>Footer website</h2>
        </div>
</body>

</html>