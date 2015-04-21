<?
	header('Content-type: text/html; charset=utf-8');
	include('db_function.php');
	
	function query_send($ready_db, $Day, $id_day)
	{
		$group_uniq = $_POST['group'];
		for($i=1; $i < 5; $i++)
		{		
			$Teacher = $_POST[$Day.'Teacher'.$i];
			$Lesson = $_POST[$Day.'Lesson'.$i];
			$Room = $_POST[$Day.'Room'.$i];
			$Type = $_POST[$Day.'Type'.$i];
			if(($Teacher != "none") && ($Lesson != "none") && ($Room != "none") && ($Type != "none"))
			{
				if($ready_db->query("INSERT INTO `u568080489_mybd`.`schedule` (`id`, `ResultGroup_id`, `ResultDay_id`, `type_lesson_id`, `audience_id`, `subject_id`, `teacher_id`) VALUES (NULL, ".$group_uniq.", ".$id_day.", ".$Type.", ".$Room.", ".$Lesson.", ".$Teacher.")") == false)
				{
					throw new Exception('Запрос не выполнен');
				}
			}
		}
	}
	
	function true_week_send($ready_db, $group_uniq, $T_Monday, $T_Tuesday, $T_Wednesday, $T_Thursday, $T_Friday, $T_Saturday)
	{
		try
		{
			if($T_Monday == "TdisableChekbox")
			{
				query_send($ready_db, 'TMonday', '2');
			}

			if($T_Tuesday == "TdisableChekbox")
			{
				query_send($ready_db, 'TTuesday', '3');
			}

			if($T_Wednesday == "TdisableChekbox")
			{
				query_send($ready_db, 'TWednesday', '4');
			}

			if($T_Thursday == "TdisableChekbox")
			{
				query_send($ready_db, 'TThursday', '5');
			}

			if($T_Friday == "TdisableChekbox")
			{
				query_send($ready_db, 'TFriday', '6');
			}

			if($T_Saturday == "TdisableChekbox")
			{
				query_send($ready_db, 'TSaturday', '7');
			}
		}
		catch (Exception $e)
		{
			echo 'Error: ',  $e->getMessage(), "\n";
		}
	}
	
	
	function false_week_send($ready_db, $group_uniq, $F_Monday, $F_Tuesday, $F_Wednesday, $F_Thursday, $F_Friday, $F_Saturday)
	{
		$group_uniq = $_POST['group'];
		try
		{
			if($F_Monday == "TdisableChekbox")
			{
				query_send($ready_db, 'FMonday', '2');
			}

			if($F_Tuesday == "TdisableChekbox")
			{
				query_send($ready_db, 'FTuesday', '3');
			}

			if($F_Wednesday == "TdisableChekbox")
			{
				query_send($ready_db, 'FWednesday', '4');
			}

			if($F_Thursday == "TdisableChekbox")
			{
				query_send($ready_db, 'FThursday', '5');
			}

			if($F_Friday == "TdisableChekbox")
			{
				query_send($ready_db, 'FFriday', '6');
			}

			if($F_Saturday == "TdisableChekbox")
			{
				query_send($ready_db, 'FSaturday', '7');
			}
		}
		catch (Exception $e)
		{
			echo 'Error: ',  $e->getMessage(), "\n";
		}
	}


	try 
	{
		$connection = db_connect();

		if (empty($_POST)) throw new Exception('Нет запроса');
		if (!isset($_POST['group'])) throw new Exception('Нет группы');
		$group_uniq = $_POST['group'];
		
		if($_POST['type_week'] == 'trueWeek')
		{
			true_week_send($connection, $_POST['group'], $_POST['TMonday'], $_POST['TTuesday'], $_POST['TWednesday'], $_POST['TThursday'], $_POST['TFriday'], $_POST['TSaturday']);
		}
		else if($_POST['type_week'] == 'falseWeek')
		{
			false_week_send($connection, $_POST['group'], $_POST['FMonday'], $_POST['FTuesday'], $_POST['FWednesday'], $_POST['FThursday'], $_POST['FFriday'], $_POST['FSaturday']);
		}
		else if($_POST['type_week'] == 'bothWeek')
		{
			true_week_send($connection, $_POST['group'], $_POST['TMonday'], $_POST['TTuesday'], $_POST['TWednesday'], $_POST['TThursday'], $_POST['TFriday'], $_POST['TSaturday']);
			false_week_send($connection, $_POST['group'], $_POST['FMonday'], $_POST['FTuesday'], $_POST['FWednesday'], $_POST['FThursday'], $_POST['FFriday'], $_POST['FSaturday']);
		}
		else throw new Exception('Нет типа недели');
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	
