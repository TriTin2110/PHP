<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
$n = $_REQUEST['nVal'];
if (isset($n)) {
        echo '<table border=1>
                <tr>
                        <th>STT</th>
                        <th>Loại CPU</th>
                        <th>Thông Số Kỹ Thuật</th>
                        <th>Giá Thành</th>
                </tr>';
        for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                        echo '<tr class="evenRow">
                        <td>' . $i . '</td>
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>';
                } else {
                        echo '<tr class="oddRow">
                        <td>' . $i . '</td>
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>';
                }
        }
        echo '</table>';
}
?>

<body>
        <form action="" method="get">
                <div>
                        <label for="">Hãy nhập n: </label>
                        <input type="number" placeholder="..." style="border: none;" name="nVal">
                </div>
                <input type="submit" value="Xác nhận" style="margin-top: 20px;">
        </form>
</body>

</html>