$(document).ready(function() {
    tinymce.init({
        height : "300",
        selector:'textarea.item_text',
        plugins : 'advlist autolink link image lists charmap print preview',
        images_upload_url: '/common/upload-tinymce',
        images_upload_base_path: '/tinymce/images',
        images_upload_credentials: true
    });
});