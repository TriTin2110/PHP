<!-- Tạo đối tượng mới -->
<?php
include('phepToan.php');
$p = new phepToan();
?>


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
                        width: 400px;
                        margin-top: 30px;
                }

                input[type="submit"] {
                        width: 40px;
                        height: 40px;
                }
        </style>
</head>

<body>
        <?php
        $a = $_GET["firstNum"];
        $b = $_GET["secondNum"];
        $caculations = $_GET["calculations"];
        $result;
        switch ($caculations) {
                case '+':
                        $result = $a . " + " . $b . " = " . $p->phepCong($a, $b);
                        break;

                case '-':
                        $result = $a . " - " . $b . " = " . $p->phepTru($a, $b);
                        break;

                case '*':
                        $result = $a . " * " . $b . " = " . $p->phepNhan($a, $b);
                        break;

                case '/':
                        $result = $a . " / " . $b . " = " . $p->phepChia($a, $b);
                        break;
        }
        ?>

        <form action="" method="get">
                <div>
                        <label for="">Hãy nhập số thứ nhất: </label>
                        <input type="text" name="firstNum" value="<?php echo $a ?>">
                </div>

                <div>
                        <label for="">Hãy nhập số thứ hai: </label>
                        <input type="text" name="secondNum" value="<?php echo $b ?>">
                </div>

                <div>
                        <input type="submit" name="calculations" value="+">
                        <input type="submit" name="calculations" value="-">
                        <input type="submit" name="calculations" value="*">
                        <input type="submit" name="calculations" value="/">
                </div>
        </form>

        <?php
        echo $result;
        ?>
</body>

</html>