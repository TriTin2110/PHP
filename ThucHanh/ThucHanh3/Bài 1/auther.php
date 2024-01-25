<?php
        $name = $_REQUEST['name'];
        $job = $_REQUEST['job'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1>Hi User</h1>
        <h3>PHP program that receives a value from "whatName"</h3>
        <?php
                if(isset($name))
                {
                        echo '<h3>Hi there, '.$name.'</h3>';
                }
                else if(isset($job))
                {
                        echo '<h3>Job is '. $job.'</h3>';
                }
        ?>
</body>
</html>