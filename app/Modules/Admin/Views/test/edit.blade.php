@extends('layouts.admin')
@section('style')
  <link rel="stylesheet" href="/modules/test/css/test_create.css">
@endsection
@section('content')
  	<div class="right_col" role="main">
	  	<div class="">
			<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>News Manager<small>Create New</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li> 
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form enctype="multipart/form-data" class="form-horizontal form-label-left" id="form-new-create">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Images<span class="required">*</span>
                  </label>
                  <div class="input-group col-md-6 col-sm-6 col-xs-12 image-preview">
                    <img id="blah" src="/uploads/images/{{ $list['item_image'] }}" alt="your image" style="float: right;">
                    <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Upload
                    </label>
                    <input type='file' id="item_image" class="item_image"/>
                  </div> 
                </div>
                <div class="form-group">
                  <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="uploads">
                    @if (count($list['item_gallery']) > 0)
                        @foreach($list['item_gallery'] as $val)
                          <div class="block" style="background-image: url({{$val}});">
                            <div class="cancelButton">x</div>
                          </div>
                        @endforeach
                    @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Gallery</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="file-upload" class="custom-file-upload">
                      <i class="fa fa-cloud-upload"></i> Upload
                    </label>
                    <input type="file" name="file" id="upload-multile" multiple>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="int">Item Int<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="item_int" name="item_int" class="form-control col-md-7 col-xs-12 required item_int" value="{{ $list['item_int'] }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="varchar">Item Varchar<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="resizable_textarea form-control item_varchar" placeholder="">{{ $list['item_varchar'] }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text">Item Text<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="resizable_textarea form-control item_text" placeholder="">{{ $list['item_text'] }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Item Date<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left item_date" id="datepicker" placeholder="mm/dd/yyyy" value="{{date('d/m/Y', strtotime($list['item_date']))}}">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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
<script src="/modules/admin/test/js/test_edit.js"></script>
@endsection