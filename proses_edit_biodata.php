<?php
include"koneksi.php";
$id = $_GET['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

$query_a="UPDATE tbl_warga SET nama_warga='$nama', jk='$jk', alamat='$alamat', no_tlpn='$telepon', email='$email' WHERE id_warga='$id'";
$sql_a=mysqli_query($connect, $query_a);
if ($sql_a) {
  $query_b="UPDATE tbl_user SET nama_user='$nama' WHERE id_warga='$id'";
  $sql_b=mysqli_query($connect, $query_b);
  if ($sql_b) {
    echo "<script>alert('Biodata Anda Berhasil Diubah, Silahkan Login Lagi');
    document.location.href='./index.php'</script>\n";
  }else{
    echo "<script>alert('Biodata Anda Gagal Diubah!');
    document.location.href=dashboard_warga.php?p=edit_biodata_warga&=".$id."'</script>\n";
  }
}
?>