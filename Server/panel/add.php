<?php
$page_name = "add.php";
$page_title = "Add a new schedule";
$name_function = "Добавить расписание";
include 'module/check.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php include "module/meta.php"; ?>
  </head>
  <body>
	<header>
		<?php include "module/header.php"; ?>
	</header>
	
	<form  role="form" method="post" action="../module/send_fun.php">
		<div class="container formBG">
			<div class="row settingGroup">
				<div class="col-md-7">
						<div class="form-group">
							<select id="faculty" class="form-control" name="faculty">
							  <option value="none" disabled selected>Факультет</option>
							</select>
							<select id="course" class="form-control SelectFormSpace" name="course">
							  <option value="none" disabled selected>Курс</option>
							</select>
							<select id="stream" class="form-control SelectFormSpace" name="stream">
							  <option value="none" disabled selected>Поток</option>
							</select>
							<select id="group"  class="form-control SelectFormSpace" name="group">
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
							<label><input type="checkbox" id="TMonday" name="TMonday" value="TdisableChekbox" onclick="isMonday('TMonday', 'TMondayFeild', 'TMonday')">&nbsp;Понедельник:</label>
							<fieldset id="TMondayFeild" class="TMondayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TMondayTeacher1" class="form-control" name="TMondayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayLesson1" class="form-control" name="TMondayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayRoom1" class="form-control" name="TMondayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayType1" class="form-control" name="TMondayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TMondayTeacher2" class="form-control" name="TMondayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayLesson2" class="form-control" name="TMondayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayRoom2" class="form-control" name="TMondayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayType2" class="form-control" name="TMondayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TMondayTeacher3" class="form-control" name="TMondayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayLesson3" class="form-control" name="TMondayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayRoom3" class="form-control" name="TMondayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayType3" class="form-control" name="TMondayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TMondayTeacher4" class="form-control" name="TMondayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayLesson4" class="form-control" name="TMondayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayRoom4" class="form-control" name="TMondayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TMondayType4" class="form-control" name="TMondayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
				
				
						<div class="TableDay">
							<label><input type="checkbox" id="TTuesday" name="TTuesday" value="TdisableChekbox" onclick="isMonday('TTuesday', 'TTuesdayFeild', 'TTuesday')">&nbsp;Вторник:</label>
							<fieldset id="TTuesdayFeild" class="TTuesdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TTuesdayTeacher1" class="form-control" name="TTuesdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayLesson1" class="form-control" name="TTuesdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayRoom1" class="form-control" name="TTuesdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayType1" class="form-control" name="TTuesdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TTuesdayTeacher2" class="form-control" name="TTuesdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayLesson2" class="form-control" name="TTuesdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayRoom2" class="form-control" name="TTuesdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayType2" class="form-control" name="TTuesdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TTuesdayTeacher3" class="form-control" name="TTuesdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayLesson3" class="form-control" name="TTuesdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayRoom3" class="form-control" name="TTuesdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  <td>
										<select id="TTuesdayType3" class="form-control" name="TTuesdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TTuesdayTeacher4" class="form-control" name="TTuesdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayLesson4" class="form-control" name="TTuesdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayRoom4" class="form-control" name="TTuesdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TTuesdayType4" class="form-control" name="TTuesdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="TWednesday" name="TWednesday" value="TdisableChekbox" onclick="isMonday('TWednesday', 'TWednesdayFeild', 'TWednesday')">&nbsp;Среда:</label>
							<fieldset id="TWednesdayFeild" class="TWednesdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TWednesdayTeacher1" class="form-control" name="TWednesdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayLesson1" class="form-control" name="TWednesdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayRoom1" class="form-control" name="TWednesdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayType1" class="form-control" name="TWednesdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TWednesdayTeacher2" class="form-control" name="TWednesdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayLesson2" class="form-control" name="TWednesdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayRoom2" class="form-control" name="TWednesdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayType2" class="form-control" name="TWednesdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TWednesdayTeacher3" class="form-control" name="TWednesdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayLesson3" class="form-control" name="TWednesdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayRoom3" class="form-control" name="TWednesdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayType3" class="form-control" name="TWednesdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TWednesdayTeacher4" class="form-control" name="TWednesdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayLesson4" class="form-control" name="TWednesdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayRoom4" class="form-control" name="TWednesdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TWednesdayType4" class="form-control" name="TWednesdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
							</div>
							
							
							<div class="TableDay">
								<label><input type="checkbox" id="TThursday" name="TThursday" value="TdisableChekbox" onclick="isMonday('TThursday', 'TThursdayFeild', 'TThursday')">&nbsp;Четверг:</label>
								<fieldset id="TThursdayFeild" class="TThursdayFeild" disabled>
								<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TThursdayTeacher1" class="form-control" name="TThursdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayLesson1" class="form-control" name="TThursdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayRoom1" class="form-control" name="TThursdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayType1" class="form-control" name="TThursdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TThursdayTeacher2" class="form-control" name="TThursdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayLesson2" class="form-control" name="TThursdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayRoom2" class="form-control" name="TThursdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayType2" class="form-control" name="TThursdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TThursdayTeacher3" class="form-control" name="TThursdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayLesson3" class="form-control" name="TThursdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayRoom3" class="form-control" name="TThursdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayType3" class="form-control" name="TThursdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TThursdayTeacher4" class="form-control" name="TThursdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayLesson4" class="form-control" name="TThursdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayRoom4" class="form-control" name="TThursdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TThursdayType4" class="form-control" name="TThursdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="TFriday" name="TFriday" value="TdisableChekbox" onclick="isMonday('TFriday', 'TFridayFeild', 'TFriday')">&nbsp;Пятница:</label>
							<fieldset id="TFridayFeild" class="TFridayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TFridayTeacher1" class="form-control" name="TFridayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayLesson1" class="form-control" name="TFridayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayRoom1" class="form-control" name="TFridayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayType1" class="form-control" name="TFridayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TFridayTeacher2" class="form-control" name="TFridayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayLesson2" class="form-control" name="TFridayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayRoom2" class="form-control" name="TFridayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayType2" class="form-control" name="TFridayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TFridayTeacher3" class="form-control" name="TFridayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayLesson3" class="form-control" name="TFridayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayRoom3" class="form-control" name="TFridayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayType3" class="form-control" name="TFridayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TFridayTeacher4" class="form-control" name="TFridayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayLesson4" class="form-control" name="TFridayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayRoom4" class="form-control" name="TFridayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TFridayType4" class="form-control" name="FridayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="TSaturday" name="TSaturday" value="TdisableChekbox" onclick="isMonday('TSaturday', 'TSaturdayFeild', 'TSaturday')">&nbsp;Суббота:</label>
							<fieldset id="TSaturdayFeild" class="TSaturdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="TSaturdayTeacher1" class="form-control" name="TSaturdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayLesson1" class="form-control" name="TSaturdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayRoom1" class="form-control" name="TSaturdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayType1" class="form-control" name="TSaturdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="TSaturdayTeacher2" class="form-control" name="TSaturdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayLesson2" class="form-control" name="TSaturdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayRoom2" class="form-control" name="TSaturdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayType2" class="form-control" name="TSaturdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="TSaturdayTeacher3" class="form-control" name="TSaturdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayLesson3" class="form-control" name="TSaturdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayRoom3" class="form-control" name="TSaturdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayType3" class="form-control" name="TSaturdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="TSaturdayTeacher4" class="form-control" name="TSaturdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayLesson4" class="form-control" name="TSaturdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayRoom4" class="form-control" name="TSaturdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="TSaturdayType4" class="form-control" name="TSaturdayType4">
										  <option value="none" disabled selected>Тип</option>
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
									<label><input type="checkbox" id="FMonday" name="FMonday" value="FdisableChekbox" onclick="isMonday('FMonday', 'FMondayFeild', 'FMonday')">&nbsp;Понедельник:</label>
									<fieldset id="FMondayFeild" class="FMondayFeild" disabled>
									<table class="table table-bordered">
										<thead>
											<tr>
											  <th>ID</th>
											  <th>Преподаватель</th>
											  <th>Предмет</th>
											  <th>Аудитория</th>
											  <th>Тип</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <td>1</td>
											  <td>
												<select id="FMondayTeacher1" class="form-control" name="FMondayTeacher1">
												  <option value="none" disabled selected>Преподаватель</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayLesson1" class="form-control" name="FMondayLesson1">
												  <option value="none" disabled selected>Предмет</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayRoom1" class="form-control" name="FMondayRoom1">
												  <option value="none" disabled selected>Аудитория</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayType1" class="form-control" name="FMondayType1">
												  <option value="none" disabled selected>Тип</option>
												</select>
											  </td>
											</tr>
											<tr>
											  <td>2</td>
											  <td>
												<select id="FMondayTeacher2" class="form-control" name="FMondayTeacher2">
												  <option value="none" disabled selected>Преподаватель</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayLesson2" class="form-control" name="FMondayLesson2">
												  <option value="none" disabled selected>Предмет</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayRoom2" class="form-control" name="FMondayRoom2">
												  <option value="none" disabled selected>Аудитория</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayType2" class="form-control" name="FMondayType2">
												  <option value="none" disabled selected>Тип</option>
												</select>
											  </td>
											  <tr>
											  <td>3</td>
											  <td>
												<select id="FMondayTeacher3" class="form-control" name="FMondayTeacher3">
												  <option value="none" disabled selected>Преподаватель</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayLesson3" class="form-control" name="FMondayLesson3">
												  <option value="none" disabled selected>Предмет</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayRoom3" class="form-control" name="FMondayRoom3">
												  <option value="none" disabled selected>Аудитория</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayType3" class="form-control" name="FMondayType3">
												  <option value="none" disabled selected>Тип</option>
												</select>
											  </td>
											  <tr>
											  <td>4</td>
											  <td>
												<select id="FMondayTeacher4" class="form-control" name="FMondayTeacher4">
												  <option value="none" disabled selected>Преподаватель</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayLesson4" class="form-control" name="FMondayLesson4">
												  <option value="none" disabled selected>Предмет</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayRoom4" class="form-control" name="FMondayRoom4">
												  <option value="none" disabled selected>Аудитория</option>
												</select>
											  </td>
											  <td>
												<select id="FMondayType4" class="form-control" name="FMondayType4">
												  <option value="none" disabled selected>Тип</option>
												</select>
											  </td>
											</tr>
										</tbody>
									</table>
									</fieldset>
								</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="FTuesday" name="FTuesday" value="FdisableChekbox" onclick="isMonday('FTuesday', 'FTuesdayFeild', 'FTuesday')">&nbsp;Вторник:</label>
							<fieldset id="FTuesdayFeild" class="FTuesdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="FTuesdayTeacher1" class="form-control" name="FTuesdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayLesson1" class="form-control" name="FTuesdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayRoom1" class="form-control" name="FTuesdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayType1" class="form-control" name="FTuesdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="FTuesdayTeacher2" class="form-control" name="FTuesdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayLesson2" class="form-control" name="FTuesdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayRoom2" class="form-control" name="FTuesdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayType2" class="form-control" name="FTuesdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="FTuesdayTeacher3" class="form-control" name="FTuesdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayLesson3" class="form-control" name="FTuesdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayRoom3" class="form-control" name="FTuesdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayType3" class="form-control" name="FTuesdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="FTuesdayTeacher4" class="form-control" name="FTuesdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayLesson4" class="form-control" name="FTuesdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayRoom4" class="form-control" name="FTuesdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FTuesdayType4" class="form-control" name="FTuesdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="FWednesday" name="FWednesday" value="FdisableChekbox" onclick="isMonday('FWednesday', 'FWednesdayFeild', 'FWednesday')">&nbsp;Среда:</label>
							<fieldset id="FWednesdayFeild" class="FWednesdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="FWednesdayTeacher1" class="form-control" name="FWednesdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayLesson1" class="form-control" name="FWednesdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayRoom1" class="form-control" name="FWednesdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayType1" class="form-control" name="FWednesdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="FWednesdayTeacher2" class="form-control" name="FWednesdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayLesson2" class="form-control" name="FWednesdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayRoom2" class="form-control" name="FWednesdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayType2" class="form-control" name="FWednesdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="FWednesdayTeacher3" class="form-control" name="FWednesdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayLesson3" class="form-control" name="FWednesdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayRoom3" class="form-control" name="FWednesdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayType3" class="form-control" name="FWednesdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="FWednesdayTeacher4" class="form-control" name="FWednesdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayLesson4" class="form-control" name="FWednesdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayRoom4" class="form-control" name="FWednesdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FWednesdayType4" class="form-control" name="FWednesdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
							</div>
							
							
							<div class="TableDay">
								<label><input type="checkbox" id="FThursday" name="FThursday" value="FdisableChekbox" onclick="isMonday('FThursday', 'FThursdayFeild', 'FThursday')">&nbsp;Четверг:</label>
								<fieldset id="FThursdayFeild" class="FThursdayFeild" disabled>
								<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="FThursdayTeacher1" class="form-control" name="FThursdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayLesson1" class="form-control" name="FThursdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayRoom1" class="form-control" name="FThursdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayType1" class="form-control" name="FThursdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="FThursdayTeacher2" class="form-control" name="FThursdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayLesson2" class="form-control" name="FThursdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayRoom2" class="form-control" name="FThursdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayType2" class="form-control" name="FThursdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="FThursdayTeacher3" class="form-control" name="FThursdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayLesson3" class="form-control" name="FThursdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayRoom3" class="form-control" name="FThursdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayType3" class="form-control" name="FThursdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="FThursdayTeacher4" class="form-control" name="FThursdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayLesson4" class="form-control" name="FThursdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayRoom4" class="form-control" name="FThursdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FThursdayType4" class="form-control" name="FThursdayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="FFriday" name="FFriday" value="FdisableChekbox" onclick="isMonday('FFriday', 'FFridayFeild', 'FFriday')">&nbsp;Пятница:</label>
							<fieldset id="FFridayFeild" class="FFridayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="FFridayTeacher1" class="form-control" name="FFridayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayLesson1" class="form-control" name="FFridayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayRoom1" class="form-control" name="FFridayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayType1" class="form-control" name="FFridayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="FFridayTeacher2" class="form-control" name="FFridayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayLesson2" class="form-control" name="FFridayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayRoom2" class="form-control" name="FFridayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayType2" class="form-control" name="FFridayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="FFridayTeacher3" class="form-control" name="FridayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayLesson3" class="form-control" name="FFridayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayRoom3" class="form-control" name="FFridayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayType3" class="form-control" name="FFridayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="FFridayTeacher4" class="form-control" name="FFridayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayLesson4" class="form-control" name="FFridayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayRoom4" class="form-control" name="FFridayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FFridayType4" class="form-control" name="FFridayType4">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
								</tbody>
							</table>
							</fieldset>
						</div>
						
						
						<div class="TableDay">
							<label><input type="checkbox" id="FSaturday" name="FSaturday" value="FdisableChekbox" onclick="isMonday('FSaturday', 'FSaturdayFeild', 'FSaturday')">&nbsp;Суббота:</label>
							<fieldset id="FSaturdayFeild" class="FSaturdayFeild" disabled>
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>Преподаватель</th>
									  <th>Предмет</th>
									  <th>Аудитория</th>
									  <th>Тип</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>
										<select id="FSaturdayTeacher1" class="form-control" name="FSaturdayTeacher1">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayLesson1" class="form-control" name="FSaturdayLesson1">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayRoom1" class="form-control" name="FSaturdayRoom1">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayType1" class="form-control" name="FSaturdayType1">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>
										<select id="FSaturdayTeacher2" class="form-control" name="FSaturdayTeacher2">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayLesson2" class="form-control" name="FSaturdayLesson2">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayRoom2" class="form-control" name="FSaturdayRoom2">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayType2" class="form-control" name="FSaturdayType2">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>3</td>
									  <td>
										<select id="FSaturdayTeacher3" class="form-control" name="FSaturdayTeacher3">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayLesson3" class="form-control" name="FSaturdayLesson3">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayRoom3" class="form-control" name="FSaturdayRoom3">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayType3" class="form-control" name="FSaturdayType3">
										  <option value="none" disabled selected>Тип</option>
										</select>
									  </td>
									  </tr><tr>
									  <td>4</td>
									  <td>
										<select id="FSaturdayTeacher4" class="form-control" name="FSaturdayTeacher4">
										  <option value="none" disabled selected>Преподаватель</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayLesson4" class="form-control" name="FSaturdayLesson4">
										  <option value="none" disabled selected>Предмет</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayRoom4" class="form-control" name="FSaturdayRoom4">
										  <option value="none" disabled selected>Аудитория</option>
										</select>
									  </td>
									  <td>
										<select id="FSaturdayType4" class="form-control" name="FSaturdayType4">
										  <option value="none" disabled selected>Тип</option>
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
	
	<div class="container formBG SendButtonGroup">
		<div class="row SendButtonGroup">
			<div class="col-md-8">
			</div>
			<div class="col-md-4">
				<p>
				  <button type="button" class="btn btn-default">Отправить и вернуться</button>
				  <button type="submit" class="btn btn-primary">Отправить</button>
				</p>
			</div>
		</div>	
	</div>

	</form>

    <?php include "module/script.php"; ?>
  </body>
</html>
