<?php
  session_start();
  include_once 'fungsi.php';
  $ok = new data();
  if(isset($_GET['status'])){
    $ok->logout();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arcade - Architecture</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
  <?php $ok->header(); ?>
	<section class="hero-section">
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="gambar/danau.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Partutur.on</h2>

					</div>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="gambar/danau2.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Partutur.on</h2>

					</div>
				</div>
			</div>
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">Partutur</div>
	</section>
	<!-- Hero section end -->





	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Cari</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/1.png" alt="">
							</div>
						</div>
						<h3>Ito</h3>
						<p>Untuk sapaan Ito, adalah panggilan bagi laki-laki kepada perempuan dan sebaliknya. Anak perempuan dari Namboru juga dipanggil Ito. Sehari-hari kalau bertemu lawan jenis yang sebaya bisalah dipanggil Ito.</p>
						<?php $ok= md5('ito') ?>
						<?php echo "<a href='cari_tutur.php?nama=".$ok." ' class='readmore'>READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/2.png" alt="">
							</div>
						</div>
						<h3>Pariban</h3>
						<p>Di dalam suku adat batak, pariban itu sebenarnya sepupu. Yang artinya anak laki-laki dari Namboru dan anak perempuan dari Tulang dapat dinikahkan (dipasaut dalam bahasa batak). ... Jadi, pariban merupakan sepupu yang dapat dinikahi.</p>
						<?php $ok= md5('pariban') ?>
						<?php echo "<a href='cari_tutur.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/3.png" alt="">
							</div>
						</div>
						<h3>Appara</h3>
						<p>Appara memiliki makna dalam istilah Batak ialah ‘Dongan Tubu’, jadi kata ‘Appara/Ampara’ digunakan bagi orang Batak yang memiliki marga toga yang sama, misalnya saya memanggil appara dengan teman yang semarga dengan toga saya.</p>
						<?php $ok= md5('appara') ?>
						<?php echo "<a href='cari_tutur.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/4.png" alt="">
							</div>
						</div>
						<h3>Bere</h3>
						<p>Dalam suku batak, bere adalah semua anak (anak laki-laki + Perempuan) dari kakak atau Anak/boru dari adik perempuan kita. Misalnya ada wanita yang ibu nya berboru sama dengan marga saya, maka saya bisa memanggilnya bere.</p>
            <?php $ok= md5('bere') ?>
            <?php echo "<a href='cari_tutur.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/5.png" alt="">
							</div>
						</div>
						<h3>Lae</h3>
						<p>Bagi orang suku batak (Toba) khusus nya kaum pria, 'lae' dapat dipanggil bila bukan satu marga nya. Dan itu juga berlaku untuk panggilan dari saudara ipar dari pihak istri atau suami jika mempunyai saudara laki - laki</p>
            <?php $ok= md5('lae') ?>
            <?php echo "<a href='cari_tutur.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>


					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="projects-section pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1>Projects</h1>
					</div>
				</div>

			</div>
		</div>
		<div id="projects-carousel" class="projects-slider">
			<div class="single-project set-bg rest" data-setbg="img/projects/1.jpg">
				<div class="project-content">
					<h2>Biggest <br> Restaurations</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg build" data-setbg="img/projects/2.jpg">
				<div class="project-content">
					<h2>Office <br> Building</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg apart" data-setbg="img/projects/3.jpg">
				<div class="project-content">
					<h2>Nice <br> Apartments</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg rest" data-setbg="img/projects/4.jpg">
				<div class="project-content">
					<h2>Biggest <br> Restaurations</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg apart" data-setbg="img/projects/2.jpg">
				<div class="project-content">
					<h2>Office <br> Building</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer-section" style="background-color: black;">


	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
