<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Data Ubah Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?> -->

                    <form action="" method="post">
                        <input type="hidden" name="id_mhs" value="<?= $mahasiswa['id_mhs']; ?>">
                        <div class="form-group">
                            <label for="nama_mhs">Nama</label>
                            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="<?= $mahasiswa['nama_mhs']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jns_kelamin">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="<?= $mahasiswa['jns_kelamin']; ?>">
                            <small class="form-text text-danger"><?= form_error('jns_kelamin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="teks" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                         <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <input type="teks" class="form-control" id="no_hp" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary ">Kembali</a>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>