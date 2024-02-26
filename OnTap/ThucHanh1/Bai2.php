<?php
error_reporting(0);
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
                <label for="">Hãy nhập n: </label>
                <input type="number" name="inputValue">
                <input type="submit" value="Xác nhận">
        </form>
</body>

</html>

<?php
$n = $_REQUEST['inputValue'];
// Viết chương trình cho phép đưa số ngẫu nhiên vào mảng có độ dài là n phần tử cho trước, xây dựng hàm thực hiện các yêu cầu sau:
// Xuất mảng lên trang Web.
$arr;
for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(0, 100);
}
foreach ($arr as $x) {
        echo $x . ', ';
}
// Đếm tổng số chẵn.
if (isset($n)) {
        $count = 0;
        foreach ($arr as $x) {
                if ($x % 2 == 0)
                        $count++;
        }
        echo '<br>' . 'Số lượng số chẵn có trong mảng là: ' . $count . '<br>';


        // Tính tổng của các số lẻ trong mảng.

        $sum = 0;
        foreach ($arr as $x) {
                if ($x % 2 != 0)
                        $sum += $x;
        }
        echo '<br>' . 'Tổng số lẻ có trong mảng là: ' . $sum . '<br>';

        // Xuất ra giá trị lớn nhất, nhỏ nhất của mảng.
        $min = $arr[0];
        $max = $arr[0];
        for ($i = 1; $i < $n; $i++) {
                if ($arr[$i] < $min)
                        $min = $arr[$i];
                if ($arr[$i] > $max)
                        $max = $arr[$i];
        }

        echo 'Giá trị lớn nhất trong mảng là: ' . $max . '<br>';
        echo 'Giá trị nhỏ nhất trong mảng là: ' . $min . '<br>';
        // Xuất đảo ngược các giá trị trong mảng.
        echo 'Xuất đảo ngược các giá trị trong mảng: ';
        for ($i = count($arr) - 1; $i >= 0; $i--) {
                echo $arr[$i] . ', ';
        }
}
?>