<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/javascript.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('style')
    @yield('head')
    <title>Home</title>
</head>

<nav class="navbar navbar-expand-lg" id="navbarRPL">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">IniJudulnya</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarMenuRPL">
        <div class="navbar-nav">
            <a class="nav-link active" href="#home">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#service">Service</a>
            <a class="nav-link" href="#contact">Contact</a>
            <a href="#"><img src="{{ asset('img/login_icon.png') }}"></a>
        </div>
    </div>
</nav>

<body>
    <div class="containerRPL">
        @yield('content')
    </div>
</body>
</html>