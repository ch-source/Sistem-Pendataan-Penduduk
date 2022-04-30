<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Penduduk Masuk</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penduduk Masuk</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penduduk Masuk</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>No. KK</th>
                        <th>Nama</th>
                        <th>Tgl. Masuk</th>
                        <th>Alamat Lama</th>
                        <th>Alamat Domisili</th>
                        <th>RT/RW</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Provinsi</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>SK</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_penduduk_masuk";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pm'];?></td>
                        <td><?php echo $data['no_kk'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['tgl_masuk'];?></td>
                        <td><?php echo $data['alamat_lama'];?></td>
                        <td><?php echo $data['alamat_sekarang'];?></td>
                        <td><?php echo $data['rt'];?> / <?php echo $data['rw']; ?></td>
                        <td><?php echo $data['kelurahan'];?></td>
                        <td><?php echo $data['kecamatan'];?></td>
                        <td><?php echo $data['kabupaten']; ?></td>
                        <td><?php echo $data['provinsi']; ?></td>
                        <td><?php echo $data['surat']; ?></td>
                        <td><?php 
                        if (  $data['status_penduduk']=='') {
                        echo"<a href='proses_validasi_pb.php?id=".$data['id_pm']."' class='btn btn-success btn-sm'>Validasi</a>";
                        }elseif ($data['status_penduduk']=='Valid') {
                          echo "Valid";
                        }else{
                          echo"";
                        }
                      
                        ?>
                        </td>
                        <td><a href="dashboard.php?p=surat_keterangan&id=<?php echo $data['id_pm'];?>" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <?php $no++;}
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