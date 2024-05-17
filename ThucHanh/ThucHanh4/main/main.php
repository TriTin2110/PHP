<?php
include ('../myclass/myclass.php');
$p = new myclass();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
       <div id="container">
                <div id="header">
                       <h1>Web sản phẩm</h1>
                </div>
                <div id="content">
                        <div id="leftSideContent">
                                <p><a href="main.php?idcty=0">Apple</a></p>
                                <p><a href="main.php?idcty=2">SamSung</a></p>
                        </div>
                        <div id="rightSideContent">
                                        <?php
                                        $id = $_REQUEST['idcty'];
                                        if (isset($id)) {
                                                $p->getDataProduct("select * from sanpham where idcty = ".$id);
                                        }
                                        else {
                                                $p->getDataProduct("select * from sanpham");
                                        }
                                        
                                        ?>
                        </div>
                </div>

                <div id="footer">
                        @@@
                </div>
       </div>
     
</body>
</html>