<?php
include "koneksi.php";


$query_a = "SELECT max(id_penghapusan) as maxId FROM tbl_penghapusan_aset";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);
$iduser_a = $data_a['maxId'];
$noUrut_a = (int) substr($iduser_a, 3, 3);
$noUrut_a++;
$char_a = "PNG";
$iduser_a= $char_a . sprintf("%03s", $noUrut_a);

$aset = $_POST['aset'];
$tgl = $_POST['tgl'];
$status = $_POST['status'];
$hapus = $_POST['hapus'];

$query_aset="SELECT * FROM tbl_aset WHERE id_aset='$aset'";
$sql_aset=mysqli_query($connect, $query_aset);
$data_aset=mysqli_fetch_array($sql_aset);
$stok=$data_aset['stok']-$hapus;
if ($hapus>$data_aset['stok']){
    echo "<script>alert('Oops! Jumlah Penghapusan Lebih Besar Dari Stok ...');
    document.location.href='dashboard.php?p=input_penghapusan_aset'</script>\n";
}else{
    
         
         $query_a="INSERT INTO `tbl_penghapusan_aset` (`id_penghapusan`, `id_aset`, `tgl_penghapusan`, `status_aset`, `jumlah_aset_hapus`) VALUES ('$iduser_a', '$aset', '$tgl', '$status', '$hapus')";
        $sql_a=mysqli_query($connect, $query_a);
        if ($sql_a) {
               $query_r="UPDATE tbl_aset SET stok='$stok' WHERE id_aset='$aset'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
                    echo "<script>alert('Proses Penghapusan Berhasil');
                    document.location.href='dashboard.php?p=data_penghapusan_aset'</script>\n";
                }else{
                    echo "<script>alert('Proses Penghapusan Gagal!');
                    document.location.href='dashboard.php?p=input_penghapusan_aset'</script>\n";
                }
            }
            
   
}


?>
