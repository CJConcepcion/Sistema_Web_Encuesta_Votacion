<?php
	include 'plantillapdf.php';
	require 'conexion.php';
	
	$sql = "SELECT * FROM candidatos";
	$query=mysqli_query($mysqli,$sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(190,3,'Cooperativa S. M. Juan XXIII',0,1,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(190, 10,'Santiago, Veraguas ,'. date('d') . ' de '. date('M'). ' de '. date('Y'),0,1,'C');

	$pdf->SetFillColor(230,230,230);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(55,6,'CARGO',1,0,'C',1);
	$pdf->Cell(50,6,'POSTULADO A',1,0,'C',1);
	$pdf->Cell(25,6,'VOTOS',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);

	while($row = mysqli_fetch_array($query))
	{
		$pdf->Cell(10,6,utf8_decode($row['id']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['nombre']),1,0,'J');
		$pdf->Cell(55,6,utf8_decode($row['puesto']),1,0,'J');
		$pdf->Cell(50,6,$row['postulacion'],1,0,'J');
		$pdf->Cell(25,6,utf8_decode($row['votes']),1,1,'C');
	}
	$pdf->Output();
?>