<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CESC#9 Backend</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('assets/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets/backend/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/adminlte/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/backend/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @yield('header')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>

  <body class="skin-blue layout-top-nav">

    <div class="wrapper">

      @include('backend.nav')

      <div class="content-wrapper">
        @if(isset($page_title))
        <section class="content-header">
          <h1>{{ $page_title or "" }} <small>{{ $page_subtitle or "" }}</small></h1>
          @yield('breadcrumbs')
        </section>
        @endif

        <section class="content">
          @yield('content')
        </section>
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs"><span class="text-muted">Product of <a href="https://mrnonz.com" target="_blank" style="border-bottom:dotted 1px #d0d6e2;">MrNonz</a> @KMITL</span></div>
        <strong><a href="https://mrnonz.com" target="_blank">CESC#9</a></strong> Backend System
      </footer>

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/backend/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backend/adminlte/js/app.min.js') }}" type="text/javascript"></script>
    @yield('footer')
  </body>
</html>
