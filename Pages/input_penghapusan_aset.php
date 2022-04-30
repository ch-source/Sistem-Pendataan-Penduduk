<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Penghapusan Aset</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_penghapusan_aset.php" enctype="multipart/form-data">
                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Aset</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="aset" autofocus="autofocus" required="required">
                        <option value="" selected="selected">Pilih Aset</option>
                         <?php 
                           $query="SELECT * FROM tbl_aset";
                           $sql=mysqli_query($connect, $query);
                           while($data=mysqli_fetch_array($sql)){
                           echo"<option value='".$data['id_aset']."'>".$data['nama_aset']."-".$data['id_aset']."</option>";
                            }
                         ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tgl. Penghapusan Aset</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Status Aset</label>
                      <div class="col-sm-10">
                        <select name="status" class="form-control" required="required">
                        <option value="" selected="selected">-Pilih Status Aset-</option>
                          <option value="Rusak">Rusak</option>
                          <option value="Dijual">Dijual</option>
                          <option value="Disumbangkan">Disumbangkan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jml. Aset</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="hapus" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->