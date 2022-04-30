<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Kematian</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Kematian</li>
            </ol>
          </div>
          <a href="dashboard_penduduk.php?p=input_kematian" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT KEMATIAN</a>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kematian</h6>
                </div>
                <div class="card-body">
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
                                <th>Tgl. Kematian</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $data_x = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                              if ($data_x['level'] == 'Penduduk') {}
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_kematian WHERE no_kk='".$data_x['no_kk']."'";
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
                                <td><a href="dashboard_penduduk.php?p=edit_data_kematian&id=<?php echo $data_a['id_kematian'];?>" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
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