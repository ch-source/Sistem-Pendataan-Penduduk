<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Laporan Data Kematian</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laporan Data Kematian</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px;">
              <div class="card">
                <div class="card-header">
                  <b class="card-title">Laporan Data Kematian</b>
                </div>
                <div class="card-body">
                   <form method="post" action="laporan/laporan_kematian.php" target="_blank">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tgl. Awal</label>
                      <div class="col-sm-3">
                        <input type="date" name="tglaw" class="form-control" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Akhir</label>
                      <div class="col-sm-3">
                      <input type="date" name="tglak" class="form-control" required="required">
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan Data Kematian</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO. KK</th>
                        <th>Data Keluarga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $query="SELECT*FROM tbl_umum";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                      <td><?php echo $data['no_kk'];?></td>
                      <td>
                      <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                      <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Anggota Keluarga</th>
                                <th>Jenis Kelamin</th>
                                <th>TTL</th>
                                <th>Agama</th>
                                <th>Tgl. Kematian</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $data_x = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                              if ($data_x['level'] == 'Penduduk') {}
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_kematian WHERE no_kk='".$data['no_kk']."'";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['nik'];?></td>
                                <td><?php echo $data_a['nama'];?></td>
                                <td><?php echo $data_a['jk'];?></td>
                                <td><?php echo $data_a['tempat_lahir'];?>,<?php echo $data_a['tgl_lahir'];?></td>
                                <td><?php echo $data_a['agama'];?></td>
                                <td><?php echo $data_a['tgl_kematian'];?></td>
                              </tr>
                              <?php $no_a++;}?>
                            </tbody>
                          </table>
                          </td>
                      </tr>
                      <?php }
                      ?>
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->