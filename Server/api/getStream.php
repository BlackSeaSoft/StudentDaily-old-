<?
	include('db_function.php');
	
	try 
	{
		$connection = db_connect();
		if(!$_GET['course']) throw new Exception('Не получен КУРС. Example:test.com?course=value');
		$course = $_GET['course'];
		$result_bd = $connection->query("SELECT id, potok_number FROM stream WHERE course_id=".$course);
		
		if($_GET['mode'])
		{
			$mode = $_GET['mode'];
			if($mode==1) $mas_result = db_result_to_array($result_bd, $mode);
		}
		else $mas_result = db_result_to_array($result_bd);
		$str_json_audience = json_encode($mas_result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		if(strlen($str_json_audience)==0) throw new Exception('Таблица не получена. Нет записи под Ваш запрос.');
		else {
			$str_json_audience = str_replace("potok_number", "entry", $str_json_audience);
			echo $str_json_audience;
		} 
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	

