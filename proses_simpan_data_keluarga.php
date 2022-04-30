<?php
include"koneksi.php";
if (isset($_POST['id']) || isset($_POST['alamat']) || isset($_POST['rt']) || isset($_POST['rw']) || isset($_POST['kelurahan']) || isset($_POST['kecamatan']) || isset($_POST['kabupaten']) || isset($_POST['provinsi']) || isset($_POST['nik']) || isset($_POST['nama']) || isset($_POST['jk']) || isset($_POST['tempat']) || isset($_POST['tgl']) || isset($_POST['agama']) || isset($_POST['pendidikan']) || isset($_POST['pekerjaan']) || isset($_POST['spk']) || isset($_POST['shk']) || isset($_POST['sk'])) {

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
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$spk = $_POST['spk'];
$shk = $_POST['shk'];
$sk = $_POST['sk'];


$query_a="INSERT INTO `tbl_penduduk` (`no_kk`, `nik` , `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_kawin`, `status_hub_keluarga`, `kewarganegaraan`, `rt`, `rw`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES ('$id', '$nik', '$nama', '$jk', '$tempat', '$tgl', '$agama', '$pendidikan', '$pekerjaan', '$spk', '$shk', '$sk', '$rt', '$rw', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi')";
    $sql_a=mysqli_query($connect, $query_a);
    if ($sql_a) {
      echo "<script>alert('Data Anggota Keluarga Berhasil Di Simpan');
      document.location.href='dashboard_penduduk.php?p=data_penduduk'</script>\n";
      }else{
      echo "<script>alert('Data Anggota Keluarga Gagal Di Simpan!');
      document.location.href='dashboard_penduduk.php?p=input_anggota_keluarga'</script>\n";
    }

    }
?>

