<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
$_SESSION['firtTime'] = true;
?>

<body style="position: relative;">

        <div id="itemPage">
                <?php
                include ('View.php');
                ?>
                <style>
                        <?php
                        include ('style.css');
                        ?>
                </style>
        </div>



</body>

</html>