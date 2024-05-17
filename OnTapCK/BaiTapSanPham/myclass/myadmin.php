<?php
class myadmin{
	function connectToDatabase()
	{
			$conn = mysql_connect('localhost', 'sa', 'nguyentritin');
			if(!$conn)
			{
				echo 'Không thể kết nối';
			}
			else
			{
				$con = mysql_select_db('OntapCK');
				return $conn;	
			}
	}	
	
	function chekingUser($username, $password)
	{
		$link = $this->connectToDatabase();
		$password = md5($password);
		$sql = "select * from taikhoan where username = '$username' and password = '$password' limit 1";
		$result = mysql_query($sql, $link);
		$row = mysql_num_rows($result);
		if($row >0)
		{
			session_start();
			while($r = mysql_fetch_array($result))
			{
					$_SESSION['id'] = $r['iduser'];
					$_SESSION['username'] = $r['username'];
					$_SESSION['password'] = $r['password'];
			}
			return true;
		}
		else
		{
			return fasle;	
		}
		
	}
}

?>