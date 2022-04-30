<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800"> Detail Data Penduduk</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Data Penduduk</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                 <div class="card-header" style="text-align: right;">
                <h6 class="m-0 font-weight-bold text-dark"></h6><a href="dashboard.php?p=data_penduduk" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></a>
                </div>
                <div class="card-body">
                  <form method="post" action="#" role="form" method="post">
                <?php
                $id=$_GET['id'];
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
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_penduduk WHERE no_kk='$id'";
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