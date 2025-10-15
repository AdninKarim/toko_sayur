<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Sayur Online | Detail Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/stylep.css') ?>">
</head>
<body>
    <?php $this->load->view('navbar2'); ?>

    <!-- Detail Produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <img src="<?= base_url('assets/img/menu/'.$produk['foto']); ?>" class="w-100">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1><?= $produk['nama']; ?></h1>
                    <p class="fs-5"><?= $produk['detail']; ?></p>
                    <p class="fs-5">Harga : <span class="text-harga"><strong>Rp <?= number_format($produk['harga'],0,',','.'); ?></strong></span></p>
                    <p class="fs-5">Status Ketersediaan : <strong><?= $produk['ketersediaan_stock']; ?></strong></p>
                    <div class="btn clr1">
                        <a><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                    <div class="btn clr1 me-4">
                        <a class="link-text text-black" href="<?= site_url('product'); ?>">
                            <h5>Kembali</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Terkait -->
    <div class="container-fluid py-5 clr2">
        <div class="container">
            <h2 class="text-center text-white mb-5">Produk Terkait</h2>

            <div class="row">
                <?php foreach($product_terkait as $pt): ?>
                <div class="col-md-4 mb-4 col-lg-4">
                    <a href="<?= site_url('product/detailp/'.$pt['id']); ?>">
                        <img src="<?= base_url('assets/img/menu/'.$pt['foto']); ?>" 
                             class="img-fluid img-thumbnail produk-terkait-image">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); ?>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
</body>
</html>
