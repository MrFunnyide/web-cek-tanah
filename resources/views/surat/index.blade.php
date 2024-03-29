@extends('templates.partials.sidebar')

@php
$title = 'Surat Berpenghasilan';
$link = route('surat.index');
@endphp

@section('content')
<div class="container mt-5">
    <div class="row input-group">
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
        </div>
        <div class="mt-4 table-responsive-lg">
            <table class="table table-striped table-bordered shadow">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemohon</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataAll)
                    {{-- {{dd($data)}} --}}
                    <tr class="text-center align-middle">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td scope="row">{{ $dataAll->pemohon->name }}</td>
                        <td scope="row">{{ $dataAll->pemohon->pekerjaan }}</td>
                        <td scope="row" class="d-flex justify-content-center">
                            <a href="{{ route('detail.surat' , $dataAll->id ) }}" class="btn btn-sm btn-secondary me-3">cek</a>
                            <a href="{{ route('edit.surat', $dataAll->id) }}" class="btn btn-sm text-white btn-warning me-3">edit</a>
                            <button data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $dataAll->id }}" class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Modal Hapus --}}
    @foreach ($data as $dataAll)
    <div class="modal fade" id="ModalDelete{{ $dataAll->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    Apakah kamu yakin ingin menghapus data ?
                </div>
                <form action="{{ route('surat.destroy', $dataAll->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" value="Hapus" class="btn btn-danger me-5">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
