<style>
	.kotak{
		border: solid;
	}

	.summary-kategori{
		background-color: #bed0ed;
		border-radius: 10px;
	}
	.summary-produk{
		background-color: #e3e645;
		border-radius: 10px;
	}
	.summary-konsumen{
		background-color: #73e675;
		border-radius: 10px;
	}

	.no-decoration{
		text-decoration: none;
		margin-left: -4rem;
	}

</style>

	<?php
	 $this->load->view("navbar"); 
	 
	?>

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb">
		    	<li class="breadcrumb-item active" aria-current="page">
		    	<i class="fa-solid fa-house-chimney"></i>Home</li>
		  	</ol>
		</nav>
			<h2>Halo <?= $user['nama']; ?></h2>

			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 mb-3">
						<div class="summary-kategori p-3">
							<div class="row">
								<div class="col-6">
									<i class="fas fa-align-justify fa-5x text-dark"></i>
								</div>
								<div class="col-6">
									<h3 class="fs-2">Kategori</h3>
									<p class="fs-4"><?= "$jumlahKategori"; ?> Kategori</p>
									<p><a href="<?= base_url('admin/kategori') ?>" class="text-dark no-decoration">Detail Lengkap</a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-12 mb-3">
						<div class="summary-produk p-3">
							<div class="row">
								<div class="col-6">
									<i class="fa-solid fa-boxes-stacked fa-5x text-dark"></i> 
								</div>
								<div class="col-6">
									<h3 class="fs-2">Produk</h3>
									<p class="fs-4"><?= "$jumlahProduk"; ?> Produk</p>
									<p><a href="<?= base_url('admin/produk') ?>" class="text-dark no-decoration">Detail Lengkap</a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-12 mb-3">
						<div class="summary-konsumen p-3">
							<div class="row">
								<div class="col-6">
									<i class="fa-solid fa-users fa-5x text-dark"></i>
								</div>
								<div class="col-6">
									<h3 class="fs-2">Konsumen</h3>
									<p class="fs-4">- Konsumen</p>
									<p><a href="<?= base_url('admin/konsumen') ?>" class="text-dark no-decoration">Detail Lengkap</a></p>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
	</div>
