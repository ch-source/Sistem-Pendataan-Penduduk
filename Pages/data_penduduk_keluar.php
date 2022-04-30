<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Penduduk Keluar</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penduduk Keluar</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penduduk Keluar</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                          <th>No</th>
                          <th>ID-(NIK)</th>
                          <th>Nama</th>
                          <th>Tgl. Pengajuan</th>
                          <th>Alamat</th>
                          <th>RT/RW</th>
                          <th>Kelurahan</th>
                          <th>Kecamatan</th>
                          <th>Kabupaten</th>
                          <th>Provinsi</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                      </tr>
                      </thead>
                        <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_penduduk_keluar WHERE status_pk='Valid'";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['id_pk'];?>-[<?php echo $data_a['nik'];?>]</td>
                                <td><?php echo $data_a['nama'];?></td>
                                <td><?php echo $data_a['tgl_pengajuan'];?></td>
                                <td><?php echo $data_a['alamat_tujuan'];?></td>
                                <td><?php echo $data_a['rt_tujuan'];?>/<?php echo $data_a['rw_tujuan'];?></td>
                                <td><?php echo $data_a['kelurahan_tujuan'];?></td>
                                <td><?php echo $data_a['kec_tujuan'];?></td>
                                <td><?php echo $data_a['kab_tujuan'];?></td>
                                <td><?php echo $data_a['provinsi_tujuan'];?></td>
                                <td><?php echo $data_a['ket_pk'];?></td>
                                <td><?php echo $data_a['status_pk'];?></td>
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