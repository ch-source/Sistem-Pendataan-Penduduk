<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Regitrasi</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Regitrasi</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Registrasi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>No. KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>RT/RW</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Provinsi</th>
                        <th>Status User</th>
                        <th>Opsi</th>
                      </tr>
                      </thead>
                        <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_umum";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['no_kk'];?></td>
                                <td><?php echo $data_a['nama_kk'];?></td>
                                <td><?php echo $data_a['rt'];?> / <?php echo $data_a['rw']; ?></td>
                                <td><?php echo $data_a['alamat'];?></td>
                                <td><?php echo $data_a['kelurahan'];?></td>
                                <td><?php echo $data_a['kecamatan'];?></td>
                                <td><?php echo $data_a['kabupaten']; ?></td>
                                <td><?php echo $data_a['provinsi']; ?></td>
                                <?php
                                $query_b="SELECT*FROM tbl_user WHERE no_kk='".$data_a['no_kk']."'";
                                $sql_b=mysqli_query($connect, $query_b);
                                $data_b=mysqli_fetch_array($sql_b);
                              ?>
                              <td><?php echo $data_b['status_user'];?></td>
                              <td><?php 
                              if (  $data_b['status_user']=='') {
                              echo"<a href='proses_validasi_user.php?id=".$data_b['id_user']."' class='btn btn-success btn-sm'>Validasi</a>";
                              }else{
                                echo"";
                              }
                            
                              ?>
                              </td>
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