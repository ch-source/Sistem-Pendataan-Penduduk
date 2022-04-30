<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Edit Data Kematian</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data Kematian</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header" style="text-align: right;">
                <h6 class="m-0 font-weight-bold text-dark"></h6><a href="dashboard_penduduk.php?p=data_kematian" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></a>
                </div>
                <?php
                  include"koneksi.php";
                   $data_x = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                              if ($data_x['level'] == 'Penduduk') {}
                  $id=$_GET['id'];
                  $query="SELECT * FROM tbl_kematian WHERE id_kematian='$id' AND no_kk='".$data_x['no_kk']."'";
                  $sql=mysqli_query($connect, $query);
                  $data=mysqli_fetch_array($sql);?>
                <form method="post" action="proses_edit_dkm.php?id=<?php echo $id;?>">
                <div class="card-body">
                  <form method="post" name='autoSumForm' action="proses_simpan_data_kematian.php" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Kematian</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['id_kematian'];?>" name="id" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">No. KK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['no_kk'];?>"  name="nk" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['nik'];?>" name="nik" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['nama'];?>" name="nama" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['jk'];?>" name="jk" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">TTL</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tempat" value="<?php echo $data['tempat_lahir'];?>" required="required">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tgl" value="<?php echo $data['tgl_lahir'];?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data['agama'];?>" name="agama" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Kematian</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" required="required" name="tk">
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