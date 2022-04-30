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
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$agama = $_POST['agama'];
$spk = $_POST['spk'];
$shk = $_POST['shk'];
$sk = $_POST['sk'];

    $query="UPDATE tbl_penduduk SET no_kk='$nk', nama='$nama', jk='$jk', tempat_lahir='$tempat', tgl_lahir='$tgl', agama='$agama', alamat='$alamat', rt='$rt', rw='$rw', kelurahan='$kelurahan', kecamatan='$kecamatan', kabupaten='$kabupaten', provinsi='$provinsi', status_hub_keluarga='$shk', kewarganegaraan='$sk', status_kawin='$spk', pekerjaan='$pekerjaan', pendidikan='$pendidikan' WHERE nik='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Anggota Keluarga Berhasil Diubah');
      document.location.href='dashboard_penduduk.php?p=data_penduduk'</script>\n";
    }else{
      echo "<script>alert('Data Anggota Keluarga Gagal Diubah!');
      document.location.href='dashboard_penduduk.php?p=edit_anggota_keluarga&id=".$id."'</script>\n";
    }
?>