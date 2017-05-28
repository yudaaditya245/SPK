<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">

    <style media="screen">
      body {
        background-color: #f2f2f2;
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>
      </div>
    </nav>
      @yield('body')
  </body>
</html>
