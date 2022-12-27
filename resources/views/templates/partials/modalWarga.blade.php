{{-- surat pindah wilayah --}}
<div class="modal fade" id="modalPindahWilayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="overflow-y: initial">
        <div class="modal-content overflow-auto">
            <div class="modal-header formSurat">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Form pembuatan surat keterangan pindah wilayah</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow-auto" style="height: 70vh;">
                <form action="{{ route('pindah_wilayah.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h5 class="fw-bold">Data Diri</h5><hr>
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
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <input name="alamat" type="text" class="form-control form-control-sm"
                        id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="col-form-label">No Hp :</label>
                        <input name="no_telp" type="number" class="form-control form-control-sm"
                        id="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin :</label>
                        <select name="jenis kelamin" class="form-select form-select-sm" aria-label="Default select example"
                        id="jenis_kelamin" required>
                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <h5 class="fw-bold">Berkas</h5><hr>
                <div class="mb-3">
                    <label for="Spengantar" class="form-label">Surat Pengantar (Rt/Rw)</label>
                    <input class="form-control" type="file" id="Spengantar" name="Spengantar">
                </div>
                <div class="mb-3">
                    <label for="FcSDasatTanah" class="form-label">Fotokopi Surat Dasar Tanah</label>
                    <input class="form-control" type="file" id="FcSDasatTanah" name="FcSDasatTanah">
                </div>
                <div class="mb-3">
                    <label for="fc_ktp" class="form-label">Fotokopi KTP Pemohon</label>
                    <input class="form-control" type="file" id="fc_ktp" name="fc_ktp">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

{{-- surat penghasilan --}}
<div class="modal fade" id="modalPenghasilan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="overflow-y: initial">
        <div class="modal-content overflow-auto">
            <div class="modal-header formSurat">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Form pembuatan Surat Penghasilan</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow-auto" style="height: 70vh;">
                <form action="{{ route('berpenghasilan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h5 class="fw-bold">Data Diri</h5><hr>
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
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <input name="alamat" type="text" class="form-control form-control-sm"
                        id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="col-form-label">No Hp :</label>
                        <input name="no_telp" type="number" class="form-control form-control-sm"
                        id="no_telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin :</label>
                        <select name="jenis kelamin" class="form-select form-select-sm" aria-label="Default select example"
                        id="jenis_kelamin" required>
                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <h5 class="fw-bold">Berkas</h5><hr>
                <div class="mb-3">
                    <label for="fc_ktp" class="form-label">Fotokopi KTP</label>
                    <input class="form-control" type="file" id="fc_ktp" name="fc_ktp">
                </div>
                <div class="mb-3">
                    <label for="fc_kk" class="form-label">Fotokopi KK</label>
                    <input class="form-control" type="file" id="fc_kk" name="fc_kk">
                </div>
                <div class="mb-3">
                    <label for="srt_pernyataan" class="form-label">Surat Pernyataan (diketahui Rt/Rw)</label>
                    <input class="form-control" type="file" id="srt_pernyataan" name="srt_pernyataan">
                </div>
                <div class="mb-3">
                    <label for="fc_tandalunasPbb" class="form-label">Fotokopi Tanda Lunas PBB Berjalan</label>
                    <input class="form-control" type="file" id="fc_tandalunasPbb" name="fc_tandalunasPbb">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
