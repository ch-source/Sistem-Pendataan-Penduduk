<?php
include'koneksi.php';
session_start();
include"fpdf.php";
require('makefont/makefont.php');
$nok = $_POST['nok'];
$pdf = new FPDF("L","cm","A4");

$sql1="SELECT * FROM tbl_umum WHERE no_kk = '$nok'";
$tampil1=mysqli_query($connect, $sql1);
$lihat1=mysqli_fetch_array($tampil1);
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',30);
$pdf->Cell(28,1,"KARTU KELUARGA",0,1,'C');
$pdf->SetFont('Times','B',25);
$pdf->Cell(28,0.9,"No. ".$lihat1['no_kk'],0,0,'C');
$pdf->Cell(20,2,"",0,1,'L');

$pdf->SetFont('Times','B',15);  
    $pdf->Cell(5, 0.6,"Nama KK",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['nama_kk'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Alamat",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['alamat'],0, 1, 'L'); 
    $pdf->Cell(5, 0.6,"RT/RW",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['rt']."/".$lihat1['rw'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Kelurahan",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['kelurahan'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Kecamatan",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['kecamatan'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Kabupaten",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['kabupaten'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Provinsi",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat1['provinsi'],0, 1, 'L');


$pdf->ln(1);
$pdf->SetFont('Times','B',11);
$pdf->Cell(6, 0.6, 'NIK', 1, 0, 'C');
$pdf->Cell(6, 0.6, 'Nama', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(3, 0.6, 'Tempat Lahir', 1, 0, 'C');
$pdf->Cell(5, 0.6, 'Tgl. Lahir', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Agama', 1, 1, 'C');
$sql="SELECT * FROM tbl_penduduk WHERE no_kk='".$lihat1['no_kk']."'";
$tampil=mysqli_query($connect, $sql);
while ($lihat=mysqli_fetch_array($tampil)) {
$pdf->SetFont('Times','',11);
$pdf->Cell(6, 0.6,$lihat['nik'],1, 0, 'L');
$pdf->Cell(6, 0.6, $lihat['nama'],1, 0, 'L');
$pdf->Cell(4, 0.6, $lihat['jk'],1, 0, 'L');
$pdf->Cell(3, 0.6, $lihat['tempat_lahir'],1, 0, 'L');
$pdf->Cell(5, 0.6, $lihat['tgl_lahir'],1, 0, 'L');
$pdf->Cell(4, 0.6, $lihat['agama'],1, 1, 'L');
}

$pdf->SetFont('Times','B',11);
$pdf->Cell(6, 0.6, 'Pendidikan', 1, 0, 'C');
$pdf->Cell(6, 0.6, 'Pekerjaan', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Status Kawin', 1, 0, 'C');
$pdf->Cell(8, 0.6, 'Status Hub. Keluarga', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Kewarganegaraan', 1, 1, 'C');
$sql_x="SELECT * FROM tbl_penduduk WHERE no_kk='".$lihat1['no_kk']."'";
$tampil_x=mysqli_query($connect, $sql_x);
while ($lihat2=mysqli_fetch_array($tampil_x)) {
$pdf->SetFont('Times','',11);
$pdf->Cell(6, 0.6, $lihat2['pendidikan'],1, 0, 'L');
$pdf->Cell(6, 0.6, $lihat2['pekerjaan'],1, 0, 'L');
$pdf->Cell(4, 0.6, $lihat2['status_kawin'],1, 0, 'L');
$pdf->Cell(8, 0.6, $lihat2['status_hub_keluarga'],1, 0, 'L');
$pdf->Cell(4, 0.6, $lihat2['kewarganegaraan'],1, 1, 'L');

}
$order="SELECT * FROM tbl_penduduk WHERE no_kk = '$nok'";
$query_order=mysqli_query($connect, $order);
$data_order=array();
while(($row_order=mysqli_fetch_array($query_order)) !=null){
$data_order[]=$row_order;
 }
$count=count($data_order);
$pdf->SetFont('Times','B',11);
$pdf->Cell(24, 0.6,"Jml. Anggota Keluarga",1, 0, '');
$pdf->Cell(4, 0.6, $count ,1, 1, 'L');
 $pdf->Cell(20,0.6,"----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,1,'L');
    $pdf->SetFont('Times','i',8);
    $pdf->Cell(20.5,0.7,"Meler, ".date("D-d/m/Y"),0,1,'L');
   

$pdf->Output();
?>