<?php
	include 'koneksi.php';
	define('FPDF_FONTPATH','font/');
	require('fpdf.php');
	
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',8);
	
	$pdf->Cell(178,5,'CETAK LAPORAN',0,1,'C',0);
	$pdf->Cell(130,5,'Dibuat Oleh: Hanif',0,0,'L',0);
	$pdf->Cell(48,5,'Tanggal: '.date('d M Y',time()),0,1,'R',0);
	
	$pdf->SetFillColor(209,204,184);
	$pdf->Cell(10,5,'#',1,0,'L',1);
	$pdf->Cell(40,5,'Tanggal Test',1,0,'L',1);
	$pdf->Cell(50,5,'Kabupaten',1,0,'C',1);
	$pdf->Cell(50,5,'Desa',1,0,'C',1);
	$pdf->Cell(30,5,'Kategori',1,1,'C',1);
	
	$pdf->SetFont('Arial','',8);
	$cntA=0;
	$sql="SELECT * FROM testing ORDER BY tgl DESC";
	$hasil=$koneksi->query($sql);
    while($hsl=$hasil->fetch_assoc()){
        $cntA++;
		if($hsl['kategori']=='TERTINGGAL'){
			$pdf->SetFillColor(250,90,90);
		} else if ($hsl['kategori']=='BERKEMBANG'){
			$pdf->SetFillColor(250,250,90);
		} else {
			$pdf->SetFillColor(90,250,90);
		}
		$pdf->Cell(10,5,$cntA,1,0,'L',1);
		$pdf->Cell(40,5,date('d M Y H:i:s',strtotime($hsl['tgl'])),1,0,'C',1);
		$pdf->Cell(50,5,$hsl['nama_kabupaten'],1,0,'L',1);
		$pdf->Cell(50,5,$hsl['nama_desa'],1,0,'L',1);
		$pdf->Cell(30,5,$hsl['kategori'],1,1,'C',1);
	}
	$pdf->Output();
?>