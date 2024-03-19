<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>

<body style="position: relative;">
        <div style="height: 100%;">
        <div id="header">
                <h1>Web bán hàng</h1>
        </div>

                <div id="content">
                        <div id="menuSide">
                                <div id="MenuItem">
                                        <div id="Home" class="chosen">
                                                <h3><a href="View.php?a=TrangChu">Trang chủ</a></h3>
                                        </div>

                                        <div id="Phone" class="menuPanel">
                                                <h3><a href="View.php?a=DT1">Điện thoại</a></h3>
                                        </div>

                                        <div id="Appliances" class="menuPanel">
                                                <h3><a href="">Gia dụng</a> </h3>
                                        </div>

                                        <div id="Vehicle " class="menuPanel">
                                                <h3><a href="">Phương tiện</a> </h3>
                                        </div>

                                        <div id="Men Clothes" class="menuPanel">
                                                <h3><a href="">Thời trang nam</a> </h3>
                                        </div>

                                        <div id="Women Clothes" class="menuPanel">
                                                <h3><a href="">Thời trang nữ</a> </h3>
                                        </div>
                                </div>
                                
                        </div>

                        <form action="" method="get">
                                

                        </form>
                        <div id="itemPage">
                                <?php
                                $count = 0;
                                session_start();
                                $result = $_SESSION['result'];
                                // //fetch_assoc() duyệt từng dòng từ resultset trả về/
                                // //fetch_assoc() sẽ trả về null khi đã duyệt hết tất cả các dòng trong danh sách
                                while ($r = $result->fetch_assoc()) {
                                        echo '<td> <img src="../IMG/' . $r['img_san_pham'] . '" width="200" height="250"> <br>' . $r['id_san_pham'] . '<br>' . $r['ten_san_pham'] . '</td>';
                                        $count++;
                                        //Xuống hàng nếu biến $count % 4 == 0
                                        if ($count % 4 == 0)
                                                echo '</tr> <tr>';
                                }

                                ?>
                                <style>
                                        <?php
                                        include ('../style.css');
                                        ?>
                                </style>
                        </div>
                </div>
        
        

</body>

</html>