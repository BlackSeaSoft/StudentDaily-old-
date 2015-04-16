$(document).ready(function () {
	$.get("http://heabe.besaba.com/student/table/getFaculty.php", function(data) {
		var faculty = jQuery.parseJSON(data);
		var i = 0;
		while(faculty[i]){
			$('#faculty').append("<option value=\"faculty_value" + faculty[i].id + "\" id=\"faculty_id" + faculty[i].id + "\">" + faculty[i].entry + "</option>");
			i++;
		}
	}, "json");
});
