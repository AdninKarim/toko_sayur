<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kategori</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
	<style>.no-decoration{ text-decoration:none; }</style>
</head>
<body>
<?php $this->load->view('navbar'); ?>

<div class="container mt-5">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
	    	<li class="breadcrumb-item">
	    		<a href="<?= base_url('admin/admin') ?>" class="no-decoration text-muted">
	    			<i class="fa-solid fa-house-chimney"></i> Home
	    		</a>
	    	</li>
	    	<li class="breadcrumb-item active" aria-current="page">
		    	<i class="fas fa-align-justify"></i> Kategori
		    </li>
	  	</ol>
	</nav>
	
	<div class="my-5 col-12 col-md-6">
		<h3>Tambah Kategori</h3>
		<form action="<?= base_url(); ?>admin/kategori/tambah" method="post">
			<div>
				<label for="Kategori">Kategori</label>
				<input type="text" id="kategori" name="kategori" placeholder="input nama kategori" class="form-control">
			</div>
			<div class="mt-3">
				<button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
			</div>
		</form>
	</div>

	<div class="mt-3">
		<h2>List Kategori</h2>
		
		<div class="table-responsive mt-5">
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Jenis</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($jumlahKategori == 0): ?>
						<tr>
							<td colspan="3" class="text-center">Tidak ada data yang tersedia</td>
						</tr>
					<?php else: ?>
						<?php $no=1; foreach($kategori as $row): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $row['nama'] ?></td>
							<td> <?= anchor('admin/kategori/edit/'. $row['id'], '<div class="btn btn-info"><i class="fas fa-search"></i></div>') ?>
							</td>
						</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
</body>
</html>
