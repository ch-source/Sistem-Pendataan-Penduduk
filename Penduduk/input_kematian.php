<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Input Kematian</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Input Kematian</li>
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
               $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Penduduk') {}

              $query_warga="SELECT * FROM tbl_umum WHERE no_kk='".$data['no_kk']."'";
              $sql_warga=mysqli_query($connect, $query_warga);
              $data_warga=mysqli_fetch_array($sql_warga);

              ?>
                <div class="card-body">
                  <form method="post" name='autoSumForm' action="proses_simpan_data_kematian.php" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                        <select id="nik" name="nik" class="form-control"  autofocus="autofocus" onchange="changeValueNIM(this.value)">
                             <option value="" selected="selected">Pilih Anggota Keluarga</option>
                             <?php 
                               $sql=mysqli_query($connect, "SELECT * FROM tbl_penduduk");
                               $jsArray = "var prdName = new Array();\n";
                               while ($data=mysqli_fetch_array($sql)) {
                              
                                echo '<option value="'.$data['nik'].'">'.$data['nik'].'-'.$data['nama'].'</option> ';
                                $jsArray .= "prdName['" . $data['nik'] . "'] = {alamat:'" . addslashes($data['alamat']) . "', rt:'" . addslashes($data['rt']) . "', rw:'" . addslashes($data['rw']) . "', kelurahan:'" . addslashes($data['kelurahan']) . "', kecamatan:'" . addslashes($data['kecamatan']) . "', kabupaten:'" . addslashes($data['kabupaten']) . "', provinsi:'" . addslashes($data['provinsi']) . "', nama:'" . addslashes($data['nama']) . "', jk:'" . addslashes($data['jk']) . "', tempat_lahir:'" . addslashes($data['tempat_lahir']) . "', tgl_lahir:'" . addslashes($data['tgl_lahir']) . "', agama:'" . addslashes($data['agama']) . "', pendidikan:'" . addslashes($data['pendidikan']) . "', pekerjaan:'" . addslashes($data['pekerjaan']) . "', status_kawin:'" . addslashes($data['status_kawin']) . "', tgl_perkawinan:'" . addslashes($data['tgl_perkawinan']) . "', status_hub_keluarga:'" . addslashes($data['status_hub_keluarga']) . "',  kewarganegaraan:'" . addslashes($data['kewarganegaraan']) . "',  no_kk:'" . addslashes($data['no_kk']) . "'};\n";
                              
                               }
                              ?>
                      </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" name="alamat" id="alamat" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">RT / RW</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="rt" id="rt" readonly="readonly">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="rw" readonly="readonly"  name="rw" >
                      </div>
                      <label class="col-sm-2 col-form-label">No. KK</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="no_kk" name="id" readonly="readonly">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kecamatan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly" id="kecamatan" name="kecamatan">
                      </div>
                      <label class="col-sm-2 col-form-label">Kabupaten</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly" id="kabupaten"  name="kabupaten" >
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Provinsi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly" id="provinsi"  name="provinsi" >
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Kematian</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" required="required" name="tk">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama" name="nama" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="jk" name="jk" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">TTL</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tempat" id="tempat_lahir" readonly="readonly">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tgl" id="tgl_lahir" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="agama" name="agama" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pendidikan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="pekerjaan" id="pekerjaan" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="status_kawin" name="spk" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Perkawinan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="tp" id="tgl_perkawinan" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Status Hub. Keluarga</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="status_hub_keluarga" name="shk" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Status Kewarganegaraan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly" name="sk" id="kewarganegaraan">
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
        <script type="text/javascript" src="./query_java.js"></script>
        <script type="text/javascript">    
        <?php echo $jsArray; ?>  
        function changeValueNIM(x){  
        document.getElementById('alamat').value = prdName[x].alamat;
        document.getElementById('rt').value = prdName[x].rt;
        document.getElementById('rw').value = prdName[x].rw; 
        document.getElementById('kelurahan').value = prdName[x].kelurahan;     
        document.getElementById('kecamatan').value = prdName[x].kecamatan; 
        document.getElementById('kabupaten').value = prdName[x].kabupaten; 
        document.getElementById('provinsi').value = prdName[x].provinsi; 
        document.getElementById('nama').value = prdName[x].nama; 
        document.getElementById('jk').value = prdName[x].jk; 
        document.getElementById('tempat_lahir').value = prdName[x].tempat_lahir; 
        document.getElementById('tgl_lahir').value = prdName[x].tgl_lahir; 
        document.getElementById('agama').value = prdName[x].agama; 
        document.getElementById('pendidikan').value = prdName[x].pendidikan; 
        document.getElementById('pekerjaan').value = prdName[x].pekerjaan; 
        document.getElementById('status_kawin').value = prdName[x].status_kawin; 
        document.getElementById('tgl_perkawinan').value = prdName[x].tgl_perkawinan; 
        document.getElementById('status_hub_keluarga').value = prdName[x].status_hub_keluarga; 
        document.getElementById('kewarganegaraan').value = prdName[x].kewarganegaraan;
        document.getElementById('no_kk').value = prdName[x].no_kk;  
        };
        </script> 