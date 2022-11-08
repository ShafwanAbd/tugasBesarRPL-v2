@extends('layouts.layoutRPL_main')

@section('content')
    <div class="profile">
        <div class="left-side">
            <img src="{{ asset('./img/profile.png') }}">
            <h4>{{ $model->username }}</h4>
        </div>
        <div class="middle-side">
            <h1>{{ $model->fullname }}</h1>
            <h3>{{ $model->universitas }}</h3>
            <h4>{{ $model->fakultas }}</h4>
            <h4>{{ $model->jurusan }}</h4>
        </div>
        <div class="right-side">
            <btn class="btn">Tugas Saya</btn>
            <btn class="btn">Edit Profile</btn>
        </div>
    </div>
@endsection