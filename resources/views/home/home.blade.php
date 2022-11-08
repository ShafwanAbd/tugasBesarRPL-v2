@extends('layouts.layoutRPL')

@section('content')
<div class="menu-opening" id="home">
            <h3>Kesulitan Mengerjakan Tugas?<br>Tidak Ada Waktu?</h3>
            <img src="./img/img1.png">
            <div class="menu-opening-button" href="#">
                <a href="#">Login Sekarang</a>
            </div>
        </div>

        <div class="menu-benefit" id="about">
            <h3>Kami Punya Solusinya!<br>Serahkan Saja Tugas Anda Pada Kami</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4 d-flex">
                <div class="col">
                    <img src="./img/login_icon.png" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Harga Murah</h5>
                    </div>
                </div>
                <div class="col">
                    <img src="./img/login_icon.png" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Penjoki Handal</h5>
                    </div>
                </div>
                <div class="col">
                    <img src="./img/login_icon.png" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi Aman</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-order" id="service">
            <h3>Kami Punya Solusinya!<br>Serahkan Saja Tugas Anda Pada Kami</h3>
        </div>
        
        <div class="menu-order" id="contact">
            <h3>Kami Punya Solusinya!<br>Serahkan Saja Tugas Anda Pada Kami</h3>
        </div>

        <footer class="menu-closing">
            <p>Created by Muhammad Shafwan Abdullah<br>and Zulfan Syahidan Alfarra</p>
        </footer>
@endsection