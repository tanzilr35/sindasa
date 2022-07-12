<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="assets/img/landing4.png" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h1 class="gambar1">
					Cegah Stunting Itu Penting Demi SDM <br>Unggul Generasi Penerus Bangsa!
				</h1>
				<br>
				<a class="btn btn-primary btn-xl text-uppercase" href="<?= base_url('cekstunting') ?>">Get Started</a>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="assets/img/makanan.jpg" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="gambar2">
					SINDASA Membantu penanganan dan pengamatan <br>gizi anak dengan tepat dan cepat
				</h4>
				<br><br>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="assets/img/dirumah.jpeg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="gambar2">
					SINDASA Mudah digunakan dan<br> dapat dibuka dimana saja
				</h4>
				<br><br>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- tentang kami -->
<section class="tentang" id="profil">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tentang Kami</h2>
		</div>
		<div class="row pl-5 pr-5">
			<div class="col-lg-5 col-sm-12">
				<img class="about" src="<?= base_url() ?>assets/img/amicodokter.png" />
			</div>
			<div class="col-lg-7 col-sm-12">
				<p class="text-center">
					SINDASA merupakan Sistem Input Data Stunting Anak.
					SINDASA dapat membantu kita untuk mengetahui kondisi stunting pada anak.
					Melalui SINDASA akses input data anak menjadi lebih mudah dan cepat.
					Mari wujudkan Indonesia tanpa stunting bersama SINDASA!
				</p>
			</div>
		</div>
	</div>
</section>

<!-- galeri -->
<section class="galeri" id="galeri">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Galeri</h2>
		</div>
		<div class="row">
			<?php foreach ($galeri_lp as $data) : ?>
				<div class="col-lg-4 col-sm-6">
					<div class="portfolio-item">
						<a class="portfolio-link" data-toggle="modal" href="#myPopup<?= $data['id_galeri']; ?>">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
							</div>
							<!-- <img class="img-fluid" src="<?= base_url() . 'assets/galeri/' . $data->gambar; ?>" /> -->
							<img id="myImg" class="img-fluid" src="<?= base_url() ?>assets/galeri/<?= $data['gambar'] ?>" />
						</a>
						<div class="portfolio-caption">
							<div class="portfolio-caption-heading"><?= $data['judul_galeri']; ?></div>
							<!-- <div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div> -->
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="col-12 text-center">
				<a href="<?= base_url('galeri_home') ?>" class="btn btn-success">View More</a>
			</div>
		</div>
	</div>
</section>

<!-- popup galeri -->
<?php foreach ($galeri_lp as $data) : ?>
	<div class="modal fade" id="myPopup<?= $data['id_galeri']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<span><strong><?= $data['judul_galeri']; ?></strong></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="white-text">&times;</span>
					</button>
				</div>
				<div class="container">
					<div class="modal-body">
						<div class="row">
							<div class="col-7">
								<img src="<?= base_url() ?>assets/galeri/<?= $data['gambar'] ?>" class="img-fluid" alt="">
							</div>

							<div class="col-5">
								<p><?= $data['deskripsi_galeri']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>

<!-- kontak -->
<section class="kontak" id="kontak">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">SINDASA</h2>
		</div>
		<div class="row text-center pl-5 pr-5">
			<p>Membantu Masyarakat untuk dapat melakukan pengecekan stunting pada anak secara mandiri.
				Melalui website ini ibu dan anak dapat mengetahui kondisi stunting anak sejak dini.</p>
		</div>
		<div class="text-center">
			<p>Jl. Raya Solo, Jiwan Utara, Jiwan, Kec. Jiwan, Kabupaten Madiun, Jawa Timur 63161</p>
		</div>
		<div class="text-center my-3 my-lg-0">
			<a class="btn btn-dark btn-social mx-2" href="https://dinkes.madiunkab.go.id/" target="_blank"><i class="fab fa-whatsapp"></i></a>
			<a class="btn btn-dark btn-social mx-2" href="https://dinkes.madiunkab.go.id/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/dinkeskabmadiun/" target="_blank"><i class="fab fa-instagram"></i></a>
			<a class="btn btn-dark btn-social mx-2" href="https://dinkes.madiunkab.go.id/" target="_blank"><i class="fab fa-twitter"></i></a>
		</div>
	</div>
</section>