<?php
include('../myclass/myadmin.php');
$p = new myadmin();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
if(isset($_REQUEST['submit']))
{
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	if(isset($username) && isset($password))	
	{
		if($p->chekingUser($username, $password))
		{
			header('location: admin.php');	
		}
		else
		{
			echo'
			<script>
				alert("Sai tên tài khoản hoặc mật khẩu");
			</script>
		';	
			
		}
	}
}
?>
<body>
<form id="form1" name="form1" method="post">
  <table width="273" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center"><strong>Đăng nhập</strong></td>
      </tr>
      <tr>
        <td width="95">Tài khoản</td>
        <td width="162"><input type="text" name="username" id="username"></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Đăng nhập"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>