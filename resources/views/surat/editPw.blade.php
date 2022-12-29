@extends('templates.partials.sidebar')

@php
$title = 'Surat Masuk';
$link = route('surat.index');
@endphp

@section('content')
<div class="container mt-5">
    <h3>Update status</h3>
    <div class="card mt-5 p-3">
        <form action="{{ route('editSttsPw', $detailData->id) }}" method="post">
            @csrf
            <select name="status" id="status" class="btn btn-primary">
                <option value="diterima" {{$detailData->status === 'diterima' ? 'selected' : ''}}>diterima</option>
                <option value="ditolak" {{$detailData->status === 'ditolak' ? 'selected' : ''}}>ditolak</option>
                <option value="proses" {{$detailData->status === 'proses' ? 'selected' : ''}}>proses</option>
                <option value="selesai" {{$detailData->status === 'selesai' ? 'selected' : ''}}>selesai</option>
            </select>
            <br>
            <input type="submit" value="Update" class="btn btn-primary btn-sm mt-5">
        </form>
    </div>
</div>
@endsection
