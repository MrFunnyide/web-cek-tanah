@extends('lurah.tmplate.partial.sidebar')

@php
$title = 'Arsip Surat';
$link = route('arsip.indexLurah');
@endphp

@section('content')
<div class="container">
    <div class="container d-flex justify-content-around">
        <div class="col-lg-6 mt-5">
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
        <div class="mt-4 table-responsive-lg">
            <table class="table table-striped table-bordered shadow">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Deskripsi Arsip</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arsip as $data)
                    <tr class="text-center align-middle">
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                            {{$data->name_berkas}}
                        </td>
                        <td>{{$data->deskripsi_arsip}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ asset('storage/' . $data->file_arsip) }}" class="btn btn-sm btn-secondary me-3">Lihat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

