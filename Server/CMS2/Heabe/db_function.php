<?

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
	
	function trueString($str)
	{
		return 0;
	}
	
	function checkRequest()
	{
		if (empty($_GET)) throw new Exception('Нет запроса. Example: test.com?start_date=2015-02-25&end_date=2015-03-15');
		else $s_pattern = "/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/";
		return $s_pattern;
	}
	
	function getStartDate()
	{
		$pattern = checkRequest();
		if($_GET['start_date'])
		{
			$t_StartDate = $_GET['start_date'];
			if(strlen($t_StartDate) != 10) throw new Exception('Дата должна состоять из 10 символов');
			if(preg_match_all($pattern, $t_StartDate)) return $t_StartDate;
			else throw new Exception('Неправильный формат даты. Дата в формате YYYY-MM-DD: 2015-03-15');
		}
		else return 0;
	}
	
	function getEndDate()
	{
		$pattern = checkRequest();
		if($_GET['end_date'])
		{
			$t_lastDate = $_GET['end_date'];
			return $t_lastDate;
		}
		else return 0;
	}
	
	function db_result_to_array($result)
	{
		$res_array = array();
		
		$count = 0;
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			$res_array[$count] = $row;
			$count++;
		}
		return $res_array;
	}
	
	function get_table()
	{
		$querys = 'SELECT * FROM events';
		return findDate($querys);
	}
	
	function get_StartDateToEnd($s_date)
	{
		$querys = "SELECT * FROM events WHERE date >='".$s_date."' ORDER BY date ASC";
		return findDate($querys);
	}
	
	function get_EndDateToStart($s_date)
	{
		$querys = "SELECT * FROM events WHERE date <='".$s_date."' ORDER BY date ASC";
		return findDate($querys);
	}
	
	function get_BetweenDate($s_date, $e_date)
	{		
		$querys = "SELECT * FROM events WHERE date >='".$s_date."' and date <='".$e_date."' ORDER BY date ASC";
		return findDate($querys);
	}
	
	function TimeFormat($mas)
	{
		foreach($mas as &$value) :
		{
			$value['time'] = substr($value['time'],0, -3);
		}
		endforeach;
		return $mas;
	}
	
	function findDate($s_query)
	{
		$connection = db_connect();
		$t_result = $connection->query($s_query);
		$t_result = db_result_to_array($t_result);
		$t_result = TimeFormat($t_result);
		return $t_result;
	}	
	
	function checkQueryDB($start_date, $end_date)
	{
		if($start_date==0 && $end_date==0)
		{
			throw new Exception('Проверьте правильность GET-запроса. Example: test.com?start_date=2015-02-25&end_date=2015-03-15');
		}
		else if($start_date!=0 && $end_date==0)
		{
			$table = get_StartDateToEnd($start_date); 
			return $table;
		}
		else if($start_date==0 && $end_date!=0)
		{
			$table = get_EndDateToStart($end_date); 
			return $table; 
		}
		else if($start_date!=0 && $end_date!=0)
		{
			$table = get_BetweenDate($start_date, $end_date); 
			return $table;
		}
		else throw new Exception('Неизвестная ошибка в обработке запроса. Проверьте правильность GET-ззпроса.');
	}
	
	function printQueryDB($mas_table)
	{
		if($mas_table) printJSON_advenced($mas_table);
		else throw new Exception('Таблица не получена. Нет записи под Ваш запрос.');
	}

?>
