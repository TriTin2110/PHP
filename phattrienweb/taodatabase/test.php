<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php
        $conn = mysqli_connect('localhost', 'sa', 'nguyentritin', 'test');
        if ($conn) {
                $str = "select * from lop";
                $result = $conn->query($str);
                if ($result->num_rows > 0) {
                        while ($r = $result->fetch_assoc()) {
                                echo "<p>" . $r['TenSV'] . "</p>";
                        }
                } else
                        echo '0 result';
        } else
                echo 'Kết nối thất bại';
        ?>
</body>

</html>