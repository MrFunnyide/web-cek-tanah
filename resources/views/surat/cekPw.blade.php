@extends('templates.partials.sidebar')

@php
$title = 'Cek Surat Pindah Wilayah';
$link = route('suratPw.index');
@endphp

@section('content')
<div class="container mt-5">
    <div>
        <h1 class="fs-5 fw-bold">Data Pemohon</h1>
        <hr>
        <p><strong>Nama : </strong>{{ $detailData->pemohon->name }}</p>
        <p><strong>Pekerjaan : </strong> {{$detailData->pemohon->pekerjaan}}</p>
        <p><strong>Alamat : </strong> {{$detailData->pemohon->alamat}}</p>
        <p><strong>No Telp : </strong> {{$detailData->pemohon->no_telp}}</p>
        <p><strong>Jenis Kelamin : </strong> {{$detailData->pemohon->jenis_kelamin}}</p>
        <hr>
        <h1 class="fs-5 fw-bold">Berkas Pemohon</h1>
        <hr>
        <p><strong>Surat Pengantar (Rt/Rw) : </strong><a href="{{ asset('storage/'.$detailData->srt_pengantar ) }}">Open</a></p>
        <p><strong>Foto Copy Surat Dasar Tanah : </strong><a href="{{ asset('storage/'.$detailData->srt_dasar_tanah ) }}">Open</a></p>
        <p><strong>Foto Copy KTP Pemohon : </strong><a href="{{ asset('storage/'.$detailData->fc_ktp ) }}">Open</a></p>
        <p><strong>Status : </strong> {{ $detailData->status }}</p>
        <br>
        <a href="{{ route('suratPw.index') }}" class="btn btn-primary mb-5">Back</a>
    </div>
</div>
@endsection
