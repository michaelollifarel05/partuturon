<?php
  class data{
    var $host = "localhost";
  	var $uname = "root";
  	var $pass = "";
  	var $db = "pabi";

  	function __construct(){
  		$conn = mysqli_connect($this->host, $this->uname, $this->pass);
  		mysqli_select_db($conn,$this->db);

  	}
    function redirect(){
      if (isset($_SESSION['login'])){
        header('Location: index.php');
      }
      elseif (isset($_SESSION['admin'])) {
        header('Location: admin/admin/index.php');
      }
    }
    function conn(){
      $conn = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
      return $conn;
    }
    function sessStart(){
      session_start();
    }
    function EditDataProfile($nama,$marga,$beibe,$kelamin,$prodi,$angkatan,$id){


    }
    function login($user, $pass){
        // $data = mysqli_query($this->conn(),"SELECT * from user where username='$user' and password='$pass'");
        $check = $this->conn()->query("SELECT * from user where username='$user' and password='$pass'");
        $countrow=$check->num_rows;
        if($check){
          $_SESSION['login']=TRUE;
          $d = mysqli_fetch_array($check);
          if($d['role']==1){
            echo "admin";
            $_SESSION['admin']=TRUE;
            header('Location: Admin/admin/index.php');
          }elseif($d['role']==2 ){
            echo "user";
            $_SESSION['login'];
            $_SESSION['id']=$d['id'];
            header('Location: index.php');
          }
        }else{
          header('Location: login.php');
        }

    }
    function register($id,$pass,$gend){
      if($gend == 'L' ){
        $ok = 1;
      }else {
        $ok = 2;
      }
      $notset = 8;
      $gender = 3;
      $angkatan = 0;
      // echo $ok;
      if(mysqli_query($this->conn(),"INSERT INTO `user` VALUES (NULL, '$id', '$pass', '2')")){
        if(mysqli_query($this->conn(),"INSERT INTO `data_user` VALUES (NULL, '$id', 'aahhhh', '$notset', '$notset', 'ab', '$angkatan', 'ab', '$ok')")){
          echo " bisa";
        }
        else {
          echo "ga bisa";
        }
      }
    }
    function TambahToga($nama){
      $ok = mysqli_query($this->conn(),"INSERT INTO `toga` (`id_toga`, `nama_toga`) VALUES (NULL, '$nama')");
      if($ok){
        header('Location: inputmarga.php');
      }
      else {
        header('Location: index.php');
      }
    }
    function Tambahmarga($marga,$toga){
        $ok = mysqli_query($this->conn(),"INSERT INTO `marga` (`id_marga`,`toga`, `marga`) VALUES (NULL, '$toga','$marga')");
        if($ok){
          header('Location: inputmarga.php');
        }
        else {
          header('Location: index.php');
        }
      }

    function logout(){
      session_start();
      unset($_SESSION['admin']);
      unset($_SESSION['login']);
      unset($_SESSION['id']);
      header('Location: index.php');
    }
    function logoutAdmin(){
      session_start();
      unset($_SESSION['admin']);
      unset($_SESSION['login']);
      header('Location: ../../index.php');
    }
    function header(){
    	echo "<header class='header-area'>";
    	echo "<a href='home.php' class='logo-area'>";
    	echo "<img src='img/logo.png'>";
    	echo "</a>";
    	echo "<div class='nav-switch'>";
      echo "	<i class='fa fa-bars'></i>";
      echo " </div>";
      $this->log();
    	echo "<nav class='nav-menu'>";

    	echo "<ul>";
      $this->newLog();
    	 echo "</ul>";
    	echo "</nav>";
    	echo "</header>";
    }
    function newLog(){
      if(isset($_SESSION['login'])){
        echo "<li class='active'><a href='index.php'>Home</a></li>";
        echo "<li class=''><a href='profile.php'>Profile</a></li>";
        echo "<li class=''><a href='pencarian.php'>Pencarian</a></li>";


      }
    }
    function log(){
      if (isset($_SESSION['login'])) {
        echo "<a href='index.php?status=logout' style='color:black;'><div class='phone-number'>Log Out</div></a>";
      }else {
        echo "<a href='register.php' style='color:black;'><div class='phone-number'>SIGN UP</div></a>";
        echo "<a href='login.php' style='color:black;'><div class='phone-number'>LOG IN</div></a>";
      }
    }
    function profil(){
      $id = $this->cari("user");
      echo $id;
      $check = $this->conn()->query("SELECT id from user where username='$nama' ");
    }

    function cari($nama){
      $check = $this->conn()->query("SELECT id from user where username='$nama' ");
      if($check){
        $d = mysqli_fetch_array($check);
        return $d['id'];
      }else{
        return;
      }
    }
    function profile($int,$name){
        $check = $this->conn()->query("SELECT * from data_user where id_nama='$int'");
        if($check){
            $d = mysqli_fetch_array($check);
            if(!empty($d[$name])){
              return $d[$name];
            }
            else {
              return "<font color='red'>- Not set yet -</font>";
            }
        }
    }
    function Editprofile($int,$name){
        $check = $this->conn()->query("SELECT * from data_user where id_nama='$int'");
        if($check){
            $d = mysqli_fetch_array($check);
            if(!empty($d[$name])){
              return $d[$name];
            }
            else {
              return;
            }
        }
    }
    function hapus_toga_final($id){
      $Count_marga = $this->conn()->query("DELETE  from marga where toga='$id'");
      $Count_marga2= $this->conn()->query("DELETE  from toga where id_toga='$id'");
  }
    function hapus_toga($id){
      $check = $this->conn()->query("SELECT *  from marga where toga='$id'");
      $count = 0;
      while($f = mysqli_fetch_array($check)){
        $temp_id =  $f['id_marga'];
        $Count_marga = $this->conn()->query("SELECT count(*) as margaCount from data_user where marga='$temp_id'");$data1=mysqli_fetch_assoc($Count_marga);
        $Count_beibe = $this->conn()->query("SELECT count(*) as beibeCount from data_user where mamak='$temp_id'");$data2=mysqli_fetch_assoc($Count_beibe);
        $new = $data1['margaCount'] + $data2['beibeCount'];
        $count = $count + $new ;
      }
      return $count;
    }
    function marga($int,$name){
      $check = $this->conn()->query("SELECT * from data_user where id_nama='$int'");
      if($check){
          $d = mysqli_fetch_array($check);
          if(!empty($d[$name])){
            $idmarga = $d[$name];
            $check2=$this->conn()->query("SELECT marga from marga where id_marga='$idmarga'");
            if($check2){
              $f= mysqli_fetch_array($check2);
              return $f['marga'];
            }
            else{
              return "<font color='red'>- Marga tidak Terdaftar -</font>";
            }
          }
          else {
            return "<font color='red'>- Not set yet -</font>";
          }
      }
    }
    function jk($int,$name){
      $check = $this->conn()->query("SELECT * from data_user where id_nama='$int'");
      if($check){
          $d = mysqli_fetch_array($check);
          if(!empty($d[$name])){
            $idmarga = $d[$name];
            $check2=$this->conn()->query("SELECT jk from Jenis_kelamin where id='$idmarga'");
            if($check2){
              $f= mysqli_fetch_array($check2);
              if($f['jk']=='L'){
                return 'Laki-Laki';
              }else{
                return 'Perempuan';
              }
            }
            else{
              return "<font color='red'>- Marga tidak Terdaftar -</font>";
            }
          }
          else {
            return "<font color='red'>- Not set yet -</font>";
          }
      }
    }
    function cari_kelamin($id,$nama ){
      $temp = $this->Editprofile($id,$nama);
      if($temp==1){
        return 'Laki - laki';
      }else {
        return 'Perempuan';
      }
    }
    function count($id){
      $result = mysqli_query($this->conn(),"Select count(*) as total from  data_user where marga =  '$id'");
      $data= mysqli_fetch_assoc($result);
      return $data['total'];
    }
  }
 ?>
