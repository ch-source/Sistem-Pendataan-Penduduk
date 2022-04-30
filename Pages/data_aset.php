<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Aset</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Aset</li>
            </ol>
          </div>
          <a href="dashboard.php?p=input_data_aset" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT ASET</a>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Aset</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Aset</th>
                        <th>Nama Aset</th>
                        <th>Periode</th>
                        <th>Tahun</th>
                        <th>Tgl. Aset Masuk</th>
                        <th>Asal Aset</th>
                        <th>Stok</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $no=1;
                       $query_user="SELECT * FROM tbl_aset";
                       $sql_user=mysqli_query($connect, $query_user);
                       while ($data_user=mysqli_fetch_array($sql_user)) {
                      ?>
                      <tr>
                         <td><?php echo $no;?></td>
                         <td><?php echo $data_user['id_aset'];?></td>
                         <td><?php echo $data_user['nama_aset'];?></td>
                         <td><?php echo $data_user['periode'];?></td>
                         <td><?php echo $data_user['tahun'];?></td>
                         <td><?php echo $data_user['tgl_barang_masuk'];?></td>
                         <td><?php echo $data_user['asal_aset'];?></td>
                         <td><?php echo $data_user['stok'];?></td>
                         <td><a href="dashboard.php?p=edit_data_aset&id=<?php echo $data_user['id_aset'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
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