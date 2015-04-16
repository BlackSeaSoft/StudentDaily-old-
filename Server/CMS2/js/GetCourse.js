$(document).ready(function () {
	$("#faculty").change(function() {
		var faculty_id = $('#faculty');
		if (faculty_id.value != "none") {
			$.get("http://heabe.besaba.com/student/table/getCourse.php?faculty=" + faculty_id.value, function(data) {
				var course = jQuery.parseJSON(data);
				var i = 0;
				while(course[i]){
					$('#course').append("<option value=\"course_value" + course[i].id + "\" id=\"course_id" + course[i].id + "\">" + course[i].entry + "</option>");
					i++;
				}
			}, "json");
		};
	});
});
