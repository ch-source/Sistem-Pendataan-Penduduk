<?php
include"koneksi.php";
$id = $_GET['id'];


$query2="UPDATE tbl_penduduk_keluar SET status_pk='Valid' WHERE id_pk='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
	echo "<script>alert('Data Pengajuan Berhasil Divalidasi');
	document.location.href='dashboard.php?p=data_penduduk_keluar'</script>\n";
}else{
	echo "<script>alert('Data Pengajuan Keluar Gagal Divalidasi');
	document.location.href='dashboard.php?p=data_penduduk_keluar'</script>\n";
}
?>