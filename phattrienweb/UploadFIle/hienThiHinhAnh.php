<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
        include('processUpload.php');
        $p = new processUpload();
        $url = $p->getURL();
?>
<body>
        <img src="<?php $url?>" alt="">
</body>
</html>