@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
	<div class="">
	  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User Manager<small>Create User</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li> 
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left" id="form-user-create">
	           <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">User Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="user-name" name="user-name" class="form-control col-md-7 col-xs-12 required user_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12 required password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12 required email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="first-name" class="form-control col-md-7 col-xs-12 required first_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="last-name" name="last-name" class="form-control col-md-7 col-xs-12 last_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="1" checked> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="0"> Female
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx has-feedback">
                  <input type="text" class="form-control has-feedback-left dob" id="datepicker" placeholder="yyyy/mm/dd">
                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control is_role" name="role">
                    <option></option>
                    <option value="1">Administrator</option>
                    <option value="2">Employer</option>
                    <option value="3">Jobseeker</option>
                  </select>
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
<script src="/modules/admin/user/js/user_create.js"></script>
@endsection