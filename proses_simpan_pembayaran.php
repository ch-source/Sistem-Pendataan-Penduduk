<?php
include "koneksi.php";
$query = "SELECT max(id_pembayaran) as maxId FROM tbl_pembayaran";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idpembayaran = $data['maxId'];
$noUrut = (int) substr($idpembayaran, 3, 3);
$noUrut++;
$char = "PMB";
$idpembayaran= $char . sprintf("%03s", $noUrut);

$id=$_GET['id'];
$warga =$_POST['warga'];
$aset =$_POST['aset'];
$bulan =$_POST['bulan'];
$tahun =$_POST['tahun'];
$tgl =$_POST['tgl'];
$ja =$_POST['ja'];
$jb =$_POST['jb'];


         $query_a="INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_warga`, `id_aset`, `periode`,`tahun`, `tgl_pembayaran`, `jumlah_aset`, `jumlah_bayar`) VALUES ('$idpembayaran', '$warga', '$aset', '$bulan', '$tahun', '$tgl', '$ja', '$jb')";
        $sql_a=mysqli_query($connect, $query_a);
        if ($sql_a) {
               $query_r="UPDATE tbl_pinjaman_aset SET status_pembayaran='1' WHERE id_pinjaman='$id'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
                    echo "<script>alert('Data Pembayaran Berhasil Disimpan');
			        document.location.href='dashboard.php?p=data_pembayaran'</script>\n";
                }else{
                    echo "<script>alert('Data Pembayaran Gagal Disimpan!');
                    document.location.href='dashboard.php?p=input_pembayaran_aset&id=".$id."'</script>\n";
                }
            }
          
?>
