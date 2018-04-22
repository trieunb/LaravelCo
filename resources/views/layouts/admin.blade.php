<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev!</title>

    <!-- Bootstrap -->
    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"> -->
    <!-- <link rel="stylesheet" href="/admin/vendors/bootstrap-daterangepicker/daterangepicker.css"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
    <link href="/admin/css/admin.css" rel="stylesheet">
    <link href="/css/toastr.min.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    @yield('style')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- Sidebar -->
        @includeIf('partials.sidebar')
        <!-- top navigation -->
        @includeIf('partials.top_navigation')
        <!-- /top navigation -->
        <!-- page content -->
        @yield('content')
        <!-- /page content -->
        <!-- footer content -->
        @includeIf('partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap -->
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/admin/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/moment/min/moment.min.js"></script>
    <!-- <script src="/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
    <!-- <script src="/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->
    <!-- Custom Theme Scripts -->
    <script src="/admin/build/js/custom.min.js"></script>
    <script src="/admin/js/simpleUpload.min.js"></script>
    <script src="/js/toastr.min.js"></script>
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="/js/common.js"></script>
    @yield('script')
  </body>
</html>