<?php
session_start();
require("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("ARIAL","B",13);
$pdf->Cell(190,20,'Skylabs',1,1,'C');

$pdf->Cell(95,15,'Patient Name:',1,0,'C');
$pdf->Cell(95,15,$_SESSION['patient_name'],1,1,'C');
$pdf->Cell(95,15,'Patient Email:',1,0,'C');
$pdf->Cell(95,15,$_SESSION['patient_email'],1,1,'C');
$pdf->Cell(95,15,'Patient phone number:',1,0,'C');
$pdf->Cell(95,15,$_SESSION['patient_phone'],1,1,'C');
$pdf->Cell(95,15,'Appointment date :',1,0,'C');
$pdf->Cell(95,15,$_SESSION['date'],1,1,'C');
$pdf->Cell(95,15,'Doctor name:',1,0,'C');
$pdf->Cell(95,15,$_SESSION['doctor_name'],1,1,'C');
$pdf->Cell(95,15,'Department:',1,0,'C');
$pdf->Cell(95,15,$_SESSION['department'],1,1,'C');
$pdf->Cell(95,15,'Consultation fees:',1,0,'C');
$pdf->Cell(95,15,'Rs 399',1,1,'C');

$pdf->ln(30);

$pdf->ln(30);
$pdf->Cell(75,20,"Email: contact.skylabs@gmail.com",0,0,"C");
$pdf->Cell(150,20,"Signature",0,1,"C");
$pdf->cell(50,20,"Phone:+91 8277082770",0,1,"C");
$file = $_SESSION['patient_name'].time().'.pdf';

$pdf->output($file,'D');
?>