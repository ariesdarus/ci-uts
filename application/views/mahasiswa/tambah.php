<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Data Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?> -->

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_mhs">Nama</label>
                            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" >
                            <small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" >
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jns_kelamin">Jenis Kelamin</label>
                           <select class="form-control" id="jurusan" name="jurusan">
                                <option value=""></option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempeuan">Perempuan</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" >
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                         <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" >
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                         <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="">Pilih Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary ">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>