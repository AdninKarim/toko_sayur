<?php $this->load->view('navbar2'); ?>

       <style>
      body {
        background-color: #f8f9fa;
      }
    </style>
  </head>
  <body class="bg-body-tertiary">
    <div class="container">

    	<?php $grand_total = 0;  
			if ($keranjang = $this->cart->contents()) 
			{
				foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				}
		?>

      <main>
        <div class="py-5 text-center">
          <h1 class="h2"><strong>Pembayaran</strong></h1>
          <p class="lead">
            Silahkan isi data anda untuk melanjutkan pembayaran.
          </p>
        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Keranjang Belanja</span>
              <span class="badge bg-primary rounded-pill"><?= $this->cart->total_items(); ?></span>
            </h4>

            <ul class="list-group mb-3">
            	<?php if (!empty($keranjang)): ?>
      			<?php foreach ($keranjang as $item): ?>

              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><?= $item['name']; ?></h6>
                  <small class="text-body-secondary"><?= $item['qty']; ?></small>
                </div>
                <span class="text-body-secondary">Rp. <?= number_format($item['price'],0,',','.'); ?></span>
              </li>
              <?php endforeach; ?>
              <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>Contoh Code</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span> <strong><i class="fa-solid fa-wallet"></i>Rp.<?= number_format($grand_total,0,',','.'); ?> </strong>
              </li>
              <?php else: ?>
		      <li class="list-group-item text-center text-muted">
		        Keranjang masih kosong
		      </li>
		    <?php endif; ?>

            </ul>
          </div>

          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>

            <form>
              <div class="row g-3">
                <div class="col-12">
                  <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama" required>
                </div>

                <div class="col-12">
                  <label for="no_telp" class="form-label">No. Telephone</label>
                  <div class="input-group has-validation">
                    <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No.Telephone" required>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email (Optional)</label>
                  <input type="email" class="form-control" id="email" placeholder="contoh@cth.com">
                </div>

                <div class="col-12">
                  <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                  <input type="text" name="alamat_lengkap" class="form-control" id="alamat_lengkap" placeholder="Alamat Lengkap Anda" required>
                </div>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Pilih Metode Pembayaran</h4>
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" required>
                </div>
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit Card</label>
                  <input type="text" class="form-control" id="cc-number" required>
                </div>
              </div>

              <hr class="my-4">
              <div class="d-flex justify-content-between">
              <a href="<?= base_url(); ?>product/cart" class="w-25 btn btn-primary btn-lg"><i class="fa-solid fa-cart-shopping"></i>Kembali</a>
              <button class="w-50 btn btn-primary btn-lg" type="submit">Bayar Sekarang</button>
              </div>
            </form>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      </footer>
    </div>
