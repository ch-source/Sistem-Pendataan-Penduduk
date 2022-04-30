<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Penduduk</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
            </ol>
          </div>
          <div class="row">
          <a href="dashboard_penduduk.php?p=input_anggota_keluarga" class="btn btn-primary btn-rounded" style="margin-bottom: 10px; margin-left: 20px;"><i class="fa fa-plus"></i> Tambah Angggota Keluarga</a>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                
                <div class="card-body">
                  <form method="post" action="#" role="form" method="post">
                <?php
               $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Penduduk') {
                  $id=$data['no_kk'];
                }

              $query_warga="SELECT * FROM tbl_umum WHERE no_kk='$id'";
              $sql_warga=mysqli_query($connect, $query_warga);
              $data_warga=mysqli_fetch_array($sql_warga);

              ?>
                <h6 style="text-align: center;"><font size="10"><b>KARTU KELUARGA</b></font></h6>
                <h3 style="text-align: center;"><b>No. <?php echo $id;?></b></h3>
              <hr>
                <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Nama K. Keluarga</div>
                <div class="col-lg-8">: <?php echo $data_warga['nama_kk'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Alamat</div>
                <div class="col-lg-8">: <?php echo $data_warga['alamat'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">RT/RW</div>
                <div class="col-lg-8">: <?php echo $data_warga['rt'];?>/<?php echo $data_warga['rw'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Kelurahan</div>
                <div class="col-lg-8">: <?php echo $data_warga['kelurahan'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Kecamatan</div>
                <div class="col-lg-8">: <?php echo $data_warga['kecamatan'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Kabupaten</div>
                <div class="col-lg-8">: <?php echo $data_warga['kabupaten'];?></div>
              </div>
              <div class="row" style="margin-left: 20px;">
                <div class="col-lg-2">Provinsi</div>
                <div class="col-lg-8">: <?php echo $data_warga['provinsi'];?></div>
              </div>
              </form>
                <div class="table-responsive p-3">
                      <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Anggota Keluarga</th>
                                <th>Jenis Kelamin</th>
                                <th>TTL</th>
                                <th>Agama</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Status Kawin</th>
                                <th>Status Hub. Keluarga</th>
                                <th>Kewarganegaraan</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_penduduk  WHERE no_kk='".$id."' ORDER BY no_kk";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['nik'];?></td>
                                <td><?php echo $data_a['nama'];?></td>
                                <td><?php echo $data_a['jk'];?></td>
                                <td><?php echo $data_a['tempat_lahir'];?>,<?php echo $data_a['tgl_lahir'];?></td>
                                <td><?php echo $data_a['agama'];?></td>
                                <td><?php echo $data_a['pendidikan'];?></td>
                                <td><?php echo $data_a['pekerjaan'];?></td>
                                <td><?php echo $data_a['status_kawin'];?></td>
                                <td><?php echo $data_a['status_hub_keluarga'];?></td>
                                <td><?php echo $data_a['kewarganegaraan'];?></td>
                                <td><a href="dashboard_penduduk.php?p=edit_anggota_keluarga&id=<?php echo $data_a['nik'];?>" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                              </tr>
                              <?php $no_a++;}?>
                            </tbody>
                          </table>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
        <!---Container Fluid-->