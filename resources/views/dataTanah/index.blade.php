@extends('templates.partials.sidebar')

@php
$title = 'Data Tanah';
$link = route('dataTanah.pemilik');
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
            <div class="col-lg-auto">
                <button type="button" class="btn text-white tambahTanah" style="background: #0478c5" data-bs-toggle="modal"
                data-bs-target="#exampleModalAdd">Tambah Data<i class="bi bi-folder-plus ps-2"></i> </button>
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
                        {{-- button edit modal --}}
                        <button type="button" class="btn btn-warning me-4" data-bs-toggle="modal"
                        data-bs-target="#ModalEdit{{ $pemilikTanah->id }}"><i class="bi bi-pencil-square"></i></button>
                        {{-- button info modal --}}
                        <button class="btn btn-secondary me-4" data-bs-toggle="modal"
                        data-bs-target="#ModalDetail{{ $pemilikTanah->id }}""><i class="bi bi-info-circle"></i></button>
                        {{-- button delete modal --}}
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#ModalDelete{{ $pemilikTanah->id }}"><i class="bi bi-trash"></i></button>
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
    {{-- Modal Hapus --}}
    @foreach ($pemilik as $pemilikTanah)
    <div class="modal fade" id="ModalDelete{{ $pemilikTanah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    Apakah kamu yakin ingin menghapus data ?
                </div>
                <form action="{{ route('dataTanah.destroy', $pemilikTanah->id) }}" method="post">
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
    {{-- Modal Edit --}}
    @foreach ($pemilik as $pemilikTanah)
    <div class="modal fade" id="ModalEdit{{ $pemilikTanah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="overflow-y: initial">
            <div class="modal-content overflow-auto">
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="exampleModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto" style="height: 70vh;">
                    <form action="{{ route('dataTanah.update', $pemilikTanah->id) }}" method="post">
                        @csrf
                        <h5 class="fw-bold">Data Pemilik</h5><hr>
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Nama Lengkap :</label>
                            <input name="name" type="text" class="form-control form-control-sm" id="name" required value="{{$pemilikTanah->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="col-form-label">Pekerjaan :</label>
                            <input name="pekerjaan" type="text" class="form-control form-control-sm" id="pekerjaan"
                            required value="{{$pemilikTanah->pekerjaan}}">
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="col-form-label">Umur :</label>
                            <input name="umur" type="text" class="form-control form-control-sm"
                            id="umur" required value="{{$pemilikTanah->umur}}">
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="col-form-label">Agama :</label>
                            <select name="agama" class="form-select form-select-sm" aria-label="Default select example"
                            id="agama" required>
                            <option selected disabled value="">Pilih Agama</option>
                            <option value="Islam" {{$pemilikTanah->agama === 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{$pemilikTanah->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Hindu" {{$pemilikTanah->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{$pemilikTanah->agama === 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Konghucu" {{$pemilikTanah->agama === 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <input name="alamat" type="text" class="form-control form-control-sm"
                        id="alamat" required value="{{$pemilikTanah->alamat}}">
                    </div>
                    <h5 class="fw-bold">Data Tanah</h5><hr>
                    {{-- batas --}}
                    @foreach ($pemilikTanah->tanah as $dataTanah)
                    <div class="mb-3">
                        <label for="SHM" class="col-form-label">Sertifikat Hak Milik :</label>
                        <input name="SHM" type="number" class="form-control form-control-sm" id="SHM"
                        required value="{{$dataTanah->SHM}}">
                    </div>
                    <div class="mb-3">
                        <label for="luas_tanah" class="col-form-label">Luas Tanah :</label>
                        <input name="luas_tanah" type="number" class="form-control form-control-sm" id="luas_tanah"
                        required value="{{$dataTanah->luas_tanah}}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_tanah" class="col-form-label">Alamat Tanah :</label>
                        <input name="alamat_tanah" type="text" class="form-control form-control-sm"
                        id="alamat_tanah" required value="{{$dataTanah->alamat_tanah}}">
                    </div>
                    <div class="mb-3">
                        <label for="batasan_utara" class="col-form-label">Batasan Utara :</label>
                        <input name="batasan_utara" type="text" class="form-control form-control-sm"
                        id="batasan_utara" required value="{{$dataTanah->batasan_utara}}">
                    </div>
                    <div class="mb-3">
                        <label for="batasan_timur" class="col-form-label">Batasan Timur :</label>
                        <input name="batasan_timur" type="text" class="form-control form-control-sm"
                        id="batasan_timur" required value="{{$dataTanah->batasan_timur}}">
                    </div>
                    <div class="mb-3">
                        <label for="batasan_selatan" class="col-form-label">Batasan Selatan :</label>
                        <input name="batasan_selatan" type="text" class="form-control form-control-sm"
                        id="batasan_selatan" required value="{{$dataTanah->batasan_selatan}}">
                    </div>
                    <div class="mb-3">
                        <label for="batasan_barat" class="col-form-label">Batasan Barat :</label>
                        <input name="batasan_barat" type="text" class="form-control form-control-sm"
                        id="batasan_barat" required value="{{$dataTanah->batasan_barat}}">
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="col-form-label">Latitude :</label>
                        <input name="latitude" type="number" class="form-control form-control-sm" id="latitude"
                        required value="{{$dataTanah->latitude}}">
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="col-form-label">Longitude :</label>
                        <input name="longitude" type="number" class="form-control form-control-sm" id="longitude"
                        required value="{{$dataTanah->longitude}}">
                    </div>
                    @endforeach
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- Modal Tambah Data --}}
<div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="overflow-y: initial">
        <div class="modal-content overflow-auto">
            <div class="modal-header">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow-auto" style="height: 70vh;">
                <form action="{{ route('dataTanah.store') }}" method="post">
                    @csrf
                    <h5 class="fw-bold">Data Pemilik</h5><hr>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nama Lengkap :</label>
                        <input name="name" type="text" class="form-control form-control-sm" id="name"
                        required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="col-form-label">Pekerjaan :</label>
                        <input name="pekerjaan" type="text" class="form-control form-control-sm" id="pekerjaan"
                        required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="col-form-label">Umur :</label>
                        <input name="umur" type="text" class="form-control form-control-sm"
                        id="umur" required>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="col-form-label">Agama :</label>
                        <select name="agama" class="form-select form-select-sm" aria-label="Default select example"
                        id="agama" required>
                        <option selected disabled value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="col-form-label">Alamat :</label>
                    <input name="alamat" type="text" class="form-control form-control-sm"
                    id="alamat" required>
                </div>
                <h5 class="fw-bold">Data Tanah</h5><hr>
                {{-- batas --}}
                <div class="mb-3">
                    <label for="SHM" class="col-form-label">Sertifikat Hak Milik :</label>
                    <input name="SHM" type="number" class="form-control form-control-sm" id="SHM"
                    required>
                </div>
                <div class="mb-3">
                    <label for="luas_tanah" class="col-form-label">Luas Tanah :</label>
                    <input name="luas_tanah" type="number" class="form-control form-control-sm" id="luas_tanah"
                    required>
                </div>
                <div class="mb-3">
                    <label for="alamat_tanah" class="col-form-label">Alamat Tanah :</label>
                    <input name="alamat_tanah" type="text" class="form-control form-control-sm"
                    id="alamat_tanah" required>
                </div>
                <div class="mb-3">
                    <label for="batasan_utara" class="col-form-label">Batasan Utara :</label>
                    <input name="batasan_utara" type="text" class="form-control form-control-sm"
                    id="batasan_utara" required>
                </div>
                <div class="mb-3">
                    <label for="batasan_timur" class="col-form-label">Batasan Timur :</label>
                    <input name="batasan_timur" type="text" class="form-control form-control-sm"
                    id="batasan_timur" required>
                </div>
                <div class="mb-3">
                    <label for="batasan_selatan" class="col-form-label">Batasan Selatan :</label>
                    <input name="batasan_selatan" type="text" class="form-control form-control-sm"
                    id="batasan_selatan" required>
                </div>
                <div class="mb-3">
                    <label for="batasan_barat" class="col-form-label">Batasan Barat :</label>
                    <input name="batasan_barat" type="text" class="form-control form-control-sm"
                    id="batasan_barat" required>
                </div>
                <div class="mb-3">
                    <label for="latitude" class="col-form-label">Latitude :</label>
                    <input name="latitude" type="number" class="form-control form-control-sm" id="latitude"
                    required>
                </div>
                <div class="mb-3">
                    <label for="longitude" class="col-form-label">Longitude :</label>
                    <input name="longitude" type="number" class="form-control form-control-sm" id="longitude"
                    required>
                </div>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
