<?php
include"koneksi.php";
$id=$_GET['id'];

$query1 = "UPDATE tbl_pinjaman_aset SET status_pinjaman='Stok Barang Tidak Ada' WHERE id_pinjaman='$id'";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
		echo "<script>alert('Proses Konfirmasi Berhasil');
                document.location.href='dashboard.php?p=data_pinjaman_aset'</script>\n";
		}else{
		echo "<script>alert('Proses Konfirmasi Gagal');
                document.location.href='dashboard.php?p=detail_pinjaman_aset'</script>\n";
    }

?>