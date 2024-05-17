<?php
class myclass{
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
	
	function getDataKind()
	{
		$link = $this->connectToDatabase();
		$sql = "select * from loaisanpham";
		$result = mysql_query($sql, $link);
		return $result;
	}
	
	function getDataProduct()
	{
		$link = $this->connectToDatabase();
		$sql = "select * from sanpham";
		$result = mysql_query($sql, $link);
		return $result;
	}
	
	function getDataById($sql)
	{
		$link = $this->connectToDatabase();
		$result = mysql_query($sql, $link);
		return $result;
	}
	
	function implement($sql)
	{
		$link = $this->connectToDatabase();
		if(mysql_query($sql, $link))
			return true;
		return false;
	}
}

?>