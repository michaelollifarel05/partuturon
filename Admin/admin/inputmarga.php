<?php include_once 'kepala.php'; ?>
<?php include_once 'inout.php'; ?>
<?php include_once 'kiri.php'; ?>
<div id="right-panel" class="right-panel">
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1> </h1>
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
                  <h1>Input Toga</h1>
              </div>
          </div>
      </div>
    </div>
    <div class="col-sm-12 col-lg-12">
      <div class="card text-black ">

          <div class="col-sm-12 col-lg-12">
            <form class="w3-container w3-card-4 w3-light-grey" method="post" action="inout.php">
              <h2>Tambah Toga</h2>
              </p>
                <label>Nama Toga</label>
                <input class="w3-input w3-border w3-round" name="toga" type="text">
              </p>
              <p> <input type="submit" name="submitToga" value="TambahkanToga"> </p>
            </form>
          </div>

          <div class="col-sm-12 col-lg-12">
            <form class="w3-container w3-card-4 w3-light-white" method="get" action="inout.php">
              <h2>Tambah Marga</h2>
              </p>
                <label>Nama Marga</label>
                <input class="w3-input w3-border w3-round" name="toga" type="text">
              </p>
              <select class="w3-select w3-border" name="option">
                <option value="" disabled selected>Pilih Toga</option>
                <?php
                $result = mysqli_query($ok->conn(), "SELECT * FROM toga ");
                while($user_data = mysqli_fetch_array($result))
                {
                    $name = $user_data['nama_toga'];
                    $id= $user_data['id_toga'];
                    echo "<option value='$id'>".$name."</option>";
                }
                ?>
              </select>
              <p> <input type="submit" name="submitMarga" value="TambahkanMarga"> </p>
            </form>
          </div>
    </div>
</div>
