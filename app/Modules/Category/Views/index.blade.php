@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
<div class="">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Category Manage <small>Category Lists</small></h2>
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
              <th class="column-title text-center" width="150px">Name</th>
              <th class="column-title text-center">Image</th>
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
              <td class=" ">{{$list->name}}</td>
              <td class=" ">{{$list->image}}</td>
              <td class="text-center">{{date('Y/m/d', strtotime($list->created_at))}}</td>
              <td class="text-center last">
                <a href="user/edit/{{$list->user_name}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <a href="javascript:;" class="btn btn-danger btn-xs delete-user" data-delete="{{$list->user_name}}"><i class="fa fa-trash-o"></i> Delete </a>
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
      var user = $(this).data('delete');
      dalert.confirm("Bạn có muốn xóa user này không?","Confirm !",function(result){
          if(result){
            $.ajax({
              url: '/user/delete',
              type: 'POST',
              dataType: 'json',
              data: {user: user},
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