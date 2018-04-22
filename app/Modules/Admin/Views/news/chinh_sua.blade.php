@extends('layouts.admin')
@section('style')
  <link rel="stylesheet" href="/css/new_detail.css">
  <link rel="stylesheet" href="/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
  <link rel="stylesheet" href="/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Images<span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12 image-preview">
                          <img id="blah" src="/uploads/{{$list['images']}}" alt="your image" style="float: right;">
                          <input type='file' id="images" value="{{$list['images']}}" class="images"/>
                        </div> 
                      </div>
					            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new-title">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="new_title" name="new_title" class="form-control col-md-7 col-xs-12 required new_title" value="{{$list['ten']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Giá<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="price" name="price" class="form-control col-md-7 col-xs-12 required gia" value="{{$list['gia']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dien-tich">Diện tích<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dien_tich" name="dien_tich" class="form-control col-md-7 col-xs-12 required dien_tich" value="{{$list['dien_tich']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dia-chi">Địa chỉ<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dia_chi" name="dia_chi" class="form-control col-md-7 col-xs-12 required dia_chi" value="{{$list['dia_chi']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thong-tin">Thông tin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="resizable_textarea form-control thong_tin" placeholder="">{{$list['thong_tin']}}</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ngay-dang">Ngày đăng<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left ngay_dang" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status" value="{{date('m/d/Y', strtotime($list['ngay_dang']))}}">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                      <div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Gallery</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="uploads">
                            @if (count($list['gallery']) > 0)
                            @foreach($list['gallery'] as $val)
                              <div class="block" style="background-image: url({{$val}});">
                                <div class="cancelButton">x</div>
                              </div>
                            @endforeach
                            @endif
                          </div>
                          <input type="file" name="file" id="upload-multile" multiple>
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
<script src="/admin/js/news/edit_detail.js"></script>
<script src="/admin/vendors/moment/min/moment.min.js"></script>
<script src="/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
@endsection