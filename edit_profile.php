<?php
  session_start();
  include_once 'fungsi.php';
  $ok = new data();
  if(isset($_GET['status'])){
    $ok->logout();
  }
  $temp = $_SESSION['id'];
  if(isset($_POST['SubmitEditProfile'])){
    $ok->EditDataProfile($_POST['nama'],$_POST['marga'],$_POST['beibe'],$_POST['kelamin'],$_POST['prodi'],$_POST['angkatan'],$_POST['id']);
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
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
			<form class="" action="edit_profile.php" method="post">
        <table class="w3-table w3-striped">
          <tr>
            <td><h3>Nama</h3></td>
            <td><h3>:</h3></td>
            <td><h3> <input class="w3-input w3-border" name="nama" type="text" placeholder="<?php  $d=$ok->Editprofile($temp,'nama'); echo $d; ?>"></h3></td>
          </tr>
          <tr>
            <td><h3>Marga</h3></td>
            <td><h3>:</h3></td>
            <td><h3>
              <select id="marga" name="marga" style="width: 100%">
               <option ></option>
               <?php
                 $result = mysqli_query($ok->conn(),'Select * from marga');
                 while($user_data = mysqli_fetch_array($result)){ ?>
                 <option value="<?php echo $user_data['marga']; ?>"><?php echo $user_data['marga']; ?></option>
               <?php } ?>
              </select>
            </h3></td>
          </tr>
            <td><h3>Beibe</h3></td>
            <td><h3>:</h3></td>
            <td><h3>
              <select id="beibe" name="beibe" style="width: 100%">
               <option ></option>
               <?php
                 $result = mysqli_query($ok->conn(),'Select * from marga');
                 while($user_data = mysqli_fetch_array($result)){ ?>
                 <option value="<?php echo $user_data['marga']; ?>"><?php echo $user_data['marga']; ?></option>
               <?php } ?>
              </select>
            </h3></td>
          </tr>
        </tr>
          <td><h3>Jenis Kelamin</h3></td>
          <td><h3>:</h3></td>
          <td><h3>
            <select id="Jenis_kelamin" name="Jenis_kelamin" style="width: 100%">
             <option ></option>
                <option value="1">Laki - Laki</option>
                <option value="2">Perempuan</option>
            </select>
          </h3></td>
        </tr>
          <tr>
            <td><h3>Prodi</h3></td>
            <td><h3>:</h3></td>
            <td><h3> <input class="w3-input w3-border" name="prodi" type="text" placeholder="<?php  $d=$ok->Editprofile($temp,'prodi'); echo $d; ?>"></h3></td>
          </tr>
          <tr>
            <td><h3>Angkatan</h3></td>
            <td><h3>:</h3></td>
            <td><h3> <input class="w3-input w3-border" name="angkatan" type="text" placeholder="<?php  $d=$ok->Editprofile($temp,'angkatan'); echo $d; ?>"></h3></td>
          </tr>
          <tr>
            <td> <input type="hidden" name="id" value=" <?php echo $temp ?> "> </td>
            <td></td>
            <td> <input type="submit" name="SubmitEditProfile" value="Submit"> </td>
          </tr>
        </table>
      </form>
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
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#marga').select2({
        width: 'resolve'
      });
  });
  $(document).ready(function() {
      $('#beibe').select2({
        width: 'resolve'
      });
  });

  $(document).ready(function() {
      $('#Jenis_kelamin').select2({
        width: 'resolve'
      });
  });
  </script>


</body>
</html>
