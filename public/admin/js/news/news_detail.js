$(document).ready(function() {
	$(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });

    $('#btn-save').on('click', function() {
        clearError();

        var images = [];
        $('.block').each(function() {
            var path = $(this).css('background-image');
                path = getLocation(path.replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, ''));
            images.push(path.pathname)
        });

        var data = {
            'title'       : $('.new_title').val(),
            'price'       : $('.gia').val(),
            'acreage'     : $('.dien_tich').val(),
            'address'     : $('.dia_chi').val(),
            'info'        : $('.thong_tin').val(),
            'ngay_dang'   : $('.ngay_dang').val(),
            'gallery'     : images.toString()
        };
        var form    = new FormData();
        var image   = $('#images')[0].files[0];
        form.append('title', data.title);
        form.append('price', data.price);
        form.append('acreage', data.acreage);
        form.append('address', data.address);
        form.append('info', data.info);
        form.append('ngay_dang', data.ngay_dang);
        form.append('images', image);
        form.append('gallery', data.gallery);
        console.log(form);
        $.ajax({
            url: '/admin/tin-ban-dat/tao-moi',
            type: 'POST',
            dataType: 'json',
            data: form,
            processData: false,
            contentType: false,
            success: function(res) {
                toastr.success('Create User Successfull!')
            },
            // error: function(xhr, statusText, errorThrown) {
            //     var data = JSON.parse(xhr.responseText);
            //     var element = $('#form-user-create');
            //     validate(element, data);
            // }
        });
    });
    $('#images').on('change', function() {readURL(this)});
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#upload-multile').change(function(){

        $(this).simpleUpload("/admin/upload", {

            allowedExts: ["jpg", "jpeg", "jpe", "jif", "jfif", "jfi", "png", "gif"],
            allowedTypes: ["image/pjpeg", "image/jpeg", "image/png", "image/x-png", "image/gif", "image/x-gif"],
            maxFileSize: 5000000, //5MB in bytes

            start: function(file){
                //upload started

                this.block = $('<div class="block"></div>');
                this.progressBar = $('<div class="progressBar"></div>');
                this.cancelButton = $('<div class="cancelButton">x</div>');

                /*
                 * Since "this" differs depending on the function in which it is called,
                 * we need to assign "this" to a local variable to be able to access
                 * this.upload.cancel() inside another function call.
                 */

                var that = this;

                this.cancelButton.click(function(){
                    that.upload.cancel();
                    //now, the cancel callback will be called
                });

                this.block.append(this.progressBar).append(this.cancelButton);
                $('#uploads').append(this.block);

            },

            progress: function(progress){
                //received progress
                this.progressBar.width(progress + "%");
            },

            success: function(data){
                //upload successful

                this.progressBar.remove();
                // this.cancelButton.remove();

                if (data.success) {
                    //now fill the block with the format of the uploaded file
                    var format = data.format;
                    // var formatDiv = $('<div class="format"></div>').text(format);
                    this.block.css({"background-image": 'url(/uploads/images/'+format+')'});
                    // this.block.append(formatDiv);
                } else {
                    //our application returned an error
                    var error = data.error.message;
                    var errorDiv = $('<div class="error"></div>').text(error);
                    this.block.append(errorDiv);
                }

            },

            error: function(error){
                //upload failed
                this.progressBar.remove();
                this.cancelButton.remove();
                var error = error.message;
                var errorDiv = $('<div class="error"></div>').text(error);
                this.block.append(errorDiv);
            },

            cancel: function(){
                //upload cancelled
                this.block.fadeOut(400, function(){
                    $(this).remove();
                });
            }

        });

    });
    var getLocation = function(href) {
        var l = document.createElement("a");
        l.href = href;
        return l;
    };
});