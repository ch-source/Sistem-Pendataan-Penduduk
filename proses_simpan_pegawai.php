<?php
include "koneksi.php";
$query = "SELECT max(id_pegawai) as maxId FROM tbl_pegawai";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idpegawai = $data['maxId'];
$noUrut = (int) substr($idpegawai, 3, 3);
$noUrut++;
$char = "PGW";
$idpegawai= $char . sprintf("%03s", $noUrut);

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl =$_POST['tgl'];
$agama =$_POST['agama'];
$alt =$_POST['alt'];
$jabatan =$_POST['jabatan'];
$notel =$_POST['notel'];

if(isset($_POST['pilih_gambar'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "/gambar/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
		$query="INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `jk`, `tgl_lahir`,`agama`, `alamat`, `jabatan`, `no_tlpn`) VALUES ('$idpegawai', '$nama', '$jk', '$tgl', '$agama','$alt', '$jabatan', '$notel')";
		$sql=mysqli_query($connect, $query);
		if ($sql) {
			echo "<script>alert('Data Pegawai Berhasil Disimpan');
			document.location.href='dashboard.php?p=data_pegawai'</script>\n";
		}else{
			echo "<script>alert('Data Pegawai Gagal Disimpan');
			document.location.href='dashboard.php?p=input_pegawai'</script>\n";
		}
	}
}else{
	$query_a="INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `jk`, `tgl_lahir`,`agama`, `alamat`, `jabatan`, `no_tlpn`) VALUES ('$idpegawai', '$nama', '$jk', '$tgl', '$agama','$alt', '$jabatan', '$notel')";
	$sql_a=mysqli_query($connect, $query_a);
	if ($sql_a) {
		echo "<script>alert('Data Pegawai Berhasil Disimpan');
		document.location.href='dashboard.php?p=data_pegawai'</script>\n";
	}else{
		echo "<script>alert('Data Pegawai Gagal Disimpan');
		document.location.href='dashboard.php?p=input_pegawai'</script>\n";
	}
}

?>