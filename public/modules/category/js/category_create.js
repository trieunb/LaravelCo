
$(document).ready(function() {
	$('#btn-save').on('click', function() {
		_clearError();
		console.log($('#filename >img').attr('src'));
		var data = {
			'name' 				: $('.category_name').val(),
			'image' 			: $('#filename >img').attr('src'),
		}
		$.ajax({
	        url: '/category/create',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(res) {
	          	toastr.success('Create User Successfull!')
	        },
	        error: function(xhr, statusText, errorThrown) {
	        	toastr.errors('Errors!')
	        	var data = JSON.parse(xhr.responseText);
	        	console.log(data)
	        	var element = $('#form-user-create');
	        	_validate(element, data.errors);
	        }
	    });
	});
});