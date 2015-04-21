function streamGet(){
	deleteStream();
	var faculty_id = $('#faculty option:selected').val();
	if (faculty_id != "none") {
		var url = "http://heabe.besaba.com/student/table/getCourse.php?faculty="+faculty_id;
		$.get(url, function(data) {
			var course = jQuery.parseJSON(data);
			var i = 0;
			while(course[i]){
				$('#course').append("<option class=\"delete_all delete_stream\" value=\"" + course[i].id + "\" id=\"course_id" + course[i].id + "\">" + course[i].entry + "</option>");
				i++;
			}
		});
	};
}

function courseGet(){
	deleteCourse();
	var course_id = $('#course option:selected').val();
	if (course_id != "none") {
		var url = "http://heabe.besaba.com/student/table/getStream.php?course="+course_id;
		$.get(url, function(data) {
			var stream = jQuery.parseJSON(data);
			if(stream[0].entry == null) {
				disabledBlock(stream[0].id);
			}
			else{
				var i = 0;
				while(stream[i]){
					$('#stream').append("<option class=\"delete_all delete_course\" value=\"" + stream[i].id + "\" id=\"stream_id" + stream[i].id + "\">" + stream[i].entry + "</option>");
					i++;
				}
			}
		});
	}
}

function groupGet(){
	var stream_id = $('#stream option:selected').val();
	if (stream_id != "none") {
		var url = "http://heabe.besaba.com/student/table/getGroup.php?stream="+stream_id;
		$.get(url, function(data) {
			var group = jQuery.parseJSON(data);
			if(group[0].entry == null) {
				
			}
			else{
				var i = 0;
				while(group[i]){
					$('#group').append("<option class=\"delete_all delete_group\" value=\"" + group[i].id + "\" id=\"group_id" + group[i].id + "\">" + group[i].entry + "</option>");
					i++;
				}
			}
		});
	}
}

function disabledBlock(idOption){
	$('#stream').attr('disabled',true);
	
	var url = "http://heabe.besaba.com/student/table/getGroup.php?stream="+idOption;
	$.get(url, function(data) {
		var group = jQuery.parseJSON(data);
		var i = 0;
		while(group[i]){
			$("#group").append("<option class=\"delete_all delete_group\" value=\"" + group[i].id + "\" id=\"course_id" + group[i].id + "\">" + group[i].entry + "</option>");
			i++;
		}
	});
}

function deleteAll(){
	$( ".delete_all" ).remove();
	$('#stream').attr('disabled',false);
}

function deleteStream(){
	$( ".delete_course" ).remove();
}

function deleteCourse(){
	$( ".delete_group" ).remove();
}

function isMonday(cheked, feild, day) {
	var checkbox_day = document.getElementById(cheked).checked;

	if (checkbox_day){
		document.getElementById(feild).disabled = false;
		getTeacherRoomType(day);
	}
	else{
		$('.delete'+day).remove();
		document.getElementById(feild).disabled = true;
	}
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

function getTeacherRoomType(day){
	$.get("http://heabe.besaba.com/student/table/getTeacher.php", function(data) {
		var Teacher = jQuery.parseJSON(data);
		for (j=1; j < 5; j++){
			var i = 0;
			while(Teacher[i]){
				var id_data = Teacher[i].id.replace(/\s+/g, '');
				$("#" + day + "Teacher" + j).append("<option class=\"delete"+day+"\" value=\"" + id_data + "\" id=\"" + j + day + "teacher_id" + id_data + "\">" + Teacher[i].person + "</option>");
				i++;
			}
		}
	});
	
	$.get("http://heabe.besaba.com/student/table/getAudience.php", function(data) {
		var room = jQuery.parseJSON(data);
		for (j=1; j < 5; j++){
			var i = 0;
			while(room[i]){
				var id_data = room[i].id.replace(/\s+/g, '');
				$("#" + day + "Room" + j).append("<option class=\"delete"+day+"\" value=\"" + id_data + "\" id=\"" + j + day + "room_id" + id_data + "\">" + room[i].room + "</option>");
				i++;
			}
		}
	});
	
	$.get("http://heabe.besaba.com/student/table/getSubject.php", function(data) {
		var subject = jQuery.parseJSON(data);
		for (j=1; j < 5; j++){
			var i = 0;
			while(subject[i]){
				var id_data = subject[i].id.replace(/\s+/g, '');
				$("#" + day + "Lesson" + j).append("<option class=\"delete"+day+"\" value=\"" + id_data + "\" id=\"" + j + day + "subject_id" + id_data + "\">" + subject[i].lesson + "</option>");
				i++;
			}
		}
	});
	
	$.get("http://heabe.besaba.com/student/table/getType_lesson.php", function(data) {
		var type_lesson = jQuery.parseJSON(data);
		for (j=1; j < 5; j++){
			var i = 0;
			while(type_lesson[i]){
				var id_data = type_lesson[i].id.replace(/\s+/g, '');
				$("#" + day + "Type" + j).append("<option class=\"delete"+day+"\" value=\"" + id_data + "\" id=\"" + j + day + "type_lesson_id" + id_data + "\">" + type_lesson[i].type_lesson + "</option>");
				i++;
			}
		}
	});
}

$(document).ready(function () {
	var editParam = false;
	
	$('#faculty').change(function() {
		if(editParam) deleteAll();
		streamGet();
		editParam = true;
	});
	
	$('#course').change(function() {
		courseGet();
	});
	
	$('#stream').change(function() {
		groupGet();
	});
	
});
