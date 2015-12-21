<?php
include "fpdf.php";
include "../koneksi.php";

$pdf = new FPDF();
$pdf -> AddPage();

$pdf -> SetFont('Arial','B',16);
$pdf -> Cell(0,5,'Taman Pendidikan Al-Quran Baitul Hamim','0','1','C',false);
$pdf -> SetFont('Arial','i',8);
$pdf -> Cell (0,5,'Alamat : Link.Sumber Batu Rt/Rw = 05/05 Cilegon, Banten','0','1','C', false);
$pdf ->Ln(3);
$pdf ->Cell(190,0.6,'','0','1','c',true);
$pdf ->Ln(5);

$pdf ->SetFont('Arial','B',9);
$pdf ->Cell(50,5,'Laporan Hafalan Santri','0','1','L',false);
$pdf ->Ln(3);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(9,7,'No.',1,0,'C');
$pdf->Cell(20,7,'Tanggal Setor',1,0,'C');
$pdf->Cell(25,7,'Juz Ke',1,0,'C');
$pdf->Cell(30,7,'Nama Surat',1,0,'C');
$pdf->Cell(30,7,'Dari ayat ke',1,0,'C');
$pdf->Cell(30,7,'Sampai ayat ke',1,0,'C');
$pdf->Cell(30,7,'ID Ustadz',1,0,'C');
$pdf->Cell(20,7,'Keterangan',1,0,'C');
$pdf->Ln(2);
$no = 0;
$sql = mysql_query ("select * from hafalan order by nomor_ID");
while($data = mysql_fetch_array($sql)){
	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(9,4,$no.".",1,0,'C');
	$pdf->Cell(20,4,$data['tanggal_setor'],1,0,'L');
	$pdf->Cell(25,4,$data['juz_ke'],1,0,'L');
	$pdf->Cell(30,4,$data['nama_surat'],1,0,'L');
	$pdf->Cell(30,4,$data['dari_ayat_ke'],1,0,'L');
	$pdf->Cell(30,4,$data['sampai_ayat_ke'],1,0,'L');
	$pdf->Cell(30,4,$data['user_id'],1,0,'L');
	$pdf->Cell(20,4,$data['keterangan'],1,0,'L');
}
$pdf->Output();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>