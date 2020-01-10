<?php include_once 'kepala.php'; ?>
<?php include_once 'kiri.php'; ?>
<?php
  if(isset($_GET[md5('marga')])){
     $nama = $_GET[md5('marga')];

  }else {
    echo "<script>document.location.href='index.php'</script>";
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
                  <h1>Daftar Toga</h1>
              </div>
          </div>
      </div>
   </div>
   <div class="col-sm-12 col-lg-12">
     <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">No
            </th>
            <th class="th-sm">Nama Toga
            </th>
            <th class="th-sm">Action
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $a =1;
          $ok = new data();
          $result = mysqli_query($ok->conn(),"Select * from marga where toga = $nama" );
          while($user_data = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $a; ?></td>
              <td> <?php echo $user_data['marga']; $a++; ?></td>
              <td> <a href="edit_toga.php?<?php echo md5('edit')."=".$user_data['id_marga'] ?>">Hapus</a> | <a href="hapus.php?id=<?php echo $user_data['id_toga'] ?>">Edit</a></td>
            </tr>
          <?php };?>
        </tbody>
        <tfoot>
          <tr><th>No</th>
            <th>Nama Toga
            </th>
          </tr>
        </tfoot>
      </table>
   </div>
   <br>

</div>
<?php include_once('kaki.php') ?>
