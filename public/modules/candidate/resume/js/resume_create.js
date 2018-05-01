
$(document).ready(function() {
	$('#btn-save').on('click', function() {
		_clearError();
		var data = {
			'job_name' 			: $('.job_name').val(),
			'job_email' 		: $('.job_email').val(),
			'job_professional' 	: $('.job_professional').val(),
			'job_about' 		: $('.job_about').val(),
			'category_id' 		: $('.category_id').val(),
			'job_about' 		: $('.job_about').val(),
		};
		$.ajax({
	        url: '/candidate/resume/create',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(res) {
	          	toastr.success('Create User Successfull!')
	        },
	        error: function(xhr, statusText, errorThrown) {
	        	toastr.error('Errors!')
	        	var data = JSON.parse(xhr.responseText);
	        	var element = $('#form-user-create');
	        	_validate(element, data.errors);
	        }
	    });
	});
});