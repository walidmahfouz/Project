<?php
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Setfont('Arial','B',18);
$pdf->Cell(100,10,'this is FPDF DEMO new line ');
$pdf->LN();
$pdf->Cell(100,10,'this is FPDF DEMO new line ');
$pdf->output();

 ?>
