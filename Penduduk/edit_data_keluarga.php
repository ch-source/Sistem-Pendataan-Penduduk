<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Keluarga</h6>
                </div>
                <div class="card-body">
                <?php
                $con = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($con, 'kdg_db');

                 $id=$_GET['id'];
                 $query_warga="SELECT * FROM tbl_penduduk WHERE nik='$id'";
                 $sql_warga=mysqli_query($con, $query_warga);
                 while ($row = mysqli_fetch_array  ($sql_warga)) {
                  
                 ?>
                  <form method="post" action="proses_edit_data_keluarga.php?id=<?php echo $id;?>">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">No. KK</label>
                      <div class="col-sm-4">
                        <input type="text" readonly="readonly" value="<?php echo $data_warga['no_kk'];?>" name="nama" class="form-control"  placeholder="Nama Lengkap"/>
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-4">
                        <input type="text" required="required" value="<?php echo $data_warga['no_kk'];?>" name="nama" class="form-control"  placeholder="Nama Lengkap"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select name="jk" class="form-control" required="required" style="width: 100%; height: 40px;">
                          <option value="" selected="selected">..Pilih Jenis Kelamin..</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" required="required" value="<?php echo $data_warga['alamat'];?>" name="alamat" class="form-control"  placeholder="Alamat"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Telepon/ No.Hp</label>
                      <div class="col-sm-10">
                        <input type="text" required="required" value="<?php echo $data_warga['no_tlpn'];?>" name="telepon" class="form-control"  placeholder="Telepon / No. Hp"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" required="required" value="<?php echo $data_warga['email'];?>" name="email" class="form-control"  placeholder="Email"/>
                      </div>
                    </div>
                    <div class="span8 form-group">
                      <div class="validation"></div>
                       <div class="text-left">
                        <button class="btn btn-primary btn-rounded" type="submit" style="margin-top: 8px;"><i class="icon icon-save"></i> Simpan Perubahan</button> 
                        <a href="dashboard_warga.php?p=biodata_warga" class="btn btn-danger btn-rounded" style="margin-top: 8px;">Tutup</a>
                       </div>
                     </div>
                  </form>
                   <?php
                 }
                 ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->