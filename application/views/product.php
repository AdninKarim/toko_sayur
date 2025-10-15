<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Sayur Online | Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/stylep.css') ?>">
</head>
<body>

    <?php $this->load->view('navbar2'); ?>

    <!-- Banner -->
    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">Produk</h1>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="<?= site_url('product') ?>">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Cari Barang" 
                               name="keyword" value="<?= $this->input->get('keyword'); ?>">
                        <button type="submit" class="btn clr2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="container py-5">
        <div class="row">
            <!-- Sidebar kategori -->
            <div class="col-lg-3 mb-5">
                <h3>Kategori</h3>
                <ul class="list-group">
                    <?php foreach($kategori as $kat): ?>
                        <a href="<?= site_url('product?kategori='.$kat['nama']); ?>">
                            <li class="list-group-item"><?= $kat['nama']; ?></li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Produk -->
            <div class="col-lg-9">
                <h3 class="text-center mb-3">Produk</h3>
                <div class="row">
                    <?php if(count($produk) < 1): ?>
                        <h4 class="text-center my-5">Barang yang dicari tidak ada</h4>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    <?php else: ?>
                        <?php foreach($produk as $p): ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/menu/'.$p['foto']); ?>" 
                                             class="card-img-top" alt="<?= $p['nama']; ?>">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $p['nama']; ?></h4>
                                        <p class="card-text text-truncate"><?= $p['detail']; ?></p>
                                        <p class="card-text text-harga">Rp <?= number_format($p['harga'],0,',','.'); ?></p>
                                        <a href="<?= site_url('product/detailp/'. $p['id']); ?>" 
                                           class="btn clr2">Lihat Detail</a>
                                        <?= anchor('product/add_cart/' .$p['id'], '<div class="btn clr2"><i class="fa-solid fa-cart-plus"></i></div>') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>  
    </div>

    <?php $this->load->view('footer'); ?>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
</body>
</html>
