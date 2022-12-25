<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/navbar.css">
    @include('templates.partials.head')
</head>
<body>
    {{-- navbar --}}
    @include('templates.partials.navbar')
    <!-- Jumbotron -->
    <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/banner.svg'); background-repeat: no-repeat; background-size: cover; height: 400px;">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white " style="margin-top: 10%">
                    {{-- <a class="btn btn-outline-light rounded-pill btn-lg px-5 py-3" href="/" role="button">Selamat Datang</a> --}}
                    <h1 class="fw-bold">Selamat Datang</h1>
                    <p class="fw-bold mt-2">Di website pelayanan KASIPEM kelurahan tampan</p>
                </div>
            </div>
        </div>
    </div>
    {{-- information --}}
    <div id="information">
        <div>
            <h5 class="text-center py-3 titleBody">INFORMATION</h5>
        </div>

        @include('templates.partials.according');
    </div>
    {{-- pelayanan --}}
    <div id="pelayanan">
        <div>
            <h5 class="text-center py-3 titleBody">PELAYANAN</h5>
        </div>
        <div class="d-flex justify-content-center suratAjuan my-5">
            <div class="card shadow ajuan me-5" style="width: 16rem;">
                <img src="img/berpenghasilan.svg" class="card-img-top" alt="surat berpenghasilan">
                <div class="card-body d-flex flex-column justify-content-center">
                    <p class="text-center fw-bold">Surat Penghasilan</p>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalPenghasilan">Ajukan</button>
                </div>
            </div>
            <div class="card shadow ajuan me-5" style="width: 16rem;">
                <img src="img/pindahWilayah.svg" class="card-img-top" alt="surat pindah wilayah">
                <div class="card-body d-flex flex-column justify-content-center">
                    <p class="text-center fw-bold">Surat Pindah Wilayah</p>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalPindahWilayah">Ajukan</button>
                </div>
            </div>
        </div>
    </div>
    @include('templates.partials.modalWarga')
    <div id="tracking">
        <div>
            <h5 class="text-center py-3 titleBody">Tracking</h5>
        </div>
        <div class="container my-5">
            <h6>Keterangan Status Pengajuan Surat</h6>
            <hr>
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center imageTrack">
                    <img class="mb-3 img-fluid" style="width: 10%" src="img/tracking/berkasDiterima.svg" alt="Berkas Diterima">
                    <p class="ms-5">Pengajuan Surat berhasil di lakukan</p>
                </div>
                <div class="d-flex align-items-center imageTrack">
                    <img class="mb-3 img-fluid" style="width: 10%" src="img/tracking/sedangDiProses.svg" alt="Sedang Di Proses">
                    <p class="ms-5">Surat sedang di proses oleh pihak kelurahan</p>
                </div>
                <div class="d-flex align-items-center imageTrack">
                    <img class="mb-3 img-fluid" style="width: 10%" src="img/tracking/Selesai.svg" alt="Selesai">
                    <p class="ms-5">Surat telah selesai, silahkan jemput surat di kantor lurah dan bawa berkas yang asli</p>
                </div>
            </div>
            <br>
            <form>
                <div class="mb-3">
                    <label for="id_pengajuan" class="form-label">Masukkan Id Pengajuan</label>
                    <input type="id_pengajuan" class="form-control" id="id_pengajuan" aria-describedby="id_pengajuan" name="id_pengajuan">
                </div>
                <button type="submit" class="btn btn-primary">Lacak Surat</button>
            </form>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Pengajuan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123456789</td>
                        <td>12-12-2021</td>
                        <td>Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- footer --}}
    @include('templates.partials.footer')
</body>
</html>
