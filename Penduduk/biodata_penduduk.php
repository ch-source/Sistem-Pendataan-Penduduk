<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Biodata Warga</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Biodata Warga</li>
            </ol>
          </div>

          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="card-body">
                <form method="post" action="#" role="form" method="post">
                <?php
               $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Warga') {}

              $query_warga="SELECT * FROm tbl_warga WHERE id_warga='".$data['id_warga']."'";
              $sql_warga=mysqli_query($connect, $query_warga);
              $data_warga=mysqli_fetch_array($sql_warga);
              ?>
              
              <?php
              if($data_warga['nama_warga']==''|| $data_warga['jk']=='' || $data_warga['alamat']==''|| $data_warga['no_tlpn']==''|| $data_warga['email']==''){
                echo "<div class='alert alert-danger alert-dismissible-close'>
                 Data Anda Belum Lengkap!, Silahkan Lengkapi Data Anda Dangen Cara Klik Tomnol <b>'Edit Biodata'</b>
                </div>";
                }else{
                  echo"";
                }
                ?>
                <div class="row">
                <div class="col-lg-4">ID Warga</div>
                <div class="col-lg-8">: <?php echo $data_warga['nama_warga'];?></div>
              </div>
              <div class="row">
                <div class="col-lg-4">Alamat</div>
                <div class="col-lg-8">: <?php echo $data_warga['alamat'];?></div>
              </div>
              <div class="row">
                <div class="col-lg-4">Nomor Telepon</div>
                <div class="col-lg-8">: <?php echo $data_warga['no_tlpn'];?></div>
              </div>
              <div class="row">
                <div class="col-lg-4">E-mail</div>
                <div class="col-lg-8">: <?php echo $data_warga['email'];?></div>
              </div>
              <div class="row">
                <div class="span2"><a href="dashboard_warga.php?p=edit_biodata_warga&id=<?php echo $data_warga['id_warga'];?>" class="btn btn-primary btn-rounded" style="margin-top: 15px; margin-left: 380px;"><i class="icon icon-edit"></i> Edit Biodata</a></div>
              </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->