<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Laporan Data Pinjaman Aset</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laporan Data Pinjaman Aset</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px;">
              <div class="card">
                <div class="card-header">
                  <b class="card-title">Laporan Data Pinjaman Aset</b>
                </div>
                <div class="card-body">
                   <form method="post" action="laporan/laporan_pinjaman_aset.php" target="_blank">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Periode</label>
                      <div class="col-sm-3">
                        <select name="periode" class="form-control" required="required">
                          <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mei</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Tahun</label>
                      <div class="col-sm-3">
                         <select name="tahun" class="form-control">
                                                  <?php
                                                  $mulai= date('Y') - 50;
                                                  for($i = $mulai; $i<$mulai + 100;$i++){
                                                  $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                                  }
                                                  ?>
                                              </select>
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan Data Pinjaman Aset</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Pinjaman</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Pinjaman</th>
                        <th>Periode</th>
                        <th>Tahun</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Nama Aset</th>
                        <th>Jumlah Aset</th>
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