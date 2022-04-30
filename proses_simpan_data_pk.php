<?php
include"koneksi.php";
if (isset($_POST['id']) || isset($_POST['nik']) || isset($_POST['nama']) || isset($_POST['tglp']) || isset($_POST['rww']) || isset($_POST['rtt']) || isset($_POST['alt']) ||  isset($_POST['ktj']) || isset($_POST['kctj']) || isset($_POST['kbtj']) || isset($_POST['ptj']) || isset($_POST['ktr'])) {

$query = "SELECT max(id_pk) as maxId FROM tbl_penduduk_keluar";
$hasil = mysqli_query($connect,$query);
$data_x = mysqli_fetch_array($hasil);
$idaset = $data_x['maxId'];
$noUrut = (int) substr($idaset, 3, 3);
$noUrut++;
$char = "PK-";
$idaset= $char . sprintf("%03s", $noUrut);

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tglp = $_POST['tglp'];
$rww = $_POST['rww'];
$rtt = $_POST['rtt'];
$alt = $_POST['alt'];
$ktj = $_POST['ktj'];
$kctj = $_POST['kctj'];
$kbtj = $_POST['kbtj'];
$ptj = $_POST['ptj'];
$ktr =$_POST['ktr'];

$cek = mysqli_query($connect, "SELECT * FROM tbl_penduduk_keluar WHERE nik = '$nik' AND id_pk='$idaset'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Pengajuan Penduduk Keluar Gagal!, NIK Yang Anda Masukkan Sudah Terdaftar Di Data Penduduk Keluar, Masukkan NIK Yang Berbeda');
    document.location.href='dashboard_penduduk.php?p=input_penduduk_keluar'</script>\n";
}else if ($result ==0) {
$query_a="INSERT INTO `tbl_penduduk_keluar` (`id_pk`, `no_kk`, `nik` , `nama`, `tgl_pengajuan`, `alamat_tujuan`, `rt_tujuan`, `rw_tujuan`, `kelurahan_tujuan`, `kec_tujuan`, `kab_tujuan`, `provinsi_tujuan`, `ket_pk`, `status_pk`) VALUES ('$idaset', '$id', '$nik', '$nama', '$tglp', '$alt', '$rtt', '$rww', '$ktj', '$kctj', '$kbtj', '$ptj', '$ktr', '')";
    $sql_a=mysqli_query($connect, $query_a);
    if ($sql_a) {
    	$query_b="DELETE FROM tbl_penduduk WHERE nik='$nik'";
    $sql_b=mysqli_query($connect, $query_b);
    if ($sql_b) {
      echo "<script>alert('Data Pengajuan Penduduk Keluar Berhasil Di Simpan, Silahkan Tunggu Sampai Data Divalidasi Oleh Admin');
      document.location.href='dashboard_penduduk.php?p=data_penduduk_keluar'</script>\n";
      }else{
      echo "<script>alert('Data Pengajuan Penduduk Keluar Gagal Di Simpan!');
      document.location.href='dashboard_penduduk.php?p=input_penduduk_keluar'</script>\n";
    }
}
}
}
?>