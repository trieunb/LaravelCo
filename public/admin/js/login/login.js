$(document).ready(function() {
	$('#btn-login').on('click', function() {
		_clearError();
		var data = {
			'user_cd' 		: $('.user_cd').val(),
			'password' 		: $('.password').val(),
		};
		$.ajax({
	        url: '/auth/do-login',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(res) {
	          	if (res.status) {
	          		window.location.href='/dashboard';
	          	} else {
	          		$('.item-error').remove();
	          		var validate = '';
	          		$.each(res.validates, function(item, key) {
	          			if (key !== '') {
	          				validate = key;
	          			}
	          		});
	          		var html = '<p class="text-center item-error">'+validate+'</p>';
	          		$('.login_form').prepend(html);
	          	}
	        },
	        error: function(xhr, statusText, errorThrown) {
	        	toastr.error('Error!');
	        }
	    });
	});
});