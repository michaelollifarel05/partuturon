<?php
  include_once 'fungsi.php';
  $db = new data();
  if(isset($_GET['username']))
  $db->register($_GET['username'],$_GET['pass'],$_GET['gender']);
?>
