@extends('templates.partials.sidebar')

@php
$title = 'Arsip Surat';
$link = route('arsip.index');
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
        <div class="mt-5">
            <a href="{{route('arsip.create')}}" type="button" class="btn text-white tambahTanah" style="background: #0478c5">Tambah Berkas<i class="bi bi-folder-plus ps-2"></i> </a>
        </div>
    </div>

        @if(session()->has('succes'))
        <div class="alert alert-success mt-3">
            {{ session()->get('succes') }}
        </div>
        @endif

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

                            <form action="{{ route('edit_arsip', $data->id) }}" method="get" class="me-3">
                                @csrf
                                <input type="submit" value="Edit" class="btn btn-sm btn-warning">
                            </form>

                            <a href="{{ route('delete_arsip', $data->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

