<div class="container">
	<?php if ($this->session->flashdata('flash')) :?>
	    <div class="row">
	        <div class="col-md-6">
	            <div class="alert alert-success alert-dismissible fade show" role="alert">
	                Data mahasiswa <strong> berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	        </div>
	    </div>
	<?php endif ;?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs): ?>
			  		<li class="list-group-item"><?= $mhs['nama_mhs']; ?>
			  		<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id_mhs']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');" >hapus</a>
				  	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id_mhs']; ?>" class="badge badge-success float-right" >ubah</a>
			  		<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id_mhs']; ?>" class="badge badge-primary float-right" >detail</a>
			  		</li>
			  	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>