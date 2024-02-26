<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="MoPhongMayATM.css">
</head>

<body>
        <?php
        //Ban đầu đặt số tiền rút = 0
        //Kiểm tra số tiền rút có hợp lệ hay không ($money > 1000 && $money is number)
        $money = 0;
        if (isset($_POST["moneyFeild"])) {
                $money = $_POST["moneyFeild"];
                $totalMoney = 0;
                $notice = "";
                //Thành tiền
                $eachTotal = 0;
                //Định nghĩa các mệnh giá tiền
                define("ten", 10000);
                define("twenty", 20000);
                define("fifty", 50000);
                define("oneHunred", 100000);
                define("twoHunred", 200000);
                define("fiveHunred", 500000);

                $quantityFiveHunred = 0;
                $quantityTwoHunred = 0;
                $quantityOneHunred = 0;
                $quantityFifty = 0;
                $quantityTwenty = 0;
                $quantityTen = 0;
                if ($money >= 10000 && is_numeric($money)) {
                        //Kiểm tra tiền có phải là tiền giấy hay không
                        if ($money % 10000 != 0 && $totalMoney == 0) {
                                $notice = "Số tiền rút phải có phần dư không nhỏ hơn 10,000đ!";
                        } else {
                                while ($money >= 500000) {
                                        $quantityFiveHunred += 1;
                                        $money -= 500000;
                                        $totalMoney += 500000;
                                }

                                while ($money >= 200000) {
                                        $quantityTwoHunred += 1;
                                        $money -= 200000;
                                        $totalMoney += 200000;
                                }

                                while ($money >= 100000) {
                                        $quantityOneHunred += 1;
                                        $money -= 100000;
                                        $totalMoney += 100000;
                                }

                                while ($money >= 50000) {
                                        $quantityFifty += 1;
                                        $money -= 50000;
                                        $totalMoney += 50000;
                                }

                                while ($money >= 20000) {
                                        $quantityTwenty += 1;
                                        $money -= 20000;
                                        $totalMoney += 20000;
                                }

                                while ($money >= 10000) {
                                        $quantityTen += 1;
                                        $money -= 10000;
                                        $totalMoney += 10000;
                                }
                        }
                }
        }


        ?>


        <div class="container">
                <h1>Mô phỏng máy ATM</h1>
                <p>Vui lòng nhập vào số tiền mà bạn muốn rút</p>
                <form action="#" method="post">
                        <div id="withdrawal">
                                <input type="text" name="moneyFeild" value="<?php echo $_POST["moneyFeild"]; ?>">
                                <input type="submit" value="Rút tiền">
                        </div>
                </form>


                <div>
                        <table>
                                <tr>
                                        <th>Mệnh giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                </tr>
                                <?php
                                if ($quantityFiveHunred > 0) {
                                        echo "<tr> <td>" . number_format(fiveHunred) . "đ </td>
                                        <td>$quantityFiveHunred</td>
                                        <td>" . number_format($quantityFiveHunred * fiveHunred) . "đ</td> </tr>";
                                }
                                if ($quantityTwoHunred > 0) {
                                        echo "<tr> <td>" . number_format(twoHunred) . "đ </td>
                                        <td>$quantityTwoHunred</td>
                                        <td>" . number_format($quantityTwoHunred * twoHunred) . "đ</td> </tr>";
                                }

                                if ($quantityOneHunred > 0) {
                                        echo "<tr> <td>" . number_format(oneHunred) . "đ </td>
                                        <td>$quantityOneHunred</td>
                                        <td>" . number_format($quantityOneHunred * oneHunred) . "đ</td> </tr>";
                                }

                                if ($quantityFifty > 0) {
                                        echo "<tr> <td>" . number_format(fifty) . "đ </td>
                                        <td>$quantityFifty</td>
                                        <td>" . number_format($quantityFifty * fifty) . "đ</td> </tr>";
                                }

                                if ($quantityTwenty > 0) {
                                        echo "<tr> <td>" . number_format(twenty) . "đ </td>
                                        <td>$quantityTwenty</td>
                                        <td>" . number_format($quantityTwenty * twenty) . "đ</td> </tr>";
                                }

                                if ($quantityTen > 0) {
                                        echo "<tr> <td>" . number_format(ten) . "đ </td>
                                        <td>$quantityTen</td>
                                        <td>" . number_format($quantityTen * ten) . "đ</td> </tr>";
                                }
                                ?>

                        </table>
                        <hr>
                        <div class="totalMoney">
                                <div>
                                        <?php
                                        echo "Tổng tiền là: " . number_format($totalMoney) . "đ <br>";
                                        echo $notice;
                                        ?>
                                </div>

                        </div>

                        <div id="footer">
                                <p>Lưu ý về việc rút tiền</p>
                                <ul>
                                        <li>Số tiền rút phải là loại tiền polyme</li>
                                        <li>Số tiền rút phải có mệnh giá lớn hơn 10,000đ</li>
                                        <li>Số tiền rút phải có phần dư không nhỏ hơn 10,000đ</li>
                                </ul>
                        </div>

                </div>
        </div>


</body>

</html>