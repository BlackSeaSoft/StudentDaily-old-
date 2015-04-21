<?
	include('db_function.php');
	
	try 
	{
		$connection = db_connect();
		if(!$_GET['stream']) throw new Exception('Не получен ПОТОК. Example:test.com?stream=value');
		$stream = $_GET['stream'];
		$result_bd = $connection->query("SELECT id, number_group FROM uniqGroup WHERE stream_id=".$_GET['stream']);
		
		if($_GET['mode'])
		{
			$mode = $_GET['mode'];
			if($mode==1) $mas_result = db_result_to_array($result_bd, $mode);
		}
		else $mas_result = db_result_to_array($result_bd);
		$str_json_audience = json_encode($mas_result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		if(strlen($str_json_audience)==0) throw new Exception('Таблица не получена. Нет записи под Ваш запрос.');
		else {
			$str_json_audience = str_replace("number_group", "entry", $str_json_audience);
			echo $str_json_audience;
		} 
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	

