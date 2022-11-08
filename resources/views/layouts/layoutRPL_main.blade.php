<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
    @yield('style')
    @yield('head')
    <title>Home</title>
</head>

<nav class="navbar navbar-expand-lg" id="navbarRPL">
    <div class="container-fluid">
        <a class="navbar-brand hover-shadow" href="{{ url('home') }}">IniJudulnya</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarMenuRPL">
        <div class="navbar-nav">
            <a class="nav-link active hover-shadow" href="{{ url('home_main') }}">Home</a>
            <a class="nav-link hover-shadow dropdown" href="{{ url('home_main') }}">Tugas</a>
            <a class="nav-link hover-shadow" href="{{ url('home_main') }}">Profile</a>
            <a class="hover-shadow" href="{{ url('login') }}"><img src="{{ asset('img/login_icon.png') }}"></a>
        </div>
    </div>
</nav>

<body>
    <div class="containerRPL">
        @yield('content')
    </div>
</body>
</html>