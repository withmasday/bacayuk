<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('img/icons.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('/font/bootstrap-icons.css') }}">
    @yield('import_css')
    <title>Bacayuk | @yield('title')</title>
  </head>
  <body>
    @yield('css')
    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    @yield('import_js')
    @yield('javascript')
  </body>
</html>
