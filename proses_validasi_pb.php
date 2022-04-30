<?php
include"koneksi.php";
$id = $_GET['id'];


$query2="UPDATE tbl_penduduk_masuk SET status_penduduk='Valid' WHERE id_pm='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
	echo "<script>alert('Data Penduduk Baru Berhasil Divalidasi');
	document.location.href='dashboard.php?p=data_penduduk_masuk'</script>\n";
}else{
	echo "<script>alert('Data Penduduk Baru Gagal Divalidasi');
	document.location.href='dashboard.php?p=data_penduduk_masuk'</script>\n";
}
?>