<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produk</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
	<style>
		.no-decoration { text-decoration: none; }
		form div { margin-bottom: 10px; }
	</style>
</head>
<body>
<?php $this->load->view('navbar'); ?>

<div class="container mt-5">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><i class="fa-solid fa-house-chimney"></i> Home</li>
			<li class="breadcrumb-item active"><i class="fa-solid fa-boxes-stacked"></i> Produk</li>
		</ol>
	</nav>

	<!-- Tambah Produk -->
	<div class="my-5 col-12 col-md-6">
		<h3>Tambah Produk</h3>

			<div>
				<form action="<?= base_url(); ?>admin/produk/tambah" method="post" enctype="multipart/form-data">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" autocomplete="off">
			</div>
			<div>
				<label for="kategori">Kategori</label>
				<select name="kategori" class="form-control">
					<option value="">Pilih Kategori</option>
					<?php foreach($kategori as $k): ?>
						<option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div>
				<label for="harga">Harga</label>
				<input type="number" class="form-control" name="harga">
			</div>
			<div>
				<label for="foto">Foto</label>
				<input type="file" class="form-control" name="foto">
			</div>
			<div>
				<label for="detail">Detail</label>
				<textarea name="detail" class="form-control" rows="5"></textarea>
			</div>
			<div>
				<label for="ketersediaan_stock">Ketersediaan Stok</label>
				<select name="ketersediaan_stock" class="form-control">
					<option value="tersedia">Tersedia</option>
					<option value="habis">Habis</option>
				</select>
			</div>
			<div>
				<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			</div>
		</form>
	</div>

	<div class="mt-3 mb-5">
		<h2>List Produk</h2>
	</div>
	<div class="table-responsive mt-5">
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Kategori</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(empty($produk)): ?>
					<tr><td colspan="6" class="text-center">Tidak ada data</td></tr>
				<?php else: ?>
					<?php $no=1; foreach($produk as $p): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $p['nama'] ?></td>
							<td><?= $p['nama_kategori'] ?></td>
							<td><?= $p['harga'] ?></td>
							<td><?= $p['ketersediaan_stock'] ?></td>
							<td><?= anchor('admin/produk/edit/' .$p['id'], '<div class="btn btn-info">
									<i class="fas fa-search"></i></div>' ) ?></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
</body>
</html>
