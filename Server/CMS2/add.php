<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new schedule</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <script src="js/GetFaculty.js"></script>
    <script src="js/GetCourse.js"></script>
<!--
    <link async href="http://fonts.googleapis.com/css?family=Aladin" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
-->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
		function isMonday(cheked, feild) {
			var checkbox_day = document.getElementById(cheked).checked;

			if (checkbox_day) document.getElementById(feild).disabled = false;
			else document.getElementById(feild).disabled = true;
		}
		
		function isWeek(){
			var t_week = document.getElementById("optionsRadios1").checked;
			var f_week = document.getElementById("optionsRadios2").checked;
			var b_week = document.getElementById("optionsRadios3").checked;


			if (t_week){
				document.getElementById("TrueWeektable").style.visibility = "visible";
				document.getElementById("FalseWeekTable").style.visibility = "hidden";
				document.getElementById("FMonday").checked = false;
				document.getElementById("FTuesday").checked = false;
				document.getElementById("FWednesday").checked = false;
				document.getElementById("FThursday").checked = false;
				document.getElementById("FFriday").checked = false;
				document.getElementById("FSaturday").checked = false;

			}
			else if(f_week){
				document.getElementById("TrueWeektable").style.visibility = "hidden";
				document.getElementById("FalseWeekTable").style.visibility = "visible";
				document.getElementById("TMonday").checked = false;
				document.getElementById("TTuesday").checked = false;
				document.getElementById("TWednesday").checked = false;
				document.getElementById("TThursday").checked = false;
				document.getElementById("TFriday").checked = false;
				document.getElementById("TSaturday").checked = false;
			}
			else if(b_week){
				document.getElementById("TrueWeektable").style.visibility = "visible";
				document.getElementById("FalseWeekTable").style.visibility = "visible";
			}
			
		}
	</script>
  </head>
  <body>
	
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8" style="text-align: center">
				<h1><i class="fa fa-table" style="font-size: 45px;"></i>&nbsp;&nbsp;Добавить расписание</h1>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>
	
	<a href="#" class="myButton FixedLogOut"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
	<a href="#" class="myButton FixedHome"><i class="fa fa-home"></i>&nbsp;Home</a>
	
	<form  role="form" method="post">
		<div class="container formBG">
			<div class="row settingGroup">
				<div class="col-md-7">
						<div class="form-group">
							<select id="faculty" class="form-control" name="faculty">
							  <option value="none" disabled selected=>Факультет</option>
							</select>
							<select id="course" class="form-control SelectFormSpace" name="course">
							  <option value="none" disabled selected>Курс</option>
							</select>
							<select id="stream" class="form-control SelectFormSpace" name="stream">
							  <option value="none" disabled selected>Поток</option>
							</select>
							<select id="group" class="form-control SelectFormSpace" name="group" required>
							  <option value="none" disabled selected>Группа</option>
							</select>
						</div>
					</div>
					<div class="col-md-5">
						<div class="RadioBlock">
							<div class="NameRadio">неделя:&nbsp;</div>
							<div class="RadioLeft FontNormal">
								<label class="FontNormal">
									  <input type="radio" name="type_week" id="optionsRadios1" onclick="isWeek()" value="trueWeek" checked>
									  четная&nbsp;
								</label>
								<label class="FontNormal">
									  <input type="radio" name="type_week" id="optionsRadios2" onclick="isWeek()" value="falseWeek">
									  нечетная&nbsp;
								</label>

								<label class="FontNormal">
									  <input type="radio" name="type_week" id="optionsRadios3" onclick="isWeek()" value="bothWeek">
									  обе
								</label>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="container formBG TableMainBlock">
				<div class="col-md-6">
					<div id="TrueWeektable">
						<div class="TableDay FirstTableDay">
							<label><input type="checkbox" id="TMonday" name="TMonday" value="TdisableChekbox" onclick="isMonday('TMonday', 'TMondayFeild')">&nbsp;Понедельник:</label>
							<fieldset id="TMondayFeild" class="TMondayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select class="form-control" name="MondayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom1">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select class="form-control" name="MondayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom2">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									  <tr>
									  <td>3</td>
									  <td>
										<select class="form-control" name="MondayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom3">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									  <tr>
									  <td>4</td>
									  <td>
										<select class="form-control" name="MondayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom4">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="TTuesday" name="TTuesday" value="TdisableChekbox" onclick="isMonday('TTuesday', 'TTuesdayFeild')">&nbsp;Вторник:</label>
					<fieldset id="TTuesdayFeild" class="TTuesdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="TWednesday" name="TWednesday" value="TdisableChekbox" onclick="isMonday('TWednesday', 'TWednesdayFeild')">&nbsp;Среда:</label>
					<fieldset id="TWednesdayFeild" class="TWednesdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
					</div>
					
					
					<div class="TableDay">
						<label><input type="checkbox" id="TThursday" name="TThursday" value="TdisableChekbox" onclick="isMonday('TThursday', 'TThursdayFeild')">&nbsp;Четверг:</label>
						<fieldset id="TThursdayFeild" class="TThursdayFeild" disabled>
						<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="Friday" name="Friday" value="disableChekbox" onclick="isMonday('Friday', 'FridayFeild')">&nbsp;Пятница:</label>
					<fieldset id="FridayFeild" class="FridayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="FridayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="FridayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="FridayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="FridayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="TSaturday" name="TSaturday" value="TdisableChekbox" onclick="isMonday('TSaturday', 'TSaturdayFeild')">&nbsp;Суббота:</label>
					<fieldset id="TSaturdayFeild" class="TSaturdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
			</div>
			</div>
			<div class="col-md-6">
				<div id="FalseWeekTable">
				<div class="TableDay FirstTableDay">
							<label><input type="checkbox" id="FMonday" name="FMonday" value="FdisableChekbox" onclick="isMonday('FMonday', 'FMondayFeild')">&nbsp;Понедельник:</label>
							<fieldset id="FMondayFeild" class="FMondayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select class="form-control" name="MondayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom1">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select class="form-control" name="MondayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom2">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									  <tr>
									  <td>3</td>
									  <td>
										<select class="form-control" name="MondayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom3">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									  <tr>
									  <td>4</td>
									  <td>
										<select class="form-control" name="MondayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select class="form-control" name="MondayRoom4">
										  <option value="none" disabled selected>Аудитория</option>>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="FTuesday" name="FTuesday" value="FdisableChekbox" onclick="isMonday('FTuesday', 'FTuesdayFeild')">&nbsp;Вторник:</label>
					<fieldset id="FTuesdayFeild" class="FTuesdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="TuesdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="TuesdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="FWednesday" name="FWednesday" value="FdisableChekbox" onclick="isMonday('FWednesday', 'FWednesdayFeild')">&nbsp;Среда:</label>
					<fieldset id="FWednesdayFeild" class="FWednesdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="WednesdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="WednesdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
					</div>
					
					
					<div class="TableDay">
						<label><input type="checkbox" id="FThursday" name="FThursday" value="FdisableChekbox" onclick="isMonday('FThursday', 'FThursdayFeild')">&nbsp;Четверг:</label>
						<fieldset id="FThursdayFeild" class="FThursdayFeild" disabled>
						<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="ThursdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="ThursdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="FFriday" name="FFriday" value="FdisableChekbox" onclick="isMonday('FFriday', 'FFridayFeild')">&nbsp;Пятница:</label>
					<fieldset id="FFridayFeild" class="FFridayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="FridayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="FridayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="FridayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="FridayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="FridayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
				
				
				<div class="TableDay">
					<label><input type="checkbox" id="FSaturday" name="FSaturday" value="FdisableChekbox" onclick="isMonday('FSaturday', 'FSaturdayFeild')">&nbsp;Суббота:</label>
					<fieldset id="FSaturdayFeild" class="FSaturdayFeild" disabled>
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Преподаватель</th>
							  <th>Предмет</th>
							  <th>Аудитория</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>1</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher1">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson1">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom1">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher2">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson2">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom2">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>3</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher3">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson3">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom3">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							  <tr>
							  <td>4</td>
							  <td>
								<select class="form-control" name="SaturdayTeacher4">
								  <option value="none" disabled selected>Преподаватель</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayLesson4">
								  <option value="none" disabled selected>Предмет</option>
								</select>
							  </td>
							  <td>
								<select class="form-control" name="SaturdayRoom4">
								  <option value="none" disabled selected>Аудитория</option>>
								</select>
							  </td>
							</tr>
						</tbody>
					</table>
					</fieldset>
				</div>
			</div>
			</div>
		</div>
	</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
