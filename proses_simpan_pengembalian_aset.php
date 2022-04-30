<?php
include "koneksi.php";


$query_a = "SELECT max(id_pengembalian) as maxId FROM tbl_pengembalian";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);
$iduser_a = $data_a['maxId'];
$noUrut_a = (int) substr($iduser_a, 3, 3);
$noUrut_a++;
$char_a = "PGM";
$iduser_a= $char_a . sprintf("%03s", $noUrut_a);

$id=$_GET['id'];
$warga = $_POST['warga'];
$idaset = $_POST['idaset'];
$tp = $_POST['tp'];
$jp = $_POST['jp'];
$ktr = $_POST['ktr'];

$query_aset="SELECT * FROM tbl_aset WHERE id_aset='$idaset'";
$sql_aset=mysqli_query($connect, $query_aset);
$data_aset=mysqli_fetch_array($sql_aset);
$stok=$data_aset['stok']+$jp;
         
         $query_a="INSERT INTO `tbl_pengembalian` (`id_pengembalian`, `id_pinjaman`, `id_warga`, `id_aset`, `tgl_pengembalian`, `jumlah_pengembalian`, `keterangan`) VALUES ('$iduser_a', '$id', '$warga', '$idaset', '$tp', '$jp', '$ktr')";
        $sql_a=mysqli_query($connect, $query_a);
        if ($sql_a) {
               $query_r="UPDATE tbl_aset SET stok='$stok' WHERE id_aset='$idaset'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
                    echo "<script>alert('Proses Pengembalian Berhasil');
                    document.location.href='dashboard.php?p=data_pengembalian'</script>\n";
                }else{
                    echo "<script>alert('Proses Pengembalian Gagal!');
                    document.location.href='dashboard.php?p=input_pengembalian_aset&id=".$id."'</script>\n";
                }
            }
?>
