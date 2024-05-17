<?php 
include ("myclass/myclass.php");
$p = new myclass();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="container"> 
    <table width="551" border="1" align="center">
      <tbody>
        <tr>
          <td colspan="2" bgcolor="#E4191C" style="text-align: center">Web sản phẩm</td>
        </tr>
        <tr>
          <td width="91" bgcolor="#DFEB20" id="leftside">
          <?php
		  $data = $p->getDataKind();
		  if(mysql_num_rows($data) > 0)
			{
				while($r = mysql_fetch_array($data))
				{
					echo '
					<p>
					<a href="?idloai='.$r['idloai'].'">
						'.$r['tenloai'].'
				  	</a>
					</p>
					';
				}
			}
			else
			{
			echo 'Không có dữ liệu';
			}
		  ?>
          </td>
          <td width="444" bgcolor="#11D346" id="rightside">
          
          <?php
		  if(!isset($_REQUEST['idloai']))
		  {
			 $data = $p->getDataProduct();
			}
		  else
		  {
			 $data = $p->getDataById("select * from sanpham where idloai = ".$_REQUEST['idloai']);
			}
			if(mysql_num_rows($data) > 0)
			{
				while($r = mysql_fetch_array($data))
				{
				echo '
					<div class="sanpham" style="text-align:center;">
					<div>'.$r['tensp'].'</div>
					<a href="chitiet.php?idsp='.$r['idsp'].'"><img width="100px" height ="125px" src="img/'.$r['hinh'].'"></img></a>
					<div>'.$r['giaban'].'</div>
				  </div>
				';
				}
			}
			else
			{
				echo 'Không có dữ liệu';
			}
		  ?>
              
          </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#1F3ABC" style="text-align: center">Footer</td>
        </tr>
      </tbody>
    </table>
</div>

</body>
</html>