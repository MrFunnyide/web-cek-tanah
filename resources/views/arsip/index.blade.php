@extends('templates.partials.sidebar')

@php
$title = 'Arsip Surat';
$link = route('arsip.index');
@endphp

@section('content')
<div class="container">
    <div class="mt-5">
        <a href="{{route('arsip.create')}}" type="button" class="btn text-white tambahTanah" style="background: #0478c5">Tambah Berkas<i class="bi bi-folder-plus ps-2"></i> </a>
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
                    {{-- <th scope="col">file skrg </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($arsip as $data)
                <tr class="text-center align-middle">
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>
                        {{$data->name_berkas}}
                    </td>
                    {{-- <td>wwwww</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

