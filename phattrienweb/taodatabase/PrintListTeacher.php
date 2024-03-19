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
        mysqli_set_charset($conn, 'UTF8');
        if ($conn) {
                $result = mysqli_query($conn,"select * from GiangVien");
                if ($result > 0) {
                        while ($r = mysqli_fetch_assoc($result)) {
                                echo '<p>' . $r['name'] . '</p>';
                        }
                }
               
        }

        ?>
</body>
</html>