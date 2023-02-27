<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@isset($title) {{ $title }} @endisset</title>
    @vite('resources/css/app.css')

    @yield('links')

  </head>
  <body> 
    @yield('content')

    @yield('js') 
  </body>
</html>
