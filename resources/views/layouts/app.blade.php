<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
  </head>

  <body>
      @yield('content')
  </body>

</html>