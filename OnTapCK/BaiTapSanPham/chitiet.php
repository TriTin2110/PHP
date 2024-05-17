<?php include ("myclass/myclass.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$p = new myclass();
if(isset($_REQUEST['idsp']))
{
	$idsp = $_REQUEST['idsp'];
	$sql = "select * from sanpham where idsp = ".$idsp;
	$datain = $p->getDataById($sql);
	$data = mysql_fetch_array($datain);
}
?>
<body>
<table width="317" border="1" align="center">
  <tbody>
    <tr>
      <td width="150" rowspan="3"><img width="150px" height="180px" src="img/<?php echo $data['hinh']?>"></td>
      <td width="85" height="45">Tên sản phẩm</td>
      <td width="60" align="right"><?php echo $data['tensp']?></td>
    </tr>
    <tr>
      <td height="71">giá bán</td>
      <td align="right"><?php echo $data['giaban']?></td>
    </tr>
    <tr>
      <td>Loại</td>
      <td align="right">
	  <?php 
	  $sql = "select tenloai from loaisanpham where idloai = ". $data['idloai']. " limit 1";
	  $loaidata = $p->getDataById($sql);
	  $loai = mysql_fetch_array($loaidata);
	  echo $loai['tenloai'];
	  ?>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>