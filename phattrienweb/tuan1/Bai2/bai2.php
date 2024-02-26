<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                div {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                        width: 250px;
                        margin-top: 20px;
                }
        </style>
</head>

<?php
include('phepToan.php');
$p = new phepToan();
$a = $_GET["num1"];
$b = $_GET["num2"];
$ketqua = $p->phepTinh($a, $b, $_GET["phepTinh"]);
?>

<body>
        <form action="#" method="get">
                <div>
                        <label for="">Số thứ 1:</label><input type="number" name="num1" value=<?php if (isset($a)) echo $a; ?>>
                </div>
                <div>
                        <label for="">Số thứ 2:</label><input type="number" name="num2" value=<?php if (isset($b)) echo $b; ?>>
                </div>

                <select style="margin-top: 30px;" name="phepTinh" id="">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                </select>
                <input type="submit" value="Xác nhận">

                <div>Kết quả: <?php if (isset($ketqua)) echo $ketqua; ?></div>
        </form>
</body>

</html>