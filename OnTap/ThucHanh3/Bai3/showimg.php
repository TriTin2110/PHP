<?php
$file = $_FILES['ffile'];
$size = $_REQUEST['sizeImg'];
if (isset($file)) {
        $des = 'img/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $des);
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
        <img src="<?php echo $des ?>" width=<?php echo $size; ?> height=<?php echo $size ?> alt="NULL">
</body>

</html>