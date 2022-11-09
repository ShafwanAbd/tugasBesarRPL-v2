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
    <title>Log In</title>
</head>
<body>
<div class="login">
        <h1>Log In</h1>
        <form method="POST" action="{{ url('logIn') }}">
            @csrf
                    @foreach($errors->get('username') as $msg)
                        <p class="text-danger error">{{ $msg }}</p>
                    @endforeach
            <div class="row g-3">
                <div class="col">
                    <h3>Username</h3>
                </div>
                <div class="col">
                    <input type="text" name="username" class="form-control" placeholder="Write Your Username ...">
                </div>
            </div>
                    @foreach($errors->get('password') as $msg)
                        <p class="text-danger error">{{ $msg }}</p>
                    @endforeach
            <div class="row g-3">
                <div class="col">
                    <h3>Password</h3>
                </div>
                <div class="col">
                    <input type="password" name="password" class="form-control" placeholder="Write Your Password ...">
                </div>
            </div>
            <a href="{{ 'signUp' }}">Create an Account</a>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>