@extends('lurah.tmplate.partial.sidebar')

@php
$title = 'Data Tanah';
$link = route('dataTanahLurah.pemilik');
@endphp

@section('content')
<div class="container d-flex mt-5">
    <div class="row input-group d-flex justify-content-around">
        <div class="col-lg-6">
            <form action="{{ route('dataTanah.pemilik') }}" method="get">
                <div class="d-flex">
                    <input style="background: #0478c5;" class="form-control text-white" id="search" type="search"
                    name="search" placeholder="Search">
                    <button class="btn position-relative" style="right: 10%"><i
                        class="bi bi-search text-white"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    {{-- alert --}}
    @include('templates.partials.alert')
    {{-- table --}}
    <div class="container mt-4">
        <table class="table table-striped table-bordered shadow">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">No SHM</th>
                    <th scope="col">Nama Pemilik</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilik as $pemilikTanah)
                <tr class="text-center align-middle">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        @foreach ($pemilikTanah->tanah as $dataTanah)
                        {{ $dataTanah->SHM }},
                        @endforeach
                    </td>
                    <td>{{ $pemilikTanah->name }}</td>
                    <td class="d-flex justify-content-center">
                        {{-- button info modal --}}
                        <button class="btn btn-secondary me-4" data-bs-toggle="modal"
                        data-bs-target="#ModalDetail{{ $pemilikTanah->id }}""><i class="bi bi-info-circle"></i></button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Modal Detail --}}
    @foreach ($pemilik as $pemilikTanah)
    <div class="modal fade" id="ModalDetail{{ $pemilikTanah->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fw-bold fs-5" id="staticBackdropLabel">Detail Tanah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <h1 class="fs-5 fw-bold">Data Pemilik Tanah</h1>
                        <hr>
                        <p><strong>Nama : </strong> {{$pemilikTanah->name}}</p>
                        <p><strong>Pekerjaan : </strong> {{$pemilikTanah->pekerjaan}}</p>
                        <p><strong>Umur : </strong> {{$pemilikTanah->umur}}</p>
                        <p><strong>Agama : </strong> {{$pemilikTanah->agama}}</p>
                        <p><strong>Alamat : </strong> {{$pemilikTanah->alamat}}</p>
                    </div>
                    <hr>
                    @foreach ($pemilikTanah->tanah as $dataTanah)
                        <div>
                        <h1 class="fs-5 fw-bold">Data Tanah</h1>
                        <hr>
                        <p><strong>NO Sertifikat Hak Milik : </strong> {{$dataTanah->SHM}}</p>
                        <p><strong>Luas Tanah : </strong> {{$dataTanah->luas_tanah}}</p>
                        <p><strong>Alamat Tanah : </strong> {{$dataTanah->alamat_tanah}}</p>
                        <p><strong>Batasan Utara : </strong>{{$dataTanah->batasan_utara}}</p>
                        <p><strong>Batasan Timur : </strong> {{$dataTanah->batasan_timur}}</p>
                        <p><strong>Batasan Selatan : </strong> {{$dataTanah->batasan_selatan}}</p>
                        <p><strong>Batasan Barat : </strong> {{$dataTanah->batasan_barat}}</p>
                        <p><strong>Latitude : </strong> {{$dataTanah->latitude}}</p>
                        <p><strong>Longtitude : </strong> {{$dataTanah->longitude}}</p>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
