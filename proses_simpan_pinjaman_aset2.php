<?php
include "koneksi.php";


$query_a = "SELECT max(id_pinjaman) as maxId FROM tbl_pinjaman_aset";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);
$iduser_a = $data_a['maxId'];
$noUrut_a = (int) substr($iduser_a, 3, 3);
$noUrut_a++;
$char_a = "PJM";
$iduser_a= $char_a . sprintf("%03s", $noUrut_a);

$warga = $_POST['warga'];
$tp = $_POST['tp'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$almat = $_POST['almat'];
$tlpn = $_POST['tlpn'];
$aset = $_POST['aset'];
$ja = $_POST['ja'];

$query_aset="SELECT * FROM tbl_aset WHERE id_aset='$aset'";
$sql_aset=mysqli_query($connect, $query_aset);
$data_aset=mysqli_fetch_array($sql_aset);
$stok=$data_aset['stok']-$ja;
if ($ja>$data_aset['stok']){
    echo "<script>alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
    document.location.href='dashboard_warga.php?p=input_pinjaman_aset'</script>\n";
}else{
    
         
         $query_a="INSERT INTO `tbl_pinjaman_aset` (`id_pinjaman`, `id_warga`, `tgl_pengajuan`, `periode`, `tahun`, `alamat`, `no_telepon`, `id_aset`, `jumlah_aset`, `status_pinjaman`, `status_pembayaran`) VALUES ('$iduser_a', '$warga', '$tp', '$bulan', '$tahun', '$almat', '$tlpn', '$aset', '$ja', '', '')";
        $sql_a=mysqli_query($connect, $query_a);
        if ($sql_a) {
               $query_r="UPDATE tbl_aset SET stok='$stok' WHERE id_aset='$aset'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
                    echo "<script>alert('Proses Pengajuan Berhasil');
                    document.location.href='dashboard_warga.php?p=data_pinjaman_aset'</script>\n";
                }else{
                    echo "<script>alert('Proses Pengajuan Gagal!');
                    document.location.href='dashboard_warga.php?p=input_pinjaman_aset'</script>\n";
                }
            }
            
   
}


?>
