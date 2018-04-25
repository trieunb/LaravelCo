@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
	<div class="">
	  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Category Manage<small>Create Category</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li> 
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left" id="form-category-create">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-name">Icon
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="filename" style="margin-bottom: 5px;"></div>
                  <input type="file" name="file" id="category-image">
                </div>
              </div>
	            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-name">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="category-name" name="category-name" class="form-control col-md-7 col-xs-12 required category_name">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-success" id="btn-save">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
@endsection
@section('script')
<script src="/modules/category/js/category_create.js"></script>
<script>
  $('#category-image').change(function(){
        $(this).simpleUpload("/common/upload", {
            start: function(file){
            //upload started
            var img = '<img src="/uploads/'+file.name+'" alt="">'
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
</script>
@endsection