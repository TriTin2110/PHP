<?php
include("phepToan.php");
$p = new phepToan();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <form action="" method="get">
                <div>
                        <label for="">Hãy nhập n: </label>
                        <input type="text" name="userInput" value="">
                        <input type="submit" value="Tải">
                </div>
        </form>

        <?php
        $n = $_GET["userInput"];
        if (isset($n)) {
                $arr;

                for ($i = 0; $i < $n; $i++) {
                        $arr[$i] = rand(1, 10);
                }
                echo "Mảng ban đầu là: ";
                for ($i = 0; $i < $n; $i++) {
                        echo $arr[$i] . " ";
                }

                $count = 0;
                for ($i = 0; $i < $n; $i++) {
                        if ($p->demSoChan($arr[$i]))
                                $count++;
                }

                echo "<br>Số lượng số chẵn trong mảng là: " . $count . "<br>";

                $count = 0;
                for ($i = 0; $i < $n; $i++) {
                        if ($p->tinhTongSoLe($arr[$i]))
                                $count += $arr[$i];
                }
                echo "Tổng của các số lẻ trong mảng là: " . $count;

                $max = $arr[0];
                $min = $arr[0];
                for ($i = 1; $i < $n; $i++) {
                        if ($arr[$i] > $max)
                                $max = $arr[$i];
                        if ($arr[$i] < $min)
                                $min = $arr[$i];
                }

                echo "<br>Số lớn nhất trong mảng là: " . $max;
                echo "<br>Số nhỏ nhất trong mảng là: " . $min;

                // Xuất đảo ngược các giá trị trong mảng.
                echo "<br>Đảo ngược các giá trị trong mảng: ";
                for ($i = $n; $i >= 0; $i--) {
                        # code...
                        echo $arr[$i] . " ";
                }
                session_destroy();
        }

        echo "<br>Ví dụ foreach:<br>";
        $list = array("alpha", "beta", "gamma", "delta", "epsilon");
        foreach ($list as $key) {
                echo $key . "<br>";
        }
        unset($n);
        ?>

</body>

</html>