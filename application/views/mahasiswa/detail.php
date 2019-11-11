<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama_mhs']; ?></h5>
                    <p class="card-text"><?= $mahasiswa['nim']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jns_kelamin']; ?></p>
                    <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><?= $mahasiswa['no_hp']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>