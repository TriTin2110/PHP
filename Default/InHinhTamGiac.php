<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="">
        <style>
                img {
                        border: 10px solid red;
                        width: 140px;
                        height: 230px;
                }

                #showResult {
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                }
        </style>
</head>

<body>
        <div style="display: flex; justify-content: space-around;">
                <a href="InHinhTamGiac.php?choose=1"><img src="img\Triangle1.png"></a>
                <a href="InHinhTamGiac.php?choose=2"><img src="img\Triangle2.png" alt=""></a>
                <a href="InHinhTamGiac.php?choose=3"><img src="img\Triangle3.png" alt=""></a>
        </div>
        <div id="showResult">
                <?php $choose = $_GET["choose"];
                if ($choose == 1) {
                        for ($i = 1; $i <= 5; $i++) {
                                for ($j = 1; $j <= $i; $j++) {
                                        echo "*";
                                }
                                echo "<br>";
                        }
                } else if ($choose == 2) {
                        for ($i = 5; $i >= 1; $i--) {
                                for ($j = 1; $j <= $i; $j++) {
                                        echo "*";
                                }
                                echo "<br>";
                        }
                } else {
                        $i = 1;
                        $space;
                        while ($i <= 5) {
                                # code...
                                $space = str_repeat("&nbsp", 5 - $i);
                                $object = str_repeat("*", ($i * 2) - 1);
                                echo $space . $object . "<br>";
                                $i++;
                        }
                }

                //     x        line = 1, space = $i-line, * = 1
                //    xxx       line = 2, space = $i - line, * = (line*2)-1
                //   xxxxx      line = 3, space = $i - line, * = (line*2)-1
                //  xxxxxxx
                // xxxxxxxxx
                ?>
        </div>

</body>

</html>