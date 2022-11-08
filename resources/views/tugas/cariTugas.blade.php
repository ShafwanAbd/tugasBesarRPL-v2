@extends('layouts.layoutRPL_main_navbarnohidden')

@section('content')
    <div class="cariTugas">
        <div class="row">
            <div class="col q">
                <div class="left-side">
                    <a href="#"><h1 class="item hover-shadow">Fakultas</h1></a>
                    <a href="#"><h2 class="item hover-shadow">Jurusan</h2></a>
                    <a href="#"><h4 class="item hover-shadow">Nama Jurusan</h4></a>
                    <a href="#"><h4 class="item hover-shadow">Nama Jurusan</h4></a>
                    <a href="#"><h4 class="item hover-shadow">Nama Jurusan</h4></a>
                    <a href="#"><h4 class="item hover-shadow">Nama Jurusan</h4></a>
                    <a href="#"><h4 class="item hover-shadow">Nama Jurusan</h4></a>
                </div>
            </div>
            <div class="col w">
                <div class="right-side">
                <h1 class="judul">Cari Tugas</h1>

                @foreach($datas as $key=>$value)
                <a href="{{ url('tugas/'.$value->id) }}">
                    <div class="item hover-zoom">
                        <img src="./img/img1.png">
                        <div class="isi">
                            <div class="item-judul">
                                <h2>{{ $value->jurusan }}</h2>
                                <h3 class="right">{{ $value->kategori }}</h3>
                            </div>
                            <div class="item-isi">
                                <p>{{ $value->deskripsi }}</p>
                                <div class="item-info">
                                    <h4>Deadline: {{ $value->deadline }}</h4>
                                    <h4 class="right">Harga: {{ $value->harga }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection