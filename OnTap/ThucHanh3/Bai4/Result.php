<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<?php
$content = $_REQUEST['userContent'];
$size = $_REQUEST['borderSize'];
$type = $_REQUEST['type'];
$style = $_REQUEST['boderStyle'];
$style = 'border: ' . $size . $type . ' ' . $style . ' black;'
?>

<body>
        <div style="<?php echo $style ?>">
                <?php echo $content; ?>
        </div>
</body>

</html>