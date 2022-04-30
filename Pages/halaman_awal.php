<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Dashboard Admin</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Dashboard</li>
            </ol>
          </div>
          <?php
              if(isset($_GET['notif'])){
                if($_GET['notif']=="login-sukses"){
                  echo "<div class='alert alert-success alert-dismissible'>
                        <a style='text-decoration:none;' href='dashboard.php?p=halaman_awal' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a>
                          <i class='icon fa fa-check'></i> Anda Berhasil Login.</b>
                        </div>";
                }
              }
              ?>

          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
              <div class="card mb-12">
                <div class="card-body" style="text-align: center;">
                  <h4>Selamat Datang Di Sistem Informasi Pengelolan Administrasi Kependudukan Pada Kantor Desa Meler</h4>
                </div>
              </div>
            </div>
            </div>
            <div class="row mb-3">
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">DATA KELAHIRAN</div>
                      <?php 
                         include"koneksi.php";
                         $order="SELECT * FROM tbl_kelahiran";
                          $query_order=mysqli_query($connect, $order);
                          $data_order=array();
                          while(($row_order=mysqli_fetch_array($query_order)) !=null){
                          $data_order[]=$row_order;
                          }
                          $count=count($data_order); 
                         ?>
                      <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count;  ?> Data Kelahiran</div>
                    </div>
                    <div class="col-auto">
                      <a href="dashboard.php?p=data_kelahiran"><i class="fas fa-fw fa-book-open fa-2x text-info" style="margin-top: 18px;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">DATA PENDUDUK MASUK</div>
                      <?php 
                         include"koneksi.php";
                         $order_b="SELECT * FROM tbl_penduduk_masuk WHERE status_penduduk='Valid'";
                          $query_order_b=mysqli_query($connect, $order_b);
                          $data_order_b=array();
                          while(($row_order_b=mysqli_fetch_array($query_order_b)) !=null){
                          $data_order_b[]=$row_order_b;
                          }
                          $count_b=count($data_order_b); 
                         ?>
                      
                      <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_b;  ?> Data Penduduk Masuk</div>
                    </div>
                    <div class="col-auto">
                      <a href="dashboard.php?p=data_penduduk_masuk"><i class="fas fa-fw fa-file fa-2x text-danger" style="margin-top: 18px;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">DATA KEMATIAN</div>
                      <?php 
                         include"koneksi.php";
                         $order_a="SELECT * FROM tbl_kematian";
                          $query_order_a=mysqli_query($connect, $order_a);
                          $data_order_a=array();
                          while(($row_order_a=mysqli_fetch_array($query_order_a)) !=null){
                          $data_order_a[]=$row_order_a;
                          }
                          $count_a=count($data_order_a); 
                         ?>
                      <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_a;  ?> Data Kematian</div>
                    </div>
                    <div class="col-auto">
                      <a href="dashboard.php?p=data_kematian"><i class="fas fa-fw fa-users fa-2x text-success" style="margin-top: 18px;"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">DATA PENDUDUK KELUAR</div>
                      <?php 
                         include"koneksi.php";
                         $order_d="SELECT * FROM tbl_penduduk_keluar WHERE status_pk='Valid'";
                          $query_order_d=mysqli_query($connect, $order_d);
                          $data_order_d=array();
                          while(($row_order_d=mysqli_fetch_array($query_order_d)) !=null){
                          $data_order_d[]=$row_order_d;
                          }
                          $count_d=count($data_order_d); 
                         ?>
                      
                      <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_d;  ?> Data Penduduk Keluar</div>
                    </div>
                    <div class="col-auto">
                      <a href="dashboard.php?p=data_penduduk_keluar"><i class="fas fa-fw fa-book fa-2x text-warning" style="margin-top: 18px;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          include"koneksi.php";
            $order="SELECT * FROM tbl_penduduk_keluar WHERE status_pk=''";
            $query_order=mysqli_query($connect, $order);
            $data_order=array();
            while(($row_order=mysqli_fetch_array($query_order)) !=null){
              $data_order[]=$row_order;
            }
            $count=count($data_order);
            if ($count==0) {
              echo"";
            }else{
              echo" <div class='callout callout-warning'>
              <p> <i class='fa fa-comments'></i> <b>".$count."</b> Data Penduduk Keluar<b> Belum Dikonfirmasi</b>.<a style='margin-left:470px;' href='dashboard.php?p=data_pengajuan_berkas' class='btn btn-info btn-sm'> Lihat Data Penduduk Keluar</a> </p>
            </div>";
            }
          ?>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->