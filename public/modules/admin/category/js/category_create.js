
$(document).ready(function() {
	$('#btn-save').on('click', function() {
		_clearError();
		var image	=	'';
		if ($('#filename >img').length > 0) {
			image = $('#filename >img').attr('src');
		}
		var data = {
			'name' 				: $('.name').val(),
			'description' 		: $('.description').val(),
			'image' 			: image,
		}
		$.ajax({
	        url: '/admin/category/create',
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
	//upload image
	$('#category-image').change(function(){
        $(this).simpleUpload("/common/upload", {
            start: function(file){
            	// this.cancelButton = $('<div class="cancelButton">x</div>');
            	//upload started
           	 	var img = '<img src="/uploads/images/'+file.name+'" alt="">'
            	$('#filename').html(img);
          	},

          success: function(data){
            //upload successful
            $('#progress').html("Success!<br>Data: " + JSON.stringify(data));
          },

          error: function(error){
            //upload failed
            $('#progress').html("Failure!<br>" + error.name + ": " + error.message);
          }

        });
    });
});