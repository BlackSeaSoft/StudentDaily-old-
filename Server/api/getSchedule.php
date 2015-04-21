<?
	header('Content-type: text/html; charset=utf-8');
	include('db_function.php');
	include('getDay.php');
	
	try 
	{
		$connection = db_connect();
		$result_day;
		if (empty($_GET)) throw new Exception('Нет запроса. Example: test.com?group=id&date=YYYY-MM-DD');
		if (isset($_GET['group']) && isset($_GET['date']))
		{
			$date = $_GET['date'];
			$pattern = "/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/";
			if(strlen($date) != 10) throw new Exception('Дата должна состоять из 10 символов');
			if(!preg_match_all($pattern, $date)) throw new Exception('Неправильный формат даты. Дата в формате YYYY-MM-DD: 2015-03-15');
			$group = $_GET['group'];
			$pattern = "|^[\d]+$|";
			if(!preg_match_all($pattern, $group)) throw new Exception('Неправильный формат группы. Только числа');
			$result_day = getResultDayID($date);
			$result_bds = $connection->query("SELECT schedule.id, lesson, room, person, type_lesson FROM schedule
															INNER JOIN audience ON schedule.audience_id = audience.id
															INNER JOIN subject ON schedule.subject_id = subject.id
															INNER JOIN teacher ON schedule.audience_id = teacher.id
															INNER JOIN type_lesson ON schedule.audience_id = type_lesson.id
																WHERE ResultGroup_id='".$group."' AND ResultDay_id='".$result_day."'");
			$mas_result = db_result_to_array($result_bds);
			$MySchedule = json_encode($mas_result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
			if(strlen($MySchedule)==0 || strlen($MySchedule) < 8) throw new Exception('Таблица не получена. Нет записи под Ваш запрос.');
			else echo $MySchedule;
		}
		else throw new Exception('Неправильный запрос. Example: test.com?group=id&date=YYYY-MM-DD');
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	

