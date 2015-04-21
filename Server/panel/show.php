<?php
$page_name = "show.php";
$page_title = "Show a new schedule";
$name_function = "Показать расписание";
include 'module/check.php';

include('db_function.php');

$connection = db_connect();
$result_bds = $connection->query("SELECT schedule.id, lesson, number_group, potok_number, kurs_number, name_facult, room, person, type_lesson, day FROM schedule
																					LEFT JOIN audience ON schedule.audience_id = audience.id
																					LEFT JOIN subject ON schedule.subject_id = subject.id
																					LEFT JOIN teacher ON schedule.audience_id = teacher.id
																					LEFT JOIN uniqGroup ON schedule.ResultGroup_id = uniqGroup.id
																					LEFT JOIN stream ON uniqGroup.stream_id = stream.id
																					LEFT JOIN course ON stream.course_id = course.id
																					LEFT JOIN faculty ON course.faculty_id = faculty.id
																					LEFT JOIN type_lesson ON schedule.audience_id = type_lesson.id
																					LEFT JOIN ResultDay ON schedule.ResultDay_id = ResultDay.id
																					LEFT JOIN uniqDay ON ResultDay.day_id = uniqDay.id");
$mas_result = db_result_to_array($result_bds);
//~ var_dump($mas_result);
//~ foreach($mas_result as &$item){
	//~ echo $item['ResultDay_id'];
	//~ $query_day = "SELECT day FROM ResultDay INNER JOIN uniqDay ON ResultDay.day_id = uniqDay.id WHERE day_id.id = ".$item['ResultDay_id'];
	//~ $value_day = $connection->query($query_day);
	//~ $value_day = db_result_to_array($value_day);
	//~ $item['day'] = $value_day[0][0];
	//~ echo $item['day'];
	//~ echo $value_day[0][0];
//~ }

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
					<div class="col-md-4">
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
					<div class="col-md-1">
							<button type="button" class="btn btn-default">Найти</button>
					</div>
				</div>	
			</div>
			
		<div class="container formBG SendButtonGroup">
			<div class="row">
				<div class="panel-heading">Расписание</div>
				<div class="table-responsive">
				  <table class="table">
					<thead>
						<tr>
						  <th>ID</th>
						  <th>Факультет</th>
						  <th>Курс</th>
						  <th>Поток</th>
						  <th>Группа</th>
						  <th>Преподаватель</th>
						  <th>Предмет</th>
						  <th>Аудитория</th>
						  <th>Тип</th>
						  <th>День</th>
						  <th>Действия</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($mas_result as $item): ?>
						<tr>
							<td><? echo $item['id']; ?></td>
							<td><? echo $item['name_facult']; ?></td>
							<td><? echo $item['kurs_number']; ?></td>
							<td><? echo $item['potok_number']; ?></td>
							<td><? echo $item['number_group']; ?></td>
							<td><? echo $item['person']; ?></td>
							<td><? echo $item['lesson']; ?></td>
							<td><? echo $item['room']; ?></td>
							<td><? echo $item['type_lesson']; ?></td>
							<td><? echo $item['day']; ?></td>
							<td><? echo "<a>изменить</a>" ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				  </table>
				</div>
			</div>	
		</div>
	</form>

    <?php include "module/script.php"; ?>
  </body>
</html>
