<style>
	.btn-secondary{
		background-color: #8FA31E;
		border-color: #8FA31E;
	}

	.dropdown-menu .dropdown-item:hover{
		background-color: #74c272;
		color: #fff;
	}
</style>

<nav class="navbar navbar-expand-lg navbar-dark clr1">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
      		<li class="nav-item me-4">
		        <a class="nav-link" href="<?= base_url('user') ?>">Home</a>
		    </li>
		    <li class="nav-item me-4">
		        <a class="nav-link" href="<?= base_url('product') ?>">Produk</a>
		    </li>
		    <li class="nav-item me-4">    
		        <a class="nav-link" href="<?= base_url('info') ?>">News</a>
		    </li>
		 </ul>
    </div>

    <div class="navbar">
    	<ul class=" nav navbar-nav navbar-right">
    		<li>
    			<i class="fa-solid fa-cart-shopping"><?php $keranjang = ': ' .$this->cart->total_items(); ?></i>
    			<?= $keranjang; ?>
    		</li>
    	</ul>
    	
    </div>
    <div class="btn-group">
		  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		    <?= $this->session->userdata('username') ?? 'Guest'; ?>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a class="dropdown-item" href="<?= base_url('profile') ?>">Profil</a></li>
		    <li><a class="dropdown-item" href="<?= base_url(); ?>product/cart">Keranjang Belanja</a></li>
		    <li><hr class="dropdown-divider"></li>
		    <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
		  </ul>
		</div>
  </div>
</nav>