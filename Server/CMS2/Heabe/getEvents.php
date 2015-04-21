<?
	header('Content-type: text/html; charset=utf-8');
	include('db_function.php');
	
	try 
	{
		$start_date = getStartDate();
		$last_date = getEndDate();
		$MyEvents = json_encode(checkQueryDB($start_date, $last_date), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		if(strlen($MyEvents)==0 || strlen($MyEvents) < 20) throw new Exception('Таблица не получена. Нет записи под Ваш запрос.');
		else echo $MyEvents;
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	

