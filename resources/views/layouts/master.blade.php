<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <charset ="utf-8">
        <title>App Name - @yield('title')</title>
        <!-- Bootstrap link !-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
    <body>
     @include('./partials/header')
     <div class="container col">
            @yield('content')
     </div>
    </body>
</html>
