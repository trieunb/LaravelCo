@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
<div class="">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Table design <small>Custom design</small></h2>
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
              <th class="column-title text-center">Birth Day</th>
              <th class="column-title text-center">Gender</th>
              <th class="column-title text-center no-link last"><span class="nobr">Action</span>
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
              <td class=" ">{{$list->user_cd}}</td>
              <td class=" ">{{$list->email}}</td>
              <td class=" ">{{$list->dob}}</td>
              <td class=" ">{{$list->gender}}</td>
              <td class=" last"><a href="user/edit/{{$list->user_cd}}">View</a>
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
@endsection