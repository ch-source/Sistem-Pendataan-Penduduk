<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Edit Data Kelahiran</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data Kelahiran</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header" style="text-align: right;">
                <h6 class="m-0 font-weight-bold text-dark"></h6><a href="dashboard_penduduk.php?p=data_kelahiran" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></a>
                </div>
                <?php
                include"koneksi.php";
               $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Penduduk') {}
                $id=$_GET['id'];

              $query_warga="SELECT * FROM tbl_kelahiran WHERE id_kelahiran='$id' AND no_kk='".$data['no_kk']."'";
              $sql_warga=mysqli_query($connect, $query_warga);
              $data_warga=mysqli_fetch_array($sql_warga);

              ?>
                <div class="card-body">
                  <form method="post" name='autoSumForm' action="proses_edit_dkl.php?id=<?php echo $id;?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NO. KK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nk" readonly="readonly" value="<?php echo $data_warga['no_kk'];?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alamat" readonly="readonly" value="<?php echo $data_warga['alamat'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">RT / RW</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="rt" readonly="readonly" value="<?php echo $data_warga['rt'];?>">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" value="<?php echo $data_warga['rw'];?>" readonly="readonly"  name="rw">
                      </div>
                      <label class="col-sm-2 col-form-label">Kelurahan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="kelurahan" readonly="readonly" value="<?php echo $data_warga['kelurahan'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kecamatan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly"  name="kecamatan" value="<?php echo $data_warga['kecamatan'];?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Kabupaten</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly"  name="kabupaten" value="<?php echo $data_warga['kabupaten'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Provinsi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly"  name="provinsi" value="<?php echo $data_warga['provinsi'];?>">
                      </div>
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" value="<?php echo $data_warga['nik'];?>"  name="nik">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data_warga['nama'];?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-4">
                        <select name="jk" class="form-control" required="required">
                          <option value="" selected="selected">-Pilih Jenis Kelamin-</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">TTL</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tempat" value="<?php echo $data_warga['tempat_lahir'];?>" required="required">
                      </div>
                      <div class="col-sm-2">
                        <input type="date" class="form-control" name="tgl" value="<?php echo $data_warga['tgl_lahir'];?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-4">
                        <select name="agama" class="form-control" required="required">
                          <option value="" selected="selected">-Pilih Agama-</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Islam">Islam</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghuchu">Konghuchu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Status Hub. Keluarga</label>
                      <div class="col-sm-4">
                        <select name="shk" class="form-control" required="required">
                          <option value="" selected="selected">-Pilih Status Hub. Keluarga-</option>
                          <option value="Ayah">Ayah</option>
                          <option value="Ibu">Ibu</option>
                          <option value="Anak">Anak</option>
                        </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Status Kewarganegaraan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="WNI" readonly="readonly" name="sk">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>