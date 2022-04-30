<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/lg.png" rel="icon">
  <title>Desa Gurung Liwut - Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  
                  <?php
            if(isset($_POST['pilih'])){
              if($_POST['pilih']=="-regis-berhasil"){
                echo "<div class='alert alert-success alert-dismissible'>
                <a style='text-decoration:none;' href='registrasi.php' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a><i class='icon icon-check'></i> Proses Registrasi Berhasil, Silahkan Tunggu Beberapa Saat, Sampai Data Anda Divalidasi Oleh Admin. Atau silahkan hubungi Admin melalui Telepon: <b>(0361) 4481380  & email: mitra_sakanabali@gmail.com</b>, untuk mempercepat proses validasi.</b>
                </div>";
                }
                 $jenis=$_POST['jenis'];
              }
              ?>
              <?php if ($jenis=="PL"){
                echo"
                <div class='text-center'>
                    <h1 class='h2 text-gray-900 mb-4'>Registrasi Penduduk Lama</h1>
                  </div>
                <form action='proses_registrasi.php' method='post' role='form' class='contactForm'>
                  <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>No. KK</label>
                      <div class='col-sm-4'>
                      <input type='text' name='nok' class='form-control' id='name' placeholder='Masukan Nomor Kartu Keluarga'/>
                    </div>
                    <label class='col-sm-2 col-form-label'>Nama Kepala Keluarga</label>
                    <div class='col-sm-4'>
                      <input type='text' name='nama' class='form-control' id='name' placeholder='Masukan Nama Lengkap'>
                    </div>
                    </div>
                    <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>Alamat</label>
                      <div class='col-sm-4'>
                      <input type='text' name='alamat' class='form-control' id='name' placeholder='Masukan Alamat'/>
                      </div>
                      <label class='col-sm-2 col-form-label'>RT/RW</label>
                      <div class='col-sm-2'>
                      <input type='text' name='rt' class='form-control' id='name' placeholder='RT No.'/>
                      </div>
                      <div class='col-sm-2'>
                      <input type='text' name='rw' class='form-control' id='name' placeholder='RW No.'/>
                      </div>
                    </div>
                    <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>Desa</label>
                      <div class='col-sm-4'>
                      <input type='text' name='kelurahan' value='Meler' class='form-control' id='name' readonly='readonly'>
                      </div>
                      <label class='col-sm-2 col-form-label'>Kecamatan</label>
                      <div class='col-sm-4'>
                      <select name='kecamatan' class='form-control' required='required'>
                          <option selected='selected'>-Pilih Kecamatan-</option>
                          <option value='Langke Rembong'>Langke Rembong</option>
                          <option value='Ruteng'>Ruteng</option>
                          <option value='Wae Ri'i>Wae Ri'i</option>
                          <option value='Cibal'>Cibal</option>
                          <option value='Reok'>Reok</option>
                          <option value='Satar Mese Barat'>Satar Mese Barat</option>
                          <option value='Rahong Utara'>Rahong Utara</option>
                        </select>
                      </div>
                    </div>
                    <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>Kabupaten</label>
                      <div class='col-sm-4'>
                      <select name='kabupaten' class='form-control' required='required'>
                          <option selected='selected'>-Pilih Kabupaten-</option>
                          <option value='Manggarai'>Manggarai</option>
                          <option value='Manggarai Barat'>Manggarai Barat</option>
                          <option value='Manggarai Timur'i>Manggarai Timur</option>
                        </select>
                      </div>
                      <label class='col-sm-2 col-form-label'>Provinsi</label>
                      <div class='col-sm-4'>
                      <input type='text' name='provinsi' value='Nusa Tenggara Timur' class='form-control' id='name' readonly='readonly'>
                      </div>
                    </div>
                    <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>No. Telepon/ HP</label>
                      <div class='col-sm-4'>
                      <input type='text' name='notelp' class='form-control' id='name' placeholder=' Masukan Nomor Telepon/HP'/>
                    </div>
                    <label class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-4'>
                    <input type='text' name='email' class='form-control' id='name' placeholder='Masukan Alamat Email'/>
                    </div>
                    </div>
                    <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>Password</label>
                      <div class='col-sm-4'>
                      <input type='password' name='password' class='form-control' id='name' placeholder='Password'/>
                    </div>
                    <label class='col-sm-2'></label>
                    <div class='col-sm-2'>
                    <button type='submit' class='btn btn-primary btn-block'><i class='fa fa-plus'></i> Register</button>
                    </div>
                    <div class='col-sm-2'>
                    <a href='index.php' class='btn btn-danger'><i class='fa fa-close'></i> Batal !</a>
                    </div>
                    </div>
                  </form>";
                  }else if ($jenis="PB") {
                  echo"
                  <div class='text-center'>
                    <h1 class='h2 text-gray-900 mb-4'>Registrasi Penduduk Baru</h1>
                  </div>
                  <form action='proses_registrasi_baru.php' method='post' role='form' enctype='multipart/form-data' class='contactForm'>
                  <div class='form-group row'>
                      <label class='col-sm-2 col-form-label'>No. KK</label>
                      <div class='col-sm-4'>
                      <input type='text' name='nok' class='form-control' id='name' placeholder='Masukan Nomor Kartu Keluarga'/>
                    </div>
                    <label class='col-sm-2 col-form-label'>Nama</label>
                    <div class='col-sm-4'>
                      <input type='text' name='nama' class='form-control' id='name' placeholder='Masukan Nama Lengkap'>
                    </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Alamat Sesuai KTP</label>
                      <div class='col-sm-4'>
                      <textarea type='text' name='alamat' class='form-control' id='name' placeholder='Masukan Alamat Sesuai KTP'/></textarea>
                      </div>
                      <label class='col-sm-2 col-form-label'>Alamat Domisili</label>
                      <div class='col-sm-4'>
                      <input type='text' name='domisili' class='form-control' id='name' placeholder='Masukan Alamat Domisili'/>
                      </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>RT/RW</label>
                      <div class='col-sm-2'>
                      <input type='text' name='rt' class='form-control' id='name' placeholder='RT No.'/>
                      </div>
                      <div class='col-sm-2'>
                      <input type='text' name='rw' class='form-control' id='name' placeholder='RW No.'/>
                      </div>
                      <label class='col-sm-2 col-form-label'>Desa</label>
                      <div class='col-sm-4'>
                      <select name='kelurahan' class='form-control' required='required'>
                          <option selected='selected'>-Pilih Desa-</option>
                          <option value='Bangka Lao'>Bangka Lao</option>
                          <option value='Belang Turi'>Belang Turi</option>
                          <option value='Bea Kakor'>Bea Kakor</option>
                          <option value='Benteng Kuwu'>Benteng Kuwu</option>
                          <option value='Beo Rahong'>Beo Rahong</option>
                          <option value='Compang Dalo'>Compang Dalo</option>
                          <option value='Compang Namut'>Compang Namut</option>
                        </select>
                      </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Kecamatan</label>
                      <div class='col-sm-4'>
                      <select name='kecamatan' class='form-control' required='required'>
                          <option selected='selected'>-Pilih Kecamatan-</option>
                          <option value='Langke Rembong'>Langke Rembong</option>
                          <option value='Ruteng'>Ruteng</option>
                          <option value='Wae Ri'i>Wae Ri'i</option>
                          <option value='Cibal'>Cibal</option>
                          <option value='Reok'>Reok</option>
                          <option value='Satar Mese Barat'>Satar Mese Barat</option>
                          <option value='Rahong Utara'>Rahong Utara</option>
                        </select>
                      </div>
                      <label class='col-sm-2 col-form-label'>Kabupaten</label>
                      <div class='col-sm-4'>
                      <select name='kabupaten' class='form-control' required='required'>
                          <option selected='selected'>-Pilih Kabupaten-</option>
                          <option value='Manggarai'>Manggarai</option>
                          <option value='Manggarai Barat'>Manggarai Barat</option>
                          <option value='Manggarai Timur'i>Manggarai Timur</option>
                        </select>
                      </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Provinsi</label>
                      <div class='col-sm-4'>
                     <input type='text' name='provinsi' value='Nusa Tenggara Timur' class='form-control' id='name' readonly='readonly'>
                      </div>
                      <label class='col-sm-2 col-form-label'>Tgl. Masuk</label>
                      <div class='col-sm-4'>
                      <input type='date' name='tgl' class='form-control' id='name' placeholder=' Masukan Tanggal Masuk'/>
                    </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>No. Telepon/ HP</label>
                      <div class='col-sm-4'>
                      <input type='text' name='notelp' class='form-control' id='name' placeholder=' Masukan Nomor Telepon/HP'/>
                    </div>
                    <label class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-4'>
                    <input type='text' name='email' class='form-control' id='name' placeholder='Masukan Alamat Email'/>
                    </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Password</label>
                      <div class='col-sm-4'>
                      <input type='password' name='password' class='form-control' id='name' placeholder='Password'/>
                    </div>
                    <label class='col-sm-2 col-form-label'>Keterangan</label>
                      <div class='col-sm-4'>
                      <textarea type='text' name='keterangan' class='form-control' placeholder='Masukan Keterangan Pindah' required='required'/></textarea>
                    </div>
                    </div>
                    <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Surat Keterangan (PDF)</label>
                      <div class='col-sm-4'>
                      <input type='file' name='nama_file' class='form-control' id='name' required='required'>
                    </div>
                    <label class='col-sm-2'></label>
                    <div class='col-sm-2'>
                    <button type='submit' class='btn btn-primary btn-block'><i class='fa fa-plus'></i> Register</button>
                    </div>
                    <div class='col-sm-2'>
                    <a href='index.php' class='btn btn-danger'><i class='fa fa-close'></i> Batal !</a>
                    </div>
                    </div>
                  </form>";
                  }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>