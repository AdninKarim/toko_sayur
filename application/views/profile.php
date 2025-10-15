<!DOCTYPE html>
<html>
<head>
  <title>Profil Saya</title>
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg p-4">
      <h3 class="mb-4">Profil Saya</h3>
      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
      <?php endif; ?>

      <form action="<?= base_url('profile/update') ?>" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email (tidak bisa diubah)</label>
          <input type="email" class="form-control" value="<?= $user['email'] ?>" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </form>
    </div>
  </div>
</body>
</html>
