<?php
include"koneksi.php";
$query_user = "SELECT max(id_user) as maxId FROM tbl_user";
$hasil_user = mysqli_query($connect,$query_user);
$data_user = mysqli_fetch_array($hasil_user);
$iduser = $data_user['maxId'];
$noUser = (int) substr($iduser, 3, 3);
$noUser++;
$char = "USR";
$iduser= $char . sprintf("%03s", $noUser);

$query_a = "SELECT * FROM tbl_umum";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);

$nok = $_POST['nok'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$password = $_POST['password'];
$cek = mysqli_query($connect, "SELECT * FROM tbl_user WHERE email_user = '$email'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Registrasi Gagal!, Email Yang Anda Masukkan Sudah Digunakan Oleh User Lain, Masukkan Email Yang Berbeda');
    document.location.href='index.php?p=registrasi.php'</script>\n";
}else if ($result ==0) {
      $query2="INSERT INTO `tbl_user` (`id_user`, `no_kk`, `nama_user`, `telepon_user`, `email_user`, `username`, `password`, `level`, `tgl_registrasi`, `status_user`) 
      VALUES ('$iduser', '$nok', '$nama', '$notelp', '$email', '$nok', '$password', 'Penduduk', '".date('Y-m-d')."', '')";
           $sql2=mysqli_query($connect, $query2);
           if ($sql2) {
            $query_a="INSERT INTO `tbl_umum` (`no_kk`, `nama_kk`, `rt`, `rw`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `no_tlpn`, `email`) 
              VALUES ('$nok', '$nama', '$rt', '$rw', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi', '$notelp', '$email')";
            $sql_a=mysqli_query($connect, $query_a);
            if ($sql_a) {
              echo "<script>alert('Proses Registrasi Berhasil, Silahkan Tunggu Beberapa Saat, Sampai Data Anda Divalidasi Oleh Admin');
              document.location.href='index.php?p=registrasi.php'</script>\n";
              }else{
                echo "<script>alert('Proses Registrasi Gagal!');
                document.location.href='index.php?p=registrasi.php'</script>\n";
           }
          }
        }
?>

