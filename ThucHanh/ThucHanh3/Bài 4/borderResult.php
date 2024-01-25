<?php
        $style = $_REQUEST['style'];
        $size = $_REQUEST['size'];
        $type = $_REQUEST['type'];
        $content = $_REQUEST['content'];
        $yourStyle = 'border-width: '.$size.$type. '; border-style: '.$style.'; border-color: black';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <div style="<?php echo $yourStyle?>; text-align: center;">
                <?php echo $content?>
        </div>
</body>
</html>