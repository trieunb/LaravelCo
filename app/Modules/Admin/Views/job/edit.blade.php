@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
	<div class="">
	  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Category Manage<small>Edit Category</small></h2>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="filename">
                    @if(!empty($list['image']))
                      <img src="{{ $list['image'] }}" alt="">
                    @else
                      <img src="/uploads/images/icon_default.png" alt="">
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Icon</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="file" id="category-image" class="image">
                </div>
              </div>
	            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="name" class="form-control col-md-7 col-xs-12 required name" value="{{ $list['name'] }}">
                  <input type="text" name="cat_id" class="hidden cat_id" value="{{ $list['id'] }}">
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
<script src="/modules/admin/category/js/category_edit.js"></script>
@endsection