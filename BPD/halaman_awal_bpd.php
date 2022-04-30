<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Dashboard Ketua BPD</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Dashboard</li>
            </ol>
          </div>
          <?php
              if(isset($_GET['notif'])){
                if($_GET['notif']=="login-sukses"){
                  echo "<div class='alert alert-success alert-dismissible'>
                        <a style='text-decoration:none;' href='dashboard_bpd.php?p=halaman_awal_bpd' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a>
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
                  <h4>Selamat Datang Di Sistem Informasi Pengelolan Aset Desa Pada Kantor Desa Peninjoan</h4>  
                </div>
              </div>
            </div>
          </div>
          <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
                <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  
                </tr>
                </thead>
                <tbody>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        </div>
        <!---Container Fluid-->