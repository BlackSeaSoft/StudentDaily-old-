<?
	header('Content-type: text/html; charset=utf-8');
	
	function db_connect()
	{
		$host = 'mysql.hostinger.ru';
		$user = 'u568080489_admin';
		$password = 'qwerty123';
		$bd = 'u568080489_mybd';
		
		
		$connection = mysqli_connect($host, $user, $password);
		
		if(!$connection || !$connection->select_db($bd)) throw new Exception('Ошибка подключения к MySQL');
		
		return $connection;
	}
	
	function db_result_to_array($result, $bool_fetch=0)
	{
		$res_array = array();
		
		$count = 0;
		if($bool_fetch == 0)
		{
			while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				$res_array[$count] = $row;
				$count++;
			}
		}
		else
		{
			while($row = $result->fetch_array(MYSQLI_NUM))
			{
				$res_array[$count] = $row;
				$count++;
			}
		}
		return $res_array;
	}
?>
