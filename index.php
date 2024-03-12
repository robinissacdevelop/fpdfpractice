<?php 
ob_start();
require("fpdf/fpdf.php");
$pdf= new FPDF('P','mm','A4');//pts mm cm inches
//a4 a3 a5 Letter Legal
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->SetFillColor(108, 92, 231);//rgb must to fill color for background color
$pdf->SetTextColor(223, 230, 233);//text color
$pdf->Cell(40,10,'Hello world',1,1,'C',true);
//border L-left R-right T-top B-bottom postioning L-left R-right C-center
$pdf->output();
ob_end_flush();
