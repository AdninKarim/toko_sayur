<?php $this->load->view('navbar2'); ?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h3 class="mb-4 fw-bold">Keranjang Belanja</h3>

      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

          <?php 
          $total = 0;
          foreach ($this->cart->contents() as $items): 
            $subtotal = $items['price'] * $items['qty'];
            $total += $subtotal;
          ?>
          <div class="d-flex align-items-center justify-content-between border-bottom py-3">
            <div class="d-flex align-items-center gap-3">
              <img src="<?= base_url('uploads/'.$items['id'].'.jpg'); ?>" 
                   alt="<?= $items['name']; ?>" 
                   class="rounded-3" 
                   style="width:80px; height:80px; object-fit:cover;">
              <div>
                <h6 class="fw-semibold mb-1"><?= $items['name']; ?></h6>
                <small class="text-muted">Rp<?= number_format($items['price'],0,',','.'); ?></small>
              </div>
            </div>

            <form action="<?= base_url('product/update_cart') ?>" method="post" class="d-flex align-items-center">
              <input type="hidden" name="rowid" value="<?= $items['rowid']; ?>">
              <div class="input-group input-group-sm" style="width:110px;">
                <button type="submit" name="action" value="decrease" class="btn btn-outline-secondary">−</button>
                <input type="text" name="qty" value="<?= $items['qty']; ?>" class="form-control text-center" readonly>
                <button type="submit" name="action" value="increase" class="btn btn-outline-secondary">+</button>
              </div>
            </form>

            <div class="text-end">
              <p class="fw-semibold mb-0">Rp<?= number_format($subtotal,0,',','.'); ?></p>
              <a href="<?= base_url('product/hapus_item/'.$items['rowid']); ?>" class="text-danger small text-decoration-none">Hapus</a>
            </div>
          </div>
          <?php endforeach; ?>

          <div class="pt-4">
            <div class="d-flex justify-content-between mb-2">
              <span class="text-muted">Subtotal</span>
              <span>Rp<?= number_format($total,0,',','.'); ?></span>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="fw-bold">Total</h5>
              <h4 class="fw-bold text-primary">Rp<?= number_format($total,0,',','.'); ?></h4>
            </div>            	
            <div class="d-flex justify-content-between align-items-center mt-3">
			  <a href="<?= base_url(); ?>product" class="btn btn-outline-primary rounded-pill px-4">← Lanjut Belanja</a>
			  <a href="<?= base_url(); ?>product/pembayaran" class="btn btn-primary rounded-pill px-4">Check Out →</a>
			</div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
.card {
  background-color: #fff;
}
.btn-primary {
  background-color: #007bff;
  border: none;
}
.btn-primary:hover {
  background-color: #0069d9;
}
</style>