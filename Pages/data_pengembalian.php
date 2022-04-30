<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Pengembalian Aset</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pengembalian Aset</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengembalian Aset</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center " id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Id Pegembalian</th>
                        <th>Id Peminjaman</th>
                        <th>Id Warga</th>
                        <th>Id Aset</th>
                        <th>Tgl. Pegembalian</th>
                        <th>Jumlah Pegembalian</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_pengembalian";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pengembalian'];?></td>
                        <td><?php echo $data['id_pinjaman'];?></td>
                        <?php
                        $query_warga="SELECT*FROM tbl_warga WHERE id_warga='".$data['id_warga']."'";
                      $sql_warga=mysqli_query($connect, $query_warga);
                      $data_warga=mysqli_fetch_array($sql_warga) ?>
                        <td><?php echo $data['id_warga'];?>-<?php echo $data_warga['nama_warga'];?></td>
                        <td><?php echo $data['id_aset'];?></td>
                        <td><?php echo $data['tgl_pengembalian'];?></td>
                        <td><?php echo $data['jumlah_pengembalian'];?></td>
                        <td><?php echo $data['keterangan'];?></td>
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
