@extends('templates.partials.sidebar')

@php
$title = 'Dashboard';
$link = route('dashboard.index');
@endphp

@section('content')
<div class="container d-flex flex-wrap">
    <div class="m-5 shadow bg-primary text-white card d-flex flex-column justify-content-center align-items-center" style="width: 15rem; height: 10rem;">
        <h6>Data Tanah</h6>
        <p>Jumlah : {{$jumlahTanah}}</p>
    </div>
    <div class="m-5 shadow bg-primary text-white card d-flex flex-column justify-content-center align-items-center" style="width: 15rem; height: 10rem;">
        <h6>Arsip</h6>
        <p>Jumlah : {{$jumlahArsip}} </p>
    </div>
    <div class="m-5 shadow bg-primary text-white card d-flex flex-column justify-content-center align-items-center" style="width: 15rem; height: 10rem;">
        <h6>Surat Masuk</h6>
        <p>Jumlah : {{$jumlahSrt}} </p>
    </div>
</div>
<div class="container d-flex flex-column align-items-center">
    <h3 class="fw-bold mb-3">Kelurahan Tampan</h3>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.01792005029!2d101.3558083487336!3d0.46199024339396005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f506a12f7b%3A0x104103d6845f1ed6!2sKec.%20Tampan%2C%20Kota%20Pekanbaru%2C%20Riau!5e0!3m2!1sid!2sid!4v1672332796378!5m2!1sid!2sid" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="border border-dark shadow"></iframe>
    </div>
</div>
@endsection
