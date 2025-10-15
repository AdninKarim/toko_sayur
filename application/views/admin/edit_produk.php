<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    <?php $this->load->view('navbar'); ?>

    <div class="container mt-5">
        <h2>Edit Produk</h2>

        <form method="post" action="<?= base_url('admin/produk/update'); ?>">
            <input type="hidden" name="id" value="<?= $produk['id']; ?>">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="<?= $produk['nama']; ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="<?= $produk['kategori_id']; ?>"><?= $produk['nama_kategori']; ?></option>
                    <?php foreach ($kategori as $k): ?>
                        <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" value="<?= $produk['harga']; ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Detail</label>
                <textarea name="detail" rows="5" class="form-control"><?= $produk['detail']; ?></textarea>
            </div>

            <div class="form-group">
                <label>Ketersediaan Stok</label>
                <select name="ketersediaan_stock" class="form-control">
                    <option value="<?= $produk['ketersediaan_stock']; ?>"><?= $produk['ketersediaan_stock']; ?></option>
                    <?php if ($produk['ketersediaan_stock'] == 'tersedia'): ?>
                        <option value="habis">Habis</option>
                    <?php else: ?>
                        <option value="tersedia">Tersedia</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
