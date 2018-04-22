  $( "#datepicker" ).datepicker({
    dateFormat:'yy/mm/dd'
  });
  //config message toastr
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  //validate itme
  function _validate(element, data) {
    var html = '';
    $.each(data, function(item, key) {
      $('.'+item).addClass('item-error');
      html = '<span class="item-error">'+key[0]+'</span>';
      $('.'+item).after(html);
    });
  }
  //clear validate item
  function _clearError() {
    $('input').removeClass('item-error');
    $('span.item-error').remove();
  }
