<?php
$file = $_FILES['ffile'];
$size = $_REQUEST['size'];
if (isset($file)) {
        $des = 'img/' . $file['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <img src="<?php echo $des ?>" width="<?php echo $size ?>" height="<?php echo $size ?>">
</body>

</html>