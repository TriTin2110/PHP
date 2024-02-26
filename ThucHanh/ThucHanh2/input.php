<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                form {
                        display: flex;
                        justify-content: center;
                }

                table,
                td {
                        border: 1px solid black;
                        border-collapse: collapse;
                        width: 600px;
                        height: 40px;
                        text-align: center;
                }
        </style>
</head>

<?php
$a = $_REQUEST['num1'];
$b = $_REQUEST['num2'];
$phepTinh = $_REQUEST['caculate'];
include('process.php');
$p = new phepTinh();
$result;
if (isset($a) && isset($b)) {
        $result = $p->kiemTraPhepTinh($a, $b, $phepTinh);
}
?>

<body>
        <form action="" method="get">

                <table>
                        <tr>
                                <td>
                                        <label for="">a=</label>
                                        <input type="number" name="num1" value=<?php echo $a ?>>
                                </td>

                                <td>
                                        <label for="">b=</label>
                                        <input type="number" name="num2" value=<?php echo $b ?>>
                                </td>

                                <td>
                                        <input type="submit" name="caculate" value="+">
                                        <input type="submit" name="caculate" value="-">
                                        <input type="submit" name="caculate" value="*">
                                        <input type="submit" name="caculate" value="/">

                                </td>
                        </tr>

                        <tr>
                                <!-- In kết quả -->
                                <?php
                                if (isset($result))
                                        echo '<td colspan="3">Kết quả của phép tính là: ' . $result . '</td>';
                                ?>
                        </tr>
                </table>


        </form>
</body>

</html>