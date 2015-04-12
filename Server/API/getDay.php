<?
	function getResultDayID($date)
	{
			$connection = db_connect();
			$result_bd = $connection->query("SELECT DAYOFWEEK('".$date."')"); // День в недели (input)
			$input_weekOfYear = $connection->query("SELECT WEEK('".$date."'), 1"); // Неделя в году (input)
			$bd_weekOfYear = $connection->query("SELECT inputDate FROM StartStudy"); // Выбор даты когда началась учеба
			
			$mas_inpDayOfWeek = db_result_to_array($result_bd, 1); // Обработка дня в недели (input)
			$mas_inpWeekOfYear = db_result_to_array($input_weekOfYear, 1); // Обработка недели в году (input)
			$mas_bdWeekOfYear = db_result_to_array($bd_weekOfYear, 1); // Обработка даты начала учебы (bd)
			$bd_weekOfYear = $connection->query("SELECT WEEK('".$mas_bdWeekOfYear[0][0]."'), 1"); // Неделя в году (bd)
			$mas_bdWeekOfYear = db_result_to_array($bd_weekOfYear, 1); // Обработка недели в году (bd)
	
			$type_day = $mas_inpWeekOfYear[0][0] - $mas_bdWeekOfYear[0][0];
			$day_id = $mas_inpDayOfWeek[0][0];
			
			if ($type_day % 2 != 0) $type_day = 0; // нечетный
			else $type_day = 1; // четный
		
			$result_bd = $connection->query("SELECT id FROM ResultDay WHERE day_id='".$day_id."' AND type_day='".$type_day."'"); 
			$mas_inpDayOfWeek = db_result_to_array($result_bd, 1);
			return $mas_inpDayOfWeek[0][0];
	}
?>	

