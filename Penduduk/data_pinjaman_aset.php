 <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Pengajuan Pinjaman Aset</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pengajuan Pinjaman Aset</li>
            </ol>
          </div>
          <a href="dashboard_warga.php?p=input_pinjaman_aset" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT PENGAJUAN PINJAMAN</a>
          <div class="row mb-12">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengajuan Pinjaman Aset</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Pinjaman</th>
                        <th>ID Warga</th>
                        <th>Tanggal Pinjaman</th>
                        <th>Periode</th>
                        <th>Tahun</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>ID Aset</th>
                        <th>Jumlah Aset</th>
                        <th>Status Pinjaman</th>
                        <th>Status Pembayaran</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_pinjaman_aset";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pinjaman'];?></td>
                        <td><?php echo $data['id_warga'];?></td>
                        <td><?php echo $data['tgl_pengajuan'];?></td>
                        <td><?php echo $data['periode'];?></td>
                        <td><?php echo $data['tahun'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <td><?php echo $data['no_telepon'];?></td>
                        <td><?php echo $data['id_aset'];?></td>
                        <td><?php echo $data['jumlah_aset'];?></td>
                        <td><?php echo $data['status_pinjaman'];?></td>
                        <td><?php 
                        if ($data['status_pembayaran']=='') {
                         } else{
                          echo "Sudah Melakukan Pembayaran";
                         }
                         ?>
                          </td>
                         <td><a href="dashboard_warga.php?p=detail_pinjaman_aset&id=<?php echo $data['id_pinjaman'];?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
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
        

