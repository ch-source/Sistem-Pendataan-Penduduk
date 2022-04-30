<?php
                      include"koneksi.php";
                      $id=$_GET['id'];
                      $query="SELECT*FROM tbl_pinjaman_aset WHERE id_pinjaman='$id'";
                      $sql=mysqli_query($connect, $query);
                      $data=mysqli_fetch_array($sql);
                      $query_aset="SELECT*FROM tbl_aset WHERE id_aset='".$data['id_aset']."'";
                      $sql_aset=mysqli_query($connect, $query_aset);
                      $data_aset=mysqli_fetch_array($sql_aset);

                      ?>
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Pengembalian Aset</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_pengembalian_aset.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Id  Warga</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="warga" value="<?php echo $data['id_warga']; ?>" readonly="readonly">
                      </div>
                    </div>
                    <div class=" row">
                      <div class="col-lg-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Id Aset</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="idaset" value="<?php echo $data['id_aset']; ?>" readonly="readonly">
                      </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Nama Aset</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $data_aset['nama_aset']; ?>" readonly="readonly">
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jumlah Aset</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $data['jumlah_aset']; ?>" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tgl Pengembalian</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control"  name="tp" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jumlah Pegembalian</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="jp" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Keterangan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="ktr" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <a href="dashboard.php?p=data_pengembalian_aset" class="btn btn-warning"><i class="fa fa-close"></i> Tutup</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!---Container Fluid-->