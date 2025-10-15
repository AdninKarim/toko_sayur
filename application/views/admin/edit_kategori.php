<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    <?php // load navbar
        $this->load->view('navbar'); 
    ?>

    <div class="container mt-5">
        <h2>Detail Kategori</h2>

        <div class="col-12 col-md-6">
            <form action="<?= base_url(); ?>admin/kategori/update" method="post">
                <input type="hidden" name="id" value="<?= $queryKategori->id; ?>">


                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" name="nama" id="kategori" class="form-control" 
                           value="<?= $queryKategori->nama; ?>">
                </div>  

                <div class="mt-5 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="editBtn">Edit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
