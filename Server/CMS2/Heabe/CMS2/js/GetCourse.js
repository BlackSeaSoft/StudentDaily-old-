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
