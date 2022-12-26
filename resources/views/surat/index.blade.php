@extends('templates.partials.sidebar')

@php
$title = 'Surat Masuk';
$link = route('surat.index');
@endphp

@section('content')
<div class="container mt-5">
    <div class="row input-group d-flex justify-content-around">
        <div class="col-lg-6">
            <form action="#" method="get">
                <div class="d-flex">
                    <input style="background: #0478c5;" class="form-control text-white" id="search" type="search"
                    name="search" placeholder="Search">
                    <button class="btn position-relative" style="right: 10%"><i
                        class="bi bi-search text-white"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-auto">
                <select name="agama" class="btn btn-primary" aria-label="Default select example" id="agama">
                    <option selected disabled value="">Pilih Surat</option>
                    <option value="Berpenghasilan">Surat Berpenghasilan</option>
                    <option value="PindahWilayah" >Surat Pindah Wilayah</option>
                </select>
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
                    <tr class="text-center align-middle">
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center">
                            <a href="#" class="btn btn-sm btn-secondary me-3">Lihat</a>

                            <form action="#" method="get" class="me-3">
                                @csrf
                                <input type="submit" value="Edit" class="btn btn-sm btn-warning">
                            </form>

                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
