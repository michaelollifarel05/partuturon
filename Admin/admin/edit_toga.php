<?php include_once 'kepala.php'; ?>
<?php include_once 'inout.php'; ?>
<?php include_once 'kiri.php'; ?>
<?php
  $key = md5('edit');
  if(isset($_GET[$key]) && $_GET[$key] !=''){
    if($ok->hapus_toga($_GET[$key]) > 0 ){
      echo "Tidak dapat menghapus toga, karena masih ada user yang menggunakan toga tersebut!!";
    }else {
      $ok->hapus_toga_final($_GET[$key]);
    }

  }
  else {
    echo "tidak";
  }
 ?>
<div id="right-panel" class="right-panel">
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1></h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                  <ol class="breadcrumb text-right">
                      <li class="active"></li>
                  </ol>
              </div>
          </div>
      </div>
  </div>
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1></h1>
              </div>
          </div>
      </div>
   </div>
   <div class="col-sm-12 col-lg-12">

   </div>
   <br>

</div>
