<?php 
include"koneksi.php";

$id=$_GET['id'];
$nk =$_POST['nk'];
$nik =$_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat =$_POST['tempat'];
$tgl =$_POST['tgl'];
$agama =$_POST['agama'];
$tk =$_POST['tk'];

    $query="UPDATE tbl_kematian SET no_kk='$nk', nik='$nik', nama='$nama', jk='$jk', tempat_lahir='$tempat', tgl_lahir='$tgl', agama='$agama', tgl_kematian='$tk' WHERE id_kematian='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Kematian Berhasil Diubah');
      document.location.href='dashboard_penduduk.php?p=data_kematian'</script>\n";
    }else{
      echo "<script>alert('Data Kematian Gagal Diubah!');
      document.location.href='dashboard_penduduk.php?p=edit_data_kematian&id=".$id."'</script>\n";
    }
?>