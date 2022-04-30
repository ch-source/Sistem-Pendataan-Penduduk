<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Pegawai</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
            </ol>
          </div>
          <a href="dashboard.php?p=input_pegawai" class="btn btn-primary" style="margin-bottom: 3px;"><i class="fa fa-edit"></i> INPUT PEGAWAI</a>
          <div class="row mb-12">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pegawai</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Pegawai</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tgl. Lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                        <th>No. Telepon</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_pegawai";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pegawai'];?></td>
                        <td><?php echo $data['nama_pegawai'];?></td>
                        <td><?php echo $data['jk'];?></td>
                        <td><?php echo $data['tgl_lahir'];?></td>
                        <td><?php echo $data['agama'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['no_tlpn'];?></td>
                       
                        <td><a href="dashboard.php?p=edit_pegawai&id=<?php echo $data['id_pegawai'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
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
