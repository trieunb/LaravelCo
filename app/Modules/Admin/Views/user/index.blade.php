@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
<div class="">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>User Manage <small>User Lists</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="table-responsive">
        <table class="table table-bordered table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title text-center" width="150px">User Name</th>
              <th class="column-title text-center">Email</th>
              <th class="column-title text-center">Full Name</th>
              <th class="column-title text-center">Role</th>
              <th class="column-title text-center" width="10%">BirthDay</th>
              <th class="column-title text-center" width="10%">Gender</th>
              <th class="column-title text-center" width="10%">Ngày Tạo</th>
              <th class="column-title text-center no-link last" width="15%"><span class="nobr">Action</span>
              </th>
              <th class="bulk-actions" colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>

          <tbody>
            @if (isset($lists))
            @foreach($lists as $list)
            <tr class="even pointer">
              <td class=" ">{{$list->user_name}}</td>
              <td class=" ">{{$list->email}}</td>
              <td class=" ">{{$list->first_name ." ". $list->last_name}}</td>
              <td class=" ">{{getNameRole($list->is_role)}}</td>
              <td class="text-center">{{date('Y/m/d', strtotime($list->dob))}}</td>
              <td class=" ">@if($list->gender == '1') Male @else Female @endif</td>
              <td class="text-center">{{date('Y/m/d', strtotime($list->created_at))}}</td>
              <td class="text-center last">
                <a href="/admin/user/edit/{{$list->ID}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <!-- <button id="delete-user">Delete</button> -->
                <a href="javascript:;" class="btn btn-danger btn-xs delete-user" data-delete="{{$list->ID}}"><i class="fa fa-trash-o"></i> Delete </a>
              </td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
        @if (isset($lists))
        {{ $lists->links()}}
        @endif
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="/admin/js/news/news_detail.js"></script>
<script>
    $(".delete-user").click(function() {
      var id = $(this).data('delete');
      dalert.confirm("Bạn có muốn xóa user này không?","Confirm !",function(result){
          if(result){
            $.ajax({
              url: '/admin/user/delete',
              type: 'POST',
              dataType: 'json',
              data: {id: id},
              success: function(res) {
                toastr.success('User Deleted Successfull!');
                location.reload();
              },
              error: function(xhr, statusText, errorThrown) {
                toastr.error('User Deleted Error!');
              }
          });
          }
      });
    });
</script>
@endsection