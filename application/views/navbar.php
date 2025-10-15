
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
      		<li class="nav-item me-4">
		        <a class="nav-link" href="<?= base_url('admin/admin') ?>">Dashboard</a>
		    </li>
		    <li class="nav-item me-4">    
		        <a class="nav-link" href="<?= base_url('admin/kategori') ?>">Kategori</a>
		    </li>
		    <li class="nav-item me-4">
		        <a class="nav-link" href="<?= base_url('admin/produk') ?>">Produk</a>
		    </li>
      </div>
      <div class="btn-group ms-auto">
			  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			    Admin
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="#">Profile</a></li>
			    <li><a class="dropdown-item" href="<?= base_url(); ?>user">Toko Sayur Online</a></li>
			    <li><hr class="dropdown-divider"></li>
			    <li><a class="dropdown-item" href="<?= base_url(); ?>auth/logout">Logout</a></li>
			  </ul>
			</div>
    </div>
  </div>
</nav>