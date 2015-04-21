$(document).ready(function () {
	$.get("http://heabe.besaba.com/student/table/getFaculty.php", function(data) {
		var faculty = jQuery.parseJSON(data);
		var i = 0;
		while(faculty[i]){
			var id_data = faculty[i].id.replace(/\s+/g, '');
			$('#faculty').append("<option value=\"" + id_data + "\" id=\"faculty_id" + id_data + "\">" + faculty[i].entry + "</option>");
			i++;
		}
	});
});
