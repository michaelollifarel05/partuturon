<?php
  session_start();
  include_once 'fungsi.php';
  $ok = new data();
  if(isset($_GET['status'])){
    $ok->logout();
  }
  $temp = $_SESSION['id'];

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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="gambar/danau.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Profile</h2>

					</div>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="gambar/danau2.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Profile</h2>

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
        <?php $d=$ok->profile($temp,'nama'); ?>
				<?php  echo "<h2>".$d."</h2>"; ?>
			</div>
      <table class="w3-table w3-striped">
        <tr>
          <td><h3>Nama</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->profile($temp,'nama'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td><h3>Marga</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->marga($temp,'marga'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td><h3>Beibe</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->marga($temp,'mamak'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td><h3>Jenis Kelamin</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->jk($temp,'Jenis_kelamin'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td><h3>Prodi</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->profile($temp,'prodi'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td><h3>Angkatan</h3></td>
          <td><h3>:</h3></td>
          <td><h3><?php  $d=$ok->profile($temp,'angkatan'); echo $d; ?></h3></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td> <a href="edit_profile.php"><button class="w3-button w3-red">Edit</button></a></td>
        </tr>
      </table>
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
