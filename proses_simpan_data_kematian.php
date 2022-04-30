<?php
include"koneksi.php";
if (isset($_POST['id']) || isset($_POST['tk']) || isset($_POST['nik']) || isset($_POST['nama']) || isset($_POST['jk']) || isset($_POST['tempat']) || isset($_POST['tgl']) || isset($_POST['agama'])) {

$query = "SELECT max(id_kematian) as maxId FROM tbl_kematian";
$hasil = mysqli_query($connect,$query);
$data_x = mysqli_fetch_array($hasil);
$idaset = $data_x['maxId'];
$noUrut = (int) substr($idaset, 3, 3);
$noUrut++;
$char = "KMT";
$idaset= $char . sprintf("%03s", $noUrut);

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$agama = $_POST['agama'];
$tk = $_POST['tk'];

$cek = mysqli_query($connect, "SELECT * FROM tbl_kematian WHERE nik = '$nik' AND id_kematian='$idaset'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Kematian Gagal!, NIK Yang Anda Masukkan Sudah Terdaftar Di Data Kematian, Masukkan NIK Yang Berbeda');
    document.location.href='dashboard_penduduk.php?p=input_kematian'</script>\n";
}else if ($result ==0) {

$query_a="INSERT INTO `tbl_kematian` (`id_kematian`, `no_kk`, `nik` , `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `tgl_kematian`) VALUES ('$idaset', '$id', '$nik', '$nama', '$jk', '$tempat', '$tgl', '$agama', '$tk')";
    $sql_a=mysqli_query($connect, $query_a);
    if ($sql_a) {
    	$query_b="DELETE FROM tbl_penduduk WHERE nik='$nik'";
    $sql_b=mysqli_query($connect, $query_b);
    if ($sql_b) {
      echo "<script>alert('Data Kematian Berhasil Di Simpan');
      document.location.href='dashboard_penduduk.php?p=data_kematian'</script>\n";
      }else{
      echo "<script>alert('Data Kematian Gagal Di Simpan!');
      document.location.href='dashboard_penduduk.php?p=input_kematian'</script>\n";
    }
}
}
}
?>

_