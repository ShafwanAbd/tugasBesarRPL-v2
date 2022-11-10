@extends('layouts.layoutRPL_main')

@section('content')
    <div class="home_main">
        @if(Session::has('success'))
        <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/imgslide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1>Tak Takut Tugas Walau Sibuk</h1>

        <h2 class="title-jurusan">Jurusan Tugas</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Teknik Sipil</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Teknik Elektro</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
            </div>
        </div>

        <h2 class="title-jurusan">Kategori Tugas</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Teknik Sipil</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Teknik Elektro</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Informatika') }}">
                        <div class="q">
                            <img src="./img/profile.png">
                        </div>
                        <h4>Informatika</h4>
                </a>
            </div>
        </div>
    </div>
    
<footer>
    <div class="isi">
        <p>Created by Muhammad Shafwan Abdullah & Zulfan Syahidan Alfarra</p>
    </div>
</footer>
    
@endsection