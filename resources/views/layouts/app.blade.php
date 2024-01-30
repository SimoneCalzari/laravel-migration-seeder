<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- MY STYLE AND BOOSTRAP -->
    @vite('resources/js/app.js')
    <!-- /MY STYLE AND BOOSTRAP -->
</head>

<body>
    @include('shared.header')
    <!-- MAIN -->
    @yield('main')
    <!-- /MAIN -->
</body>

</html>
