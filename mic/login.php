<?php
  include_once 'koneksi.php';
  include_once 'fungsi.php';
  if(isset($_POST['login'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    $ok  = new fungsi();
    $ok->login($nama,$pass);
  }
  ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="login-background">
     <div class="login-header">
     <img src="gambar/gorga1.jpg" class="img-logo">
     <p>Login Area</p>

    </div>

    <div class="login-body">
        <form action="login.php" method="post">
          <input type="text" name="username" placeholder="username" required><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <input type="submit" name="login" value="LOG IN"><br><br>
        </form>
        <a href="register.php"> <button class="button">Daftar Akun</button></a><br><br>
        <a href="index.html" style="color: white;"> Home</a>
    </div>


</div>
</body>
<
