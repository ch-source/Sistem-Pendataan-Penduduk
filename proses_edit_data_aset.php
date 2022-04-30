<?php 
include"koneksi.php";

$id=$_GET['id'];
$nama = $_POST['nama'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl =$_POST['tgl'];
$asal = $_POST['asal'];
$stok = $_POST['stok'];

    $query="UPDATE tbl_aset SEt nama_aset='$nama', periode='$bulan', tahun='$tahun', tgl_barang_masuk='$tgl', asal_aset='$asal', stok='$stok' WHERE id_aset='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Aset Berhasil Diubah');
      document.location.href='dashboard.php?p=data_aset'</script>\n";
    }else{
      echo "<script>alert('Data Aset Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_aset&id=".$id."'</script>\n";
    }
?>
