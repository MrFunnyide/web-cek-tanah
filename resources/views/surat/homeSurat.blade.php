@extends('templates.partials.sidebar')

@php
$title = 'Surat Dashboard';
$link = route('dashboardSurat');
@endphp

@section('content')
<div class="container">
    <div class="d-flex justify-content-center suratAjuan my-5">
        <div class="card shadow ajuan me-5" style="width: 16rem;">
            <img src="img/berpenghasilan.svg" class="card-img-top" alt="surat berpenghasilan">
            <div class="card-body d-flex flex-column justify-content-center">
                <p class="text-center fw-bold">Surat Penghasilan</p>
                <a href="{{ route('surat.index') }}" type="button" class="btn btn-primary">Cek</a>
            </div>
        </div>
        <div class="card shadow ajuan me-5" style="width: 16rem;">
            <img src="img/pindahWilayah.svg" class="card-img-top" alt="surat pindah wilayah">
            <div class="card-body d-flex flex-column justify-content-center">
                <p class="text-center fw-bold">Surat Pindah Wilayah</p>
                <a href="{{ route('suratPw.index') }}" type="button" class="btn btn-primary">Cek</a>
            </div>
        </div>
    </div>
</div>
@endsection
