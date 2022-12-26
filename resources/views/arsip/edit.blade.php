@extends('templates.partials.sidebar')

@php
$title = 'Edit Arsip';
$link = route('arsipStore');
@endphp

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('update_arsip', $dt->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name_berkas" class="col-form-label">Nama Berkas :</label>
                    <input name="name_berkas" type="text" class="form-control" id="name_berkas" name="name_berkas" value="{{$dt->name_berkas}}">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="col-form-label">Deskripsi :</label>
                    <textarea name="keterangan" type="text" class="form-control form-control-sm" id="keterangan" name="keterangan">{{ $dt->deskripsi_arsip }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="col-form-label">File :</label>
                    <input name="file" type="file" class="form-control form-control-sm" id="file" name="file">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Ubah" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

