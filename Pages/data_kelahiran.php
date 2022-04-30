<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Kelahiran</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Kelahiran</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kelahiran</h6>
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
                                <th>Status Hub. Keluarga</th>
                                <th>Kewarganegaraan</th>
                                <th>RT/RW</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten</th>
                                <th>Provinsi</th>
                                <th>SKK</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_kelahiran WHERE no_kk='".$data['no_kk']."'";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['nik'];?></td>
                                <td><?php echo $data_a['nama'];?></td>
                                <td><?php echo $data_a['jk'];?></td>
                                <td><?php echo $data_a['tempat_lahir'];?>,<?php echo $data_a['tgl_lahir'];?></td>
                                <td><?php echo $data_a['agama'];?></td>
                                <td><?php echo $data_a['status_hub_keluarga'];?></td>
                                <td><?php echo $data_a['kewarganegaraan'];?></td>
                                <td><?php echo $data_a['rt'];?> / <?php echo $data_a['rw']; ?></td>
                                <td><?php echo $data_a['alamat'];?></td>
                                <td><?php echo $data_a['kelurahan'];?></td>
                                <td><?php echo $data_a['kecamatan'];?></td>
                                <td><?php echo $data_a['kabupaten']; ?></td>
                                <td><?php echo $data_a['provinsi']; ?></td>
                                <td><a href="dashboard.php?p=surat_kelahiran&id=<?php echo $data_a['id_kelahiran'];?>" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a></td>
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