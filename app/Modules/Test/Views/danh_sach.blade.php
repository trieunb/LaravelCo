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
              <th class="column-title text-center" width="150px">Hình Ảnh</th>
              <th class="column-title text-center">Item Int</th>
              <th class="column-title text-center">Varchar</th>
              <th class="column-title text-center">Text</th>
              <th class="column-title text-center">Date</th>
              <th class="column-title text-center no-link last"><span class="nobr">Action</span>
              </th>
              <th class="bulk-actions" colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>

          <tbody>
            @foreach($lists as $list)
            <tr class="even pointer">
              <td class=" "><img src="/uploads/{{$list->item_image}}" class="img-rounded" alt="Cinque Terre" width="100%"></td>
              <td class="text-right">{{$list->item_int}}</td>
              <td class=" ">{{$list->item_varchar}}</td>
              <td class=" ">{!!$list->item_text!!}</td>
              <td class="text-center">{{$list->item_date}}</td>
              <td class="last"><a href="test/edit/{{$list->id}}">View</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $lists->links() }}
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