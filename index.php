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


	<!-- Intro section start -->
	<section class="intro-section pt100 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">Kami membuat Web Partuturan	<span>Batak Toba</span></h2>
					<p>Batak Toba adalah suatu kesatuan kultural. Batak Toba tidak mesti tinggal di wilayah geografis Toba, meski asal-muasal adalah Toba. Sebagaimana suku-suku bangsa lain, suku bangsa Batak Tobapun bermigrasi kedaerah-daerah yang lebih menjanjikan penghidupan yang labih baik. Contoh, mayoritas penduduk asli Silindung adalah marga-marga Hutabarat, Panggabean, Simorangkir, Hutagalung, Hutapea dan Lumbantobing. Padahal ke-enam marga tersebut adalah keturunan Guru Mangaloksa yang adalah salah- seorang anak Raja Hasibuan di wilayah Toba. Demikian pula marga Nasution yang kebanyakan tinggal wilayah Padangsidimpuan adalah saudara marga Siahaan di Balige, tentu kedua marga ini adalah turunan leluhur yang sama. Batak Toba sebagai kesatuan kultural pasti dapat menyebar ke berbagai penjuru melintasi batas-batas geografis asal leluhurnya, si Raja Batak yakni wilayah Toba yang secara spesifik ialah Desa Sianjur Mulamula terletak di lereng Gunung Pusuk Buhit, kira-kira 45 menit berkendara dari Pangururan, Ibu kota Kabupaten Samosir, sekarang. </p>

				</div>
				<div class="col-lg-5 pt-4">
					<img src="gambar/batak.jpg." alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Toga</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/1.png" alt="">
							</div>
						</div>
						<h3>Sinaga</h3>
						<p>Asal usul marga SINAGA dan keturunannya dari si RAJA BATAK
Awal mulanya marga sinaga yang dimulai dari si RAJA BATAK

SI RAJA BATAK diketahui mempunyai keturunan dua orang putra :
1. GURU TATEA BULAN
2. RAJA ISOMBAON ...</p>
            <?php $ok= md5('sinaga') ?>
            <?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/2.png" alt="">
							</div>
						</div>
						<h3>Somanimbil</h3>
						<p>Leluhur Marga Siahaan,Simanjuntak dan Hutagaol adalah Tuan Somanimbil. Sedangkan keturunan Somba Debata atau Raja Siahaan memakai marga Siahaan dan berdomisili di Balige, Sibuntuon dan daerah lainnya ...</p>
            <?php $ok= md5('somanimbil') ?>
            <?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/3.png" alt="">
							</div>
						</div>
						<h3>Naimarata</h3>
						<p>Apakah Benar arti dari "Naimarata"=Pomparan Oppu Na Lima atau Kumpulan Marga Tertua Dari Marga Batak?
              Borbor adalah keturunan Saribu Raja, sedangkan Borbor Marsada adalah kumpulan Pinompar Op Saribu Raja dan ...</p>
              <?php $ok= md5('naimarata') ?>
              <?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/4.png" alt="">
							</div>
						</div>
						<h3>Parna</h3>
						<p>Bagi masyarakat Bangso Batak dan para anthropolog/etnolog telah banyak mengkaji keberadaan marga-marga keturunan Raja Nai Ambaton yang teguh memegang amanat leluhurnya dalam membangun ikatan persaudaraan pada berbagai wilayah di Indonesia ...</p>
            <?php $ok= md5('parna') ?>
            <?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/5.png" alt="">
							</div>
						</div>
						<h3>Sipituama</h3>
						<p>Sejarah Ompu Tuan Situmorang Sipitu Ama
Ompu Tuan Situmorang adalah anak dan Ompunta Siraja Lontung dan Ibunya Siboru Pareme. Siraja Lontung anak dan Tuan Saribu Raja dan Ibunya Siboru Pareme. Ompu Tuan Situmorang adalah Cucu dan Tuan Saribu Raja ...</p>
<?php $ok= md5('parna') ?>
<?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/6.png" alt="">
							</div>
						</div>
						<h3>Silahisabungan</h3>
						<p>Pasca dekade Poda Sagu-sagu Marlangan, maka keturunan Silahisabungan akhirnya tergolong dalam marga-marga masing-masing. Satu hal yang berbeda dengan umumnya komunitas di Toba, marga-marga satu keturunan telah saling mengawini. Hal ini dapat difahami mengingat geografis Toba sebelumnya ...</p>
            <?php $ok= md5('parna') ?>
            <?php echo "<a href='sejarah_toga.php?nama=".$ok." ' class='readmore' >READ MORE</a>" ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->



	<!-- CTA section start -->
	<!-- <section class="cta-section pt100 pb50">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title">Dare to dream of a modern <span>home</span></h2>
					<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellentesque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris malesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. Curabitur finibus dolor vel lectus pretium interdum a eget ante. </p>
					<div class="cta-icons">
						<div class="cta-img-icon">
							<img src="img/icon/light/1.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/light/2.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/color/3.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- CTA section end -->


	<!-- Milestones section Start -->
	<!-- <section class="milestones-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>14</h2>
						<p>Years <br>of <br>Experience</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>237</h2>
						<p>Projects <br>Taken</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>11k</h2>
						<p>Twitter <br>Followers</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>12</h2>
						<p>Awards <br>Won</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Milestones section end -->


	<!-- Projects section start -->
	<div class="projects-section pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1>Projects</h1>
					</div>
				</div>
			<!-- 	<div class="col-lg-9">
					<ul class="projects-filter-nav">
						<li class="btn-filter" data-filter="*">All</li>
						<li class="btn-filter" data-filter=".rest">Restaurations</li>
						<li class="btn-filter" data-filter=".build">Buildings</li>
						<li class="btn-filter" data-filter=".apart">Apartments</li>
					</ul>
				</div> -->
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
	<!-- Projects section end -->


	<!-- Clients section start -->
	<!-- <div class="client-section spad">
		<div class="container">
			<div id="client-carousel" class="client-slider">
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/1.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/2.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/3.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/4.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/5.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Clients section end -->


	<!-- Footer section start -->
	<footer class="footer-section" style="background-color: black;">
		<!-- <div class="footer-social">
			<div class="social-links">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div> -->
		<!-- <div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-3">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Job Aplications</a></li>
									<li><a href="#">Site Map</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="#">Privacy</a></li>
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Newsletter</a></li>
									<li><a href="#">Clients Testimonials</a></li>
									<li><a href="#">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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
