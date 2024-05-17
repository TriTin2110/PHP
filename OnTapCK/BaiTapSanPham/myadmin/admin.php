<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include('../myclass/myclass.php');
$p = new myclass();
session_start();

if(!isset($_SESSION['id']))
{
	header('location: login.php');
}
if(isset($_REQUEST['id']))
	{
		$sql = "select * from sanpham where idsp =".$_REQUEST['id']." limit 1";
		$getdata = $p->getDataById($sql);
		$data1 = mysql_fetch_array($getdata);
	}
$tensp = $_REQUEST['tensq'];
	$gia = $_REQUEST['gia'];
	$hinh = $_FILES['fileField'];
	$loai = $_REQUEST['loai'];
switch($_REQUEST['submit'])
{
	case 'Thêm':
		if($p->implement("INSERT INTO sanpham VALUES (NULL , '$tensp', $gia, '".$hinh['name']."', $loai);"))
		{
			$des = "../img/".$hinh['name'];
			if(move_uploaded_file($hinh['tmp_name'], $des))
			{
				echo'
				<script>
					alert("Đã thêm thành công");
				</script>
			';	
			}
			else
			{
				echo'
				<script>
					alert("Thêm thất bại");
				</script>
			';	
			}
		}
		else
		{
			echo'
			<script>
				alert("Thêm thất bại");
			</script>
		';	
		}
	break;	
	
	case 'Xóa':
	if($p->implement("delete from sanpham where idsp = ".$_REQUEST['id']))
		{
			$data1['tensp'] = null;
			$data1['hinh'] = null;
			$data1['giaban'] = null;
			$data1['loai'] = null;
			echo'
			<script>
				alert("Đã xóa thành công");
			</script>
		';	
		}
		else
		{
			echo'
			<script>
				alert("Xóa thất bại");
			</script>
		';	
		}
	
	break;
	
	case 'Sửa':
	if($p->implement("UPDATE sanpham SET tensp = '$tensp',giaban = $gia,idloai = $loai WHERE idsp = ".$_REQUEST['id']." LIMIT 1 ;"))
		{
			$data1['tensp'] = null;
			$data1['hinh'] = null;
			$data1['giaban'] = null;
			$data1['loai'] = null;
			echo'
			<script>
				alert("Đã thay đổi thành công");
			</script>
		';	
		}
		else
		{
			echo'
			<script>
				alert("Thay đổi thất bại");
			</script>
		';	
		}
	break;
}
?>
<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="368" border="1" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center">Trang quản lý sản phẩm</td>
      </tr>
      <tr>
        <td width="115">Tên sản phẩm</td>
        <td width="144"><input type="text" name="tensq" id="tensq" value="<?php echo $data1['tensp']?>"></td>
      </tr>
      <tr>
        <td>Giá bán</td>
        <td><input type="number" name="gia" id="gia" value="<?php echo $data1['giaban']?>"></td>
      </tr>
      <tr>
        <td>Hình</td>
        <?php 
		if(isset($data1['hinh']))
		{
			echo '<td>'.$data1['hinh'].'</td>';
		}
		else 
		{
			echo '<td><input type="file" name="fileField" id="fileField"></td>';
		}
		?>
      </tr>
      <tr>
        <td>Loại</td>
        <td>
        <?php 
			$data = $p->getDataKind();
			if(mysql_num_rows($data) > 0)
			{
				echo '<select name="loai">';
				while($r = mysql_fetch_array($data))
				{
					$echoLoai= '';
					if($r['idloai'] == $data1['idloai'])
					{
						$echoLoai = '<option value ='.$r['idloai'].' selected>'.$r['tenloai'].'</option>';
					}
					else
					{
						$echoLoai = '<option value ='.$r['idloai'].'>'.$r['tenloai'].'</option>';
					}
					echo $echoLoai;
				}
				echo '</select>';
				
			}
			
		?>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Thêm">          <input type="submit" name="submit" id="submit" value="Xóa">          <input type="submit" name="submit" id="submit" value="Sửa"></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <table width="505" border="1" align="center">
    <tbody>
      <tr>
        <td width="29" align="center"><strong>Id</strong></td>
        <td width="134" align="center"><strong>Ten</strong></td>
        <td width="42" align="center"><strong>Gia</strong></td>
        <td width="218" align="center"><strong>Hinh</strong></td>
        <td width="48" align="center"><strong>Id Loai</strong></td>
      </tr>
      <tr>
      <?php
	  	$data = $p->getDataProduct();
		if(mysql_num_rows($data) > 0)
		{
			while($r = mysql_fetch_array($data))
			{
				echo '<tr>
			<td align="center"><a href=?id='.$r['idsp'].'>'.$r['idsp'].'</a></td>
			<td align="center"><a href=?id='.$r['idsp'].'>'.$r['tensp'].'</a></td>
			<td align="center"><a href=?id='.$r['idsp'].'>'.$r['giaban'].'</a></td>
			<td align="center"><a href=?id='.$r['idsp'].'>'.$r['hinh'].'</a></td>
			<td align="center"><a href=?id='.$r['idsp'].'>'.$r['idloai'].'</a></td>
			</tr>';
			}
		}
	  ?>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
