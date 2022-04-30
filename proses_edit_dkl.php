<?php 
include"koneksi.php";

$id=$_GET['id'];
$nk = $_POST['nk'];
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

    $query="UPDATE tbl_kelahiran SET no_kk='$nk', nik='$nik', nama='$nama', jk='$jk', tempat_lahir='$tempat', tgl_lahir='$tgl', agama='$agama', alamat='$alamat', rt='$rt', rw='$rw', kelurahan='$kelurahan', kecamatan='$kecamatan', kabupaten='$kabupaten', provinsi='$provinsi', status_hub_keluarga='$shk', kewarganegaraan='$sk' WHERE id_kelahiran='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Kelahiran Berhasil Diubah');
      document.location.href='dashboard_penduduk.php?p=data_kelahiran'</script>\n";
    }else{
      echo "<script>alert('Data Kelahiran Gagal Diubah!');
      document.location.href='dashboard_penduduk.php?p=edit_data_kelahiran&id=".$id."'</script>\n";
    }
?>