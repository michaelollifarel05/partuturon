<?php
  session_start();
  include_once 'fungsi.php';
  if(isset($_POST['login'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    $ok  = new data();
    $ok->login($nama,$pass);
  }
  // $chek = new data();
  // $chek->redirect();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <title>Login Form</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
 <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
 <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 </head>
 <body>
 	<!-- main -->
 	<div class="main-w3layouts wrapper">
 		<h1>Login Form</h1>
 		<div class="main-agileinfo">
 			<div class="agileits-top">
        <form action="login.php" method="post">
          Username: <input type="text" name="username"  required><br>
          Password: <input type="password" name="password"  required><br>
          <input type="submit" name="login" value="LOG IN"><br><br>
        </form>
      	<p>dont have an account? <a href="register.php"> Register Now!</a></p>
 			</div>
 		</div>
 		<!-- copyright -->
 		<!-- //copyright -->
 		<ul class="colorlib-bubbles">
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
      <li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 			<li></li>
 		</ul>
 	</div>

 </body>
 </html>
