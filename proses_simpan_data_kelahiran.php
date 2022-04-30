<?php
include"koneksi.php";
if ( isset($_POST['id']) || isset($_POST['alamat']) || isset($_POST['rt']) || isset($_POST['rw']) || isset($_POST['kelurahan']) || isset($_POST['kecamatan']) || isset($_POST['kabupaten']) || isset($_POST['provinsi']) || isset($_POST['nik']) || isset($_POST['nama']) || isset($_POST['jk']) || isset($_POST['tempat']) || isset($_POST['tgl']) || isset($_POST['agama']) || isset($_POST['shk']) || isset($_POST['sk']) || isset($_POST['nama_file'])) {

$query = "SELECT max(id_kelahiran) as maxId FROM tbl_kelahiran";
$hasil = mysqli_query($connect,$query);
$data_x = mysqli_fetch_array($hasil);
$idaset = $data_x['maxId'];
$noUrut = (int) substr($idaset, 3, 3);
$noUrut++;
$char = "KLH";
$idaset= $char . sprintf("%03s", $noUrut);

$id = $_POST['id'];
$alamat= $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$agama = $_POST['agama'];
$shk = $_POST['shk'];
$sk = $_POST['sk'];

$tipe_file = $_FILES['nama_file']['type']; 
if ($tipe_file == "application/pdf")
{
$nama_file = trim($_FILES['nama_file']['name']);
 $nama_baru = "bk_".$id.".pdf";
 $file_temp = $_FILES['nama_file']['tmp_name']; 
 $folder    = "BK";

$cek = mysqli_query($connect, "SELECT * FROM tbl_kelahiran WHERE nik = '$nik' AND id_kelahiran='$idaset'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Kelahiran Gagal!, NIK Yang Anda Masukkan Sudah Digunakan Oleh User Lain, Masukkan NIK Yang Berbeda');
    document.location.href='dashboard_penduduk.php?p=input_kelahiran'</script>\n";
}else if ($result ==0) {
 move_uploaded_file($file_temp, "$folder/$nama_baru");
$query_a="INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `no_kk`, `nik` , `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_hub_keluarga`, `kewarganegaraan`, `rt`, `rw`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `bk`) VALUES ('$idaset', '$id', '$nik', '$nama', '$jk', '$tempat', '$tgl', '$agama', '$shk', '$sk', '$rt', '$rw', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi', '$nama_baru')";
    $sql_a=mysqli_query($connect, $query_a);
    if ($sql_a) {
    	$query_b="INSERT INTO `tbl_penduduk` (`no_kk`, `nik` , `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_kawin`, `status_hub_keluarga`, `kewarganegaraan`, `rt`, `rw`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES ('$id', '$nik', '$nama', '$jk', '$tempat', '$tgl', '$agama', '', '', '', '$shk', '$sk', '$rt', '$rw', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi')";
    $sql_b=mysqli_query($connect, $query_b);
    if ($sql_b) {
      echo "<script>alert('Data Kelahiran Berhasil Di Simpan');
      document.location.href='dashboard_penduduk.php?p=data_kelahiran'</script>\n";
      }else{
      echo "<script>alert('Data Kelahiran Keluarga Gagal Di Simpan!');
      document.location.href='dashboard_penduduk.php?p=input_kelahiran'</script>\n";
    }
  }
}
}else{
        echo "<script>alert('Surat Keterangan Kelahiran Gagal Diupload.');
       document.location.href='dashboard_penduduk.php?p=input_kelahiran'</script>\n";
}
}
?>

