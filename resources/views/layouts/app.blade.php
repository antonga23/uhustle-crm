
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rubik:300,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      #content-wrapper{
        min-height: auto !important"
      }
      .content-wrapper, .main-footer, .main-header {
          transition: margin-left 0.3s ease-in-out;
          margin-left: 54px !important;
          z-index: 1000  !important;
          margin-right: 352px;
      }
      .main-sidebar {
        z-index: 1000;
      }
      #app {
          background-color: #ffffff;
          font-family: Montserrat !important;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini" style="    overflow-y: hidden;">
<div class="wrapper" id ="app">
  <vue-progress-bar></vue-progress-bar>
  <!-- Navbar -->
  <top-navigation active="{{ $active }}" logged_user="{{ json_encode(Auth::user()) }}"></top-navigation>
  <!-- /.navbar -->

  <left-nav active="{{ $active }}" logged_user="{{ json_encode(Auth::user()) }}"></left-nav>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-0" id="content-wrapper" >
    <!-- Main content -->
    <div class="content px-0">
      <div class="container-fluid px-0">
        @yield('content')
        <avatar-upload auth_user="{{ Auth::user() }}"></avatar-uploadr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <right-sidebar active="{{ $active }}" auth_user="{{ Auth::user() }}"></right-sidebar>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer"></footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- <script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/releases/1.4.35/twilio.min.js"></script> -->
    <!-- <script src="{{ asset('js/quickstart.js') }}"></script> -->
    <script>
    window.onload = function() {
      var context = new AudioContext();
      // Setup all nodes
    }
    </script>
</body>
</html>
