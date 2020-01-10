<?php
  include_once 'fungsi.php';
  $o  = new data();
  $o-> sessStart();
  if (isset($_)) {
    // code...
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <title>Creative Colorlib SignUp Form</title>
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
 		<h1>Creative SignUp Form</h1>
 		<div class="main-agileinfo">
 			<div class="agileits-top">
          Username : <input type="text" name="nama" value="" id="name"><br>
          Password : <input type="password" name="pass" value="" id="password"><br>
          Re-type Password : <input type="password" name="pass2" vaslue="" id="cpassword">
          Gender : <input type="radio" name="gender" value="L" id="">Laki-laki
          <input type="radio" name="gender" value="P" id="" required>Perempuan
          <input type="submit" name="submit" value="submit" id="register">
      	<p>have an Account? <a href="login.php"> Login Now!</a></p>
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
 <script>
 $(document).ready(function(){
    $('#register').click(function(){
      var a = document.createElement('a');
      var radios = document.getElementsByName("gender");
      var name = $("#name").val();
      var password = $("#password").val();
      var cpassword = $("#cpassword").val();

      var radioValue = $("input[name='gender']:checked").val();
      if (name == '' || password == '' || cpassword == ''  || (radios[0].checked + radios[1].checked == 0 )) {
        alert("Please fill all fields...!!!!!!");
      } else if (!(password).match(cpassword)) {
        alert("Password Tidak Sama");
      } else {
        window.location = "test.php?username="+name+"&pass="+password+"&gender="+radioValue;
      }
    });
});
 </script>
 </html>
