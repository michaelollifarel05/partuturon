
<?php
  include_once '../../fungsi.php';
  $ok=new data();
  // $ok->sessStart();
  if(isset($_POST['submitToga'])){
    $ok->TambahToga($_POST['toga']);
  }
  if(isset($_GET['submitMarga'])){
    $ok->TambahMarga($_GET['toga'],$_GET['option']);
  }
 ?>
