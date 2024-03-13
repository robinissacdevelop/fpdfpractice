<?php 
ob_start();
require("fpdf/fpdf.php");
$pdf= new FPDF('P','mm','A4');//pts mm cm inches
//a4 a3 a5 Letter Legal
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->SetFillColor(108, 92, 231);//rgb must to fill color for background color
$pdf->SetTextColor(223, 230, 233);//text color
$pdf->Cell(80);
$pdf->Cell(50,10,'Hello world',1,2,'C',true);
$pdf->SetX(50);
$pdf->SetY(30);
$pdf->Cell(50,10,'Hello',1,2,'C',true);
//border L-left R-right T-top B-bottom postioning L-left R-right C-center
$pdf->Image('images/imgforpdf.jpeg',10,50,50,50,'JPG');
//location X Y ,height,Width
$pdf->output();
ob_end_flush();
