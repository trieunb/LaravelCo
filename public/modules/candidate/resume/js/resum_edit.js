
$(document).ready(function() {
	// Check gender
	var checked = $('#gender').data('check');
	$('input[name="gender"][value="'+checked+'"]').prop('checked',true);
	if (checked) {
		$('.label-male').addClass('active');
	} else {
		$('.label-female').addClass('active');
	}
	// Selected combobox role
	var selected = $('.is_role').data('select');
	$('.is_role option[value="'+selected+'"]').prop('selected',true);

	$('#btn-save').on('click', function() {
		_clearError();
		var data = {
			'user_name' 	: $('.user_name').val(),
			'email' 		: $('.email').val(),
			'first_name' 	: $('.first_name').val(),
			'last_name' 	: $('.last_name').val(),
			'gender' 		: $('input[name="gender"]:checked').val(),
			'dob' 			: $('.dob').val(),
			'is_role' 		: $('.is_role').val(),
		};
		$.ajax({
	        url: '/admin/user/edit',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(res) {
	          	toastr.success('Edit User Successfull!')
	        },
	        error: function(xhr, statusText, errorThrown) {
	        	var data = JSON.parse(xhr.responseText);
	        	var element = $('#form-user-create');
	        	_validate(element, data.errors);
	        }
	    });
	});
});