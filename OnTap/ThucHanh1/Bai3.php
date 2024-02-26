<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
</body>

</html>

<?php
$list = array('delta', 'alpha', 'beta', 'sigma');
foreach ($list as $arr) {
        echo '<ul>
                        <li>' . $arr . '</li>
                </ul>';
}
?>