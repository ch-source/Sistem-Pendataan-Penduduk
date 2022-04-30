<?php
include'koneksi.php';
include"fpdf.php";
require('makefont/makefont.php');
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->SetX(1.6);   
$pdf->Image('img/lg.png', 1, 1, 2);
$pdf->SetX(1.6);
$pdf->SetFont('Times','B',12);
$pdf->SetX(3);            
$pdf->MultiCell(15.5,0.6,'KANTOR DESA MELER',0,'L');
$pdf->SetX(3);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(15.5,0.6,'Desa Meler, Kecamatan Ruteng, Kabupaten Manggarai',0,'L'); 
$tglaw = $_POST['tglaw'];
$tglak = $_POST['tglaw'];
$pdf->SetX(3);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(22.5,0.6,"Laporan Data Kelahiran Tanggal: ".$tglaw."-".$tglak,0,'L'); 
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->SetFont('Times','i',8);
$tglaw = $_POST['tglaw'];
$tglak = $_POST['tglaw'];
$pdf->ln(1);
$pdf->Cell(3.5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Times','B',8);
$pdf->Cell(1, 0.6, 'No', 1, 0, 'C');
$pdf->Cell(3, 0.6, 'No. KK', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'NIK', 1, 0, 'L');
$pdf->Cell(4, 0.6, 'Nama', 1, 0, 'L');
$pdf->Cell(2.5, 0.6, 'J. Kelamin', 1, 0, 'L');
$pdf->Cell(4, 0.6, 'TTL', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'RT/RW', 1, 0, 'L');
$pdf->Cell(3, 0.6, 'Alamat', 1, 0, 'L');
$pdf->Cell(3, 0.6, 'Kelurahan', 1, 0, 'L');
$pdf->Cell(3, 0.6, 'Kecamatan', 1, 1, 'L');
$no=1;
$sql="SELECT * FROM tbl_kelahiran WHERE tgl_lahir BETWEEN '$tglaw' AND '$tglak'";
$tampil=mysqli_query($connect, $sql);
while($lihat=mysqli_fetch_array($tampil)){
    $pdf->SetFont('Times','',7);
    $pdf->Cell(1, 0.6, $no , 1, 0, 'C');
    $pdf->Cell(3, 0.6, $lihat['no_kk'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['nik'],1, 0, 'L');
    $pdf->Cell(4, 0.6, $lihat['nama'],1, 0, 'L');
    $pdf->Cell(2.5, 0.6, $lihat['jk'],1, 0, 'L');
    $pdf->Cell(4, 0.6, $lihat['tempat_lahir']."/".$lihat['tgl_lahir'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['rt']."/".$lihat['rw'],1, 0, 'L');
    $pdf->Cell(3, 0.6, $lihat['alamat'],1, 0, 'L');
    $pdf->Cell(3, 0.6, $lihat['kelurahan'],1, 0, 'L');
    $pdf->Cell(3, 0.6, $lihat['kecamatan'],1, 1, 'L');
    $no++;
}

$order="SELECT * FROM tbl_kelahiran WHERE tgl_lahir BETWEEN '$tglaw' AND '$tglak'";
$query_order=mysqli_query($connect, $order);
$data_order=array();
while(($row_order=mysqli_fetch_array($query_order)) !=null){
$data_order[]=$row_order;
}
$count=count($data_order);
$pdf->SetFont('Times','B',8);
$pdf->Cell(24.5, 0.6,"Jumlah Kelahiran",1, 0, '');
$pdf->Cell(3, 0.6, $count ,1, 1, 'C');

$pdf->Output();
?>