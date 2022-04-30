 <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Detail Pinjaman Anggota</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Pinjaman Anggota</li>
            </ol>
          </div>
          
          <div class="row mb-12">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"> Detail Data Pinjaman Aset</h6>
                </div>
                <?php
                if(isset($_GET['notif'])){
                 if($_GET['notif']=="konfirmasi-gagal"){
                  echo "<div class='alert alert-danger alert-dismissible'>
                        <a style='text-decoration:none;' href='dashboard.php?p=detail_pinjaman_aset&id=".$id."' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a>
                          <i class='icon fa fa-warning'></i>Oppss!, Data Pengajuan Pinjaman<b>Gagal Dikonfirmasi.</b>
                        </div>";
                }
              }
              ?>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $id=$_GET['id'];
                       $query = "SELECT * FROM tbl_pinjaman_aset WHERE id_pinjaman='$id'";
                       $hasil = mysqli_query($connect,$query);
                       $data=mysqli_fetch_array($hasil);

                       $query1 = "SELECT * FROM tbl_warga WHERE id_warga='".$data['id_warga']."'";
                       $hasil1 = mysqli_query($connect,$query1);
                       $data1 = mysqli_fetch_array($hasil1);
                      ?>
                      <div class="row">
                       <div class="col-lg-4">ID Pinjaman</div>
                        <div class="col-lg-8"> : <?php echo $data['id_pinjaman'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Nama Peminjam</div>
                        <div class="col-lg-8"> : <?php echo $data['id_warga'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Tanggal Pengajuan</div>
                        <div class="col-lg-8"> : <?php echo $data['tgl_pengajuan'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Periode</div>
                        <div class="col-lg-8"> : <?php echo $data['periode'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Tahun</div>
                        <div class="col-lg-8"> : <?php echo $data['tahun'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Alamat</div>
                        <div class="col-lg-8"> : <?php echo $data['alamat'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Telepon</div>
                        <div class="col-lg-8"> : <?php echo $data['no_telepon'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Nama Aset</div>
                        <div class="col-lg-8"> : <?php echo $data['id_aset'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Jumlah  Aset</div>
                        <div class="col-lg-8"> : <?php echo $data['jumlah_aset'];?></div>
                      </div>
                      <div class="row">
                       <div class="col-lg-4">Status Pinjaman</div>
                        <div class="col-lg-8"> : <?php echo $data['status_pinjaman'];?></div>
                      </div>

                        <div class="box-footer">
                          <?php if ($data['status_pinjaman']==""){
                            echo "<a href='proses_konfirmasi_pengajuan.php?id=".$data['id_pinjaman']."' class='btn btn-primary'><i class='fa fa-check'></i> Konfirmasi</a>
                              ";
                           }
                           ?>
                           <?php if ($data['status_pinjaman']==""){
                            echo "<a href='proses_batal_konfirmasi.php?id=".$data['id_pinjaman']."' class='btn btn-warning'><i class='fa fa-warning'></i> Batal Konfirmasi</a>
                              ";
                           }
                           ?>
                           <?php if ($data['status_pinjaman']==""){
                            echo"<a href='dashboard.php?p=data_pinjaman_aset' class='btn btn-warning'><i class='fa fa-warning'></i> Tutup</a>";
                           }
                           ?>

                       </div>
                      </tr>
                    </tbody> 
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
