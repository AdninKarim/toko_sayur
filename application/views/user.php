<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Sayur Online</title>
	
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">

<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>


<!-- My Style -->
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">


</head>
<body>
<!-- Navbar Start -->
<nav class="navbar">
	<a href="#" class="navbar-logo">Pecinta <span>Sayur</span></a>

	<div class="navbar-nav">
		<a href="#home">Home</a>
		<a href="#about">Tentang Kami</a>
		<a href="#menu">Menu</a>
		<a href="#contact">Kontak</a>
	</div>


	<div class="navbar-extra">
		<a href="#" id="menu-strip"><i data-feather="menu"></i></a>
	</div>
	<div class="navbar-extra">
		<?= $username; ?>
		<a href="<?php echo site_url('auth/logout') ?>" id="logout"><i data-feather="log-out"></i></a>
	</div>
</nav>


<!-- Navbar End -->

<!-- Hero Section Start -->
<section class="hero" id="home">
	<main class="content">
		<h1>Pilihan <span>Sayur</span> Terbaik</h1>
		<p><b>Halo <?= $username; ?>, Sudah siap untuk berbelanja?</b></p>
		<a href="<?= base_url('product') ?>" class="cta">Beli Sekarang</a>
		<a href="<?= base_url('info') ?>" class="cta">Apa yang Baru?</a>
	</main>
</section>

<!-- Hero Section End -->

<!-- About Section Start -->
<section id="about" class="about">
	<h2><span>Tentang</span> Kami</h2>

	<div class="row">
		<div class="about-img">
			<img src="img/tentang-kami.jpg" alt="Tentang Kami">
		</div>
		<div class="content">
			<h3>Kenapa pilih Pecinta Sayur?</h3>
		<p>Produk kami merupakan produk sayur pilihan terbaik yang pastinya tidak akan membuat anda kecewa.</p>
		<p>Produk yang berkualitas, Produk unggulan, dan Produk andalan untuk yang mencari kebutuhan dalam bahan konsumsi.</p>

		</div>
	</div>

</section>

<!-- About Section End -->

<!-- Menu Section Start -->
<section id="menu" class="menu">
	<h2><span>Menu</span> Kami</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt.</p>

	<div class="row">
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/1.jpg')  ?>" alt="Bawang Bombay" class="menu-card-img">
			<h3 class="menu-card-title">- Bawang Bombay -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>	
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/2.jpg')  ?>" alt="Wortel" class="menu-card-img">
			<h3 class="menu-card-title">- Wortel -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/3.jpg')  ?>" alt="Tomat" class="menu-card-img">
			<h3 class="menu-card-title">- Tomat -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/4.jpg')  ?>" alt="Sawi" class="menu-card-img">
			<h3 class="menu-card-title">- Sawi -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/5.jpg')  ?>" alt="Bayam" class="menu-card-img">
			<h3 class="menu-card-title">- Bayam -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>
		<div class="menu-card">
			<img src="<?= base_url('assets/img/menu/6.jpg')  ?>" alt="Kentang" class="menu-card-img">
			<h3 class="menu-card-title">- Kentang -</h3>
			<p class="menu-card-price">500g/IDR 10k</p>
		</div>
	</div>


</section>



<!-- Menu Section End -->


<!-- Contact Section Start -->
<section id="contact" class="contact">
	<h2><span>Kontak</span> Kami</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt.</p>

	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.114388031652!2d112.5291832742584!3d-7.88309927840483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78819de865cfdb%3A0xd0a57ce14c474cf4!2sPasar%20Sayur%20Kota%20Batu!5e0!3m2!1sen!2sid!4v1754448268769!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
	
	<form action="">
		<div class="input-group">
			<i data-feather="user"></i>
		<input type="text" placeholder="nama">
		</div>
		<div class="input-group">
			<i data-feather="mail"></i>
		<input type="text" placeholder="email">
		</div>
		<div class="input-group">
			<i data-feather="phone"></i>
		<input type="text" placeholder="no hp">
		</div>
		<button type="submit" class="btn">Kirim Pesan</button>
	</form>


	</div>

</section>



<!-- Contact Section End -->


<!-- Footer Start -->
<footer>
	<div class="social">
		<a href="#"><i data-feather="instagram"></i></a>
		<a href="#"><i data-feather="twitter"></i></a>
		<a href="#"><i data-feather="facebook"></i></a>
		<a href="#"><i data-feather="youtube"></i></a>
	</div>
	
	<div class="links">
		<a href="#home">Home</a>
		<a href="#about">Tentang Kami</a>
		<a href="#menu">Menu</a>
		<a href="#contact">Kontak</a>
	</div>

	<div class="credits">
		<p>Created by <a href="">M. Adnin</a>. | &copy; 2025</p>
	</div>
</footer>

<!-- Footer End -->


<!-- Feather Icons -->
	<script>
      feather.replace();
    </script>

<!-- My Javascript -->
	<script src="<?= base_url('assets/js/script.js')?>"></script> 
</body>
</html>