<?php
include "koneksi.php";
$query = "SELECT max(id_aset) as maxId FROM tbl_aset";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idaset = $data['maxId'];
$noUrut = (int) substr($idaset, 3, 3);
$noUrut++;
$char = "AST";
$idaset= $char . sprintf("%03s", $noUrut);


$nama = $_POST['nama'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$asal = $_POST['asal'];
$stok = $_POST['stok'];


$cek = mysqli_query($connect, "SELECT * FROM tbl_aset WHERE id_aset = '$idaset'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
	echo "<script>alert('Proses Simpan Data Aset Berhasil');
                document.location.href='dashboard.php?p=data_aset'</script>\n";
}else if ($result ==0){
	$query1 = "INSERT INTO `tbl_aset` (`id_aset`, `nama_aset`, `periode`, `tahun`, `tgl_barang_masuk`, `asal_aset`, `stok`) VALUES ('$idaset', '$nama', '$bulan', '$tahun', '$tgl', '$asal', '$stok')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
			echo "<script>alert('Proses Simpan Data Aset Berhasil');
                document.location.href='dashboard.php?p=data_aset'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Aset Gagal');
                document.location.href='dashboard.php?p=input_data_aset'</script>\n";
		}
	}
?>
