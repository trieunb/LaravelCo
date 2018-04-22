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
              <th class="column-title text-center">Title</th>
              <th class="column-title text-center">Giá</th>
              <th class="column-title text-center">Diện Tích</th>
              <th class="column-title text-center">Địa Chỉ</th>
              <th class="column-title text-center">Ngày Đăng</th>
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
              <td class=" "><img src="/uploads/{{$list->images}}" class="img-rounded" alt="Cinque Terre" width="100%"></td>
              <td class=" ">{{$list->ten}}</td>
              <td class=" ">{{$list->gia}}</td>
              <td class=" ">{{$list->dien_tich}}</td>
              <td class=" ">{{$list->dia_chi}}</td>
              <td class="a-right a-right ">{{$list->ngay_dang}}</td>
              <td class=" last"><a href="tin-ban-dat/chinh-sua/{{$list->news_bds_cd}}">View</a>
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