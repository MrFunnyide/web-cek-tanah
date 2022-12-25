@extends('templates.partials.sidebar')

@php
$title = 'Data Akun';
$link = route('dataAkun.index');
@endphp

@section('content')
<div class="container d-flex mt-5">
    <div class="row input-group d-flex justify-content-around">
        <div class="col-lg-6">
            <div class="d-flex">
                <input style="background: #0478c5;" class="form-control text-white" id="search" type="text"
                placeholder="Search">
                <button class="btn position-relative" style="right: 10%"><i class="bi bi-search text-white"></i></button>
            </div>
        </div>
        <div class="col-lg-auto">
            <button type="button" class="btn text-white tambahTanah" style="background: #0478c5" data-bs-toggle="modal"
            data-bs-target="#exampleModalAdd">Data Akun<i class="bi bi-folder-plus ps-2"></i> </button>
        </div>
    </div>
</div>
{{-- table --}}
<div class="container mt-5">
    <table class="table table-striped table-bordered shadow">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
            <tr class="text-center align-middle">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $account->nama_lengkap }}</td>
                <td>{{ $account->username }}</td>
                <td class="d-flex justify-content-center">
                    <button class="btn btn-warning me-4" data-bs-toggle="modal"
                    data-bs-target="#exampleModalEdit"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn btn-secondary me-4"><i class="bi bi-info-circle"></i></button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModalDelete"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <div class="d-flex justify-content-end">
            <li class="fs-6">Page</li>
            <li><a href=""><i class="bi bi-caret-left-square" style="font-size: 1.2rem;"></i></a></li>
            <li class="page-item"><a class="page-link" href="#" style="font-size: 1.2rem;">1</a></li>
            <li><a href=""><i class="bi bi-caret-right-square" style="font-size: 1.2rem;"></i></a></li>
        </div>
    </div>
</div>
{{-- Modal Hapus --}}
<div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                Apakah kamu yakin ingin menghapus Akun ?
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger me-5">Hapus</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Edit --}}
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="overflow-y: initial">
        <div class="modal-content overflow-auto">
            <div class="modal-header">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Tambah Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow-auto" style="height: 70vh;">
                <form>
                    <div class="mb-3">
                        <label for="nik" class="col-form-label">NIK :</label>
                        <input type="number" class="form-control form-control-sm" id="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama Lengkap :</label>
                        <input type="text" class="form-control form-control-sm" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <input type="text" class="form-control form-control-sm" id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">No Hp :</label>
                        <input type="tel" class="form-control form-control-sm" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin :</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="col-form-label">Agama :</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Hindu</option>
                            <option value="4">Budha</option>
                            <option value="5">Katholik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="col-form-label">Tanggal lahir :</label>
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="col-form-label">Pekerjaan :</label>
                        <input type="text" class="form-control form-control-sm" id="pekerjaan" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Tambah Data --}}
<div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="overflow-y: initial">
        <div class="modal-content overflow-auto">
            <div class="modal-header">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow-auto" style="height: 70vh;">
                <form action="/account" method="post">
                    <div class="mb-3">
                        <label for="nip" class="col-form-label">NIP :</label>
                        <input type="number" class="form-control form-control-sm" id="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="col-form-label">Username :</label>
                        <input type="text" class="form-control form-control-sm" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password :</label>
                        <input type="text" class="form-control form-control-sm" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nama Lengkap :</label>
                        <input type="name" class="form-control form-control-sm" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <input type="text" class="form-control form-control-sm" id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="col-form-label">No HP :</label>
                        <input type="text" class="form-control form-control-sm" id="pekerjaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan :</label>
                        <input type="text" class="form-control form-control-sm" id="jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="fotoPegawai">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</div>
@endsection
