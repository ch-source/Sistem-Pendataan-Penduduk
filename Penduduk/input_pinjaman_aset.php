<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Input Penjualan Credit</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Input Penjualan Credit</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header" style="text-align: right;">
                <h6 class="m-0 font-weight-bold text-dark"></h6><a href="dashboard_kasir.php?p=data_penjualan" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></a>
                </div>
                <?php
                  include"koneksi.php";
                  $query_user = "SELECT max(id_penjualan) as maxId FROM tbl_penjualan";
                  $hasil_user = mysqli_query($connect,$query_user);
                  $data_user = mysqli_fetch_array($hasil_user);
                  $idpenjualan = $data_user['maxId'];
                  $noUser = (int) substr($idpenjualan, 3, 3);
                  $noUser++;
                  $char = "PJN";
                  $idpenjualan= $char . sprintf("%03s", $noUser);
                ?>
                <div class="card-body">
                  <form method="post" name='autoSumForm' action="proses_simpan_penjualan.php?id=<?php echo $idpenjualan;?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Penjualan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" readonly="readonly" value="<?php echo $idpenjualan;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                      <div class="col-sm-4">
                       <select id="nim" name="nim" class="form-control"  autofocus="autofocus" onchange="changeValueNIM(this.value)">
                             <option value="" selected="selected">Pilih Pelanggan</option>
                             <?php 
                               $sql=mysqli_query($connect, "SELECT * FROM tbl_pelanggan");
                               $jsArray = "var prdName = new Array();\n";
                               while ($data=mysqli_fetch_array($sql)) {
                              
                                echo '<option value="'.$data['id_pelanggan'].'">'.$data['id_pelanggan'].'-'.$data['nama_pelanggan'].'</option> ';
                                $jsArray .= "prdName['" . $data['id_pelanggan'] . "'] = {nama_pelanggan:'" . addslashes($data['nama_pelanggan']) . "', no_tlpn:'" . addslashes($data['no_tlpn']) . "', alamat:'" . addslashes($data['alamat']) . "'};\n";
                              
                               }
                              ?>
                          </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" id="nama_pelanggan" readonly="readonly"  name="pelanggan">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-4">
                        <select id="brg" name="brg" class="form-control" onchange="changeValueBRG(this.value)">
                             <option value="" selected="selected">Pilih Barang</option>
                             <?php 
                               $sql_b=mysqli_query($connect, "SELECT * FROM tbl_barang");
                               $jsArray_b= "var nameBRG = new Array();\n";
                               while ($data_b=mysqli_fetch_array($sql_b)) {
                              
                                echo '<option value="'.$data_b['id_barang'].'">'.$data_b['id_barang'].'-'.$data_b['nama_barang'].'</option> ';
                                $jsArray_b .= "nameBRG['" . $data_b['id_barang'] . "'] = {harga_jual:'" . addslashes($data_b['harga_jual']) . "', stok:'" . addslashes($data_b['stok']) . "'};\n";
                              
                               }
                              ?>
                              
                          </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Tanggal Transaksi/ Tgl. Jatuh Tempo</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" value="<?php echo date('Y-m-d');?>" name="tgl_jual" readonly="readonly">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" value="<?php echo date('Y-m-d', strtotime('+30 days'));?>" name="tgl_jth" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Telepon</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="no_tlpn" readonly="readonly"  name="no_tlpn" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" readonly="readonly" id="alamat"  name="alamat" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jenis Jaminan</label>
                      <div class="col-sm-4">
                        <select name="jenisjaminan" class="form-control" required="required">
                          <option value="" selected="selected">-Pilih Jaminan-</option>
                          <option value="BPKB Motor">BPKB Motor</option>
                          <option value="BPKB Mobil">BPKB Mobil</option>
                          <option value="Slip Gaji">Slip Gaji</option>
                        </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Jenis Bunga</label>
                      <div class="col-sm-4">
                        <select id="bg" name="bg" class="form-control" onchange="changeBG(this.value)">
                             <option value="" selected="selected">Pilih Jenis Bunga</option>
                             <?php 
                               $sql_x=mysqli_query($connect, "SELECT * FROM tbl_bunga WHERE jenis_bunga='BP'");
                               $jsArray_x = "var nameBG  = new Array();\n";
                               while($data_x=mysqli_fetch_array($sql_x)){
                              
                                echo '<option value="'.$data_x['id_bunga'].'">'.$data_x['id_bunga'].'-'.$data_x['ket_bunga'].'</option> ';
                                $jsArray_x .= "nameBG['" . $data_x['id_bunga'] . "'] = {bunga:'" . addslashes($data_x['bunga']) . "'};\n";
                              }
                               
                              ?>
                              
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Bunga (%)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  readonly="readonly" onFocus="startCalc();" onBlur="stopCalc();" name="bunga" id="bunga" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Jangka Waktu</label>
                      <div class="col-sm-4">
                        <select name="jw" id="jw" class="form-control" required="required">
                          <option value="" selected="selected">-Pilih Jangka Waktu-</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Stok (Pcs)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  readonly="readonly" onFocus="startCalc();" onBlur="stopCalc();" name="stok" id="stok" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Harga Jual (Pcs)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  readonly="readonly" onFocus="startCalc();" onBlur="stopCalc();" name="hj" id="harga_jual" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jml. Barang (Pcs)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="jmb" id="jmb" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Total Harga (Rp)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="th" id="th" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">DP (Rp)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="jb" id="jb" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Sisa Pokok Credit (Rp)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="sp" id="sp" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Angsuran /Bln</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control"  name="bln" id="bln" readonly="readonly">
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
    document.getElementById('nama_pelanggan').value = prdName[x].nama_pelanggan; 
    document.getElementById('no_tlpn').value = prdName[x].no_tlpn;
      document.getElementById('alamat').value = prdName[x].alamat;    
    };
    <?php echo $jsArray_b; ?>  
    function changeValueBRG(y){  
    document.getElementById('harga_jual').value = nameBRG[y].harga_jual;
    document.getElementById('stok').value = nameBRG[y].stok;
    };  

    <?php echo $jsArray_x; ?>  
    function changeBG(a){  
    document.getElementById('bunga').value = nameBG[a].bunga;
     
    }; 

                    $(document).ready(function() {
                    $("#jmb, #harga_jual, #jb, #bunga, #jw").keyup(function() {
                             var jmb = $("#jmb").val();
                             var harga_jual  = $("#harga_jual").val();
                             var jb = $("#jb").val();
                             var bunga = $("#bunga").val();
                             var jw = $("#jw").val();

                             var th= parseInt(harga_jual) * parseInt(jmb);
                             $("#th").val(th);

                             var sp= parseFloat(th) - parseInt(jb);
                             $("#sp").val(sp);

                             var bln= parseFloat(sp) * parseFloat(bunga) / parseInt(jw) + parseFloat(jb);
                             $("#bln").val(bln);

                          });
                        });
    </script> 
                  <script type="text/javascript">
                    $(document).ready(function() {
                    $("#bunga").keyup(function() {
                             var bunga= parseFloat(bunga);
                          });
                        });


                    </script>


        <!---Container Fluid-->