<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan Pindah</h6>
                </div>
                <div class="card-body">
                  <?php
                  include"koneksi.php";
                  $id=$_GET['id'];
                  $query="SELECT * FROM tbl_penduduk_masuk WHERE id_pm='$id'";
                  $sql=mysqli_query($connect, $query);
                  $data=mysqli_fetch_array($sql);
                  ?>
                  <?php
              if($data['sk']==''){
                echo "<div class='alert alert-danger alert-dismissible'>
                Surat Keterangan Belum Ada!</b>
                </div>";
                echo'<div class="row">
                    <div class="col-md-12">
                       <a href="dashboard.php?p=data_penduduk_masuk" class="btn btn-danger">Tutup</a>
                    </div>
                  </div>';
                }else{
                  echo'
                  <div class="row">
                    <div class="col-md-12" style="margin-bottom: 4px;">
                       <embed src="surat/'.$data['sk'].'" type="application/pdf" width="98%"" height="600"></embed>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <a href="dashboard.php?p=data_penduduk_masuk" class="btn btn-danger">Tutup</a>
                    </div>
                  </div>';
                }?>
                  
                 </div>
                </div>
              </div>
            </div>
          </div>
