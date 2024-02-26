<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<?php
$n = $_REQUEST['value'];
for ($i = 1; $i <= $n; $i++) {
        $resultSum += $i;
}
$resultFactorial = 1;
for ($i = 1; $i <= $n; $i++) {
        $resultFactorial *= $i;
}
?>

<body>
        <form action="" method="get">
                <div>
                        <label for="">Hãy nhập n: </label>
                        <input type="number" name="value" value=<?php echo $n ?>>
                        <input type="submit" value="Xác nhận">
                </div>
        </form>

        <div>
                <?php
                        if(isset($resultSum))
                                echo '<label for="">Tổng từ 1 đến '.  $n .' là: ' . $resultSum. '</label> <br>';

                        if (isset($resultFactorial))
                                echo '<label for="">Giai thừa của ' .  $n . ' là: ' . $resultFactorial . '</label>';
                ?>
                
        </div>
</body>

</html>