<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/Ambition.png')}}" type="image/x-icon">

    <!-- Styles -->
    <!-- Fonts -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/pages/authentication.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
</head>

<body>
    <script src="{{asset('asset/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('asset/js/core/app.js')}}"></script>
    @yield('content')
    @yield('pagescript')
</body>

</html>