<?php
require('fpdf/fpdf.php');
include('config.php');
$id = $_GET['id'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Cell(50,10,'A-Z Weddings & Concepts');
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,'Customers Inquiry',1,0);

$query="SELECT * FROM azir WHERE name='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);
	
	$pdf->Cell(50,8,'Name',1,0);
	$pdf->Cell(50,8,$row['name'],1,1);
	
	$pdf->Cell(50,8,'Email',1,0);
	$pdf->Cell(50,8,$row['email'],1,1);
	
	$pdf->Cell(50,8,'Subject',1,0);
	$pdf->Cell(50,8,$row['subject'],1,1);
	
	$pdf->Cell(50,8,'Date',1,0);
	$pdf->Cell(50,8,$row['date'],1,1);
	
	$pdf->Cell(50,8,'Message',1,0);
	$pdf->Cell(50,8,$row['message'],1,1);
	
}

$pdf->Output();
?>