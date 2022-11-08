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
    <title>Sign Up</title>
</head>
<body>
<div class="signup">
        <h1>Sign Up</h1>
        <form action="{{ url('user') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col">
                    <h3>Username</h3>
                </div>
                <div class="col">
                    <input type="text" name="username" class="form-control" placeholder="Write Your Username ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Full Name</h3>
                </div>
                <div class="col">
                    <input type="text" name="fullname" class="form-control" placeholder="Write Your Full Name ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Universitas</h3>
                </div>
                <div class="col">
                    <input type="text" name="universitas" class="form-control" placeholder="Write Your Universitas ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Fakultas</h3>
                </div>
                <div class="col">
                    <input type="text" name="fakultas" class="form-control" placeholder="Write Your Fakultas ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Jurusan</h3>
                </div>
                <div class="col">
                    <input type="text" name="jurusan" class="form-control" placeholder="Write Your Jurusan ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Password</h3>
                </div>
                <div class="col">
                    <input type="password" name="password" class="form-control" placeholder="Write Your Password ...">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <h3>Confirm<br>Password</h3>
                </div>
                <div class="col">
                    <input type="password" name="re-password" class="form-control" placeholder="Confirm Your Password ...">
                </div>
            </div>
            <p href="#">Dengan melakukan pendaftaran, saya setuju dengan Kebijakan Privasi, Peraturan Klien dan Syarat & Ketentuan Sribulancer.</p>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>