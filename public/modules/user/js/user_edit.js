
$(document).ready(function() {
	$('#btn-save').on('click', function() {
		_clearError();
		var data = {
			'user_cd' 		: $('.user_cd').val(),
			'email' 		: $('.email').val(),
			'first_name' 	: $('.first_name').val(),
			'last_name' 	: $('.last_name').val(),
			'gender' 		: $('input[name="gender"]:checked').val(),
			'dob' 			: $('.dob').val(),
			'is_role' 		: $('.is_role').val(),
		};
		$.ajax({
	        url: '/user/edit',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(res) {
	          	toastr.success('Create User Successfull!')
	        },
	        error: function(xhr, statusText, errorThrown) {
	        	var data = JSON.parse(xhr.responseText);
	        	var element = $('#form-user-create');
	        	_validate(element, data.errors);
	        }
	    });
	});
});