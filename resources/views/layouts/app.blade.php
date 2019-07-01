
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .content-wrapper, .main-footer, .main-header {
          transition: margin-left 0.3s ease-in-out;
          margin-left: 54px !important;
          z-index: 3000;
          margin-right: 352px;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id ="app">

  <!-- Navbar -->
  <top-navigation active="{{ $active }}"></top-navigation>
  <!-- /.navbar -->

  <left-nav active="{{ $active }}"></left-nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding: 0 40px 15px 30px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <right-sidebar></right-sidebar>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer"></footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
