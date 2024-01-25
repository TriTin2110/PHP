<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
        include('processTable.php');
        $p = new process();
        $val = $_REQUEST['inputRow'];
        if(isset($val))
        $p->increaseRow($val);
?>
<body>
        <h2>Hãy nhập số hàng cho table</h2>
        <form action="" method="get">
                <input type="text" name="inputRow">
                <input type="submit" value="Xác nhận">
        </form>
</body>

</html>