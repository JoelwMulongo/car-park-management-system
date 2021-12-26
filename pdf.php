
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();}
require('fpdf.php');
include('inc/connect.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Move to the right
    $this->Cell(30);
	 $this->Ln(6);
    // Title
    $this->Cell(40,10,'VALEMAX CAR PARK',0,0,'C');
	$this->Ln(6);
	$this->SetFont('Arial','B',8);
	$this->Cell(40,10,'RECEIPT',0,0,'C');
   
}


// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$phone=$_SESSION['phone'];
$sql=mysqli_query($connect, "SELECT * FROM zones WHERE phone='$phone' and status='RESERVED'");
	while($row=mysqli_fetch_array($sql)){	
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$pdf->Ln(1);
$pdf->Cell(0,8,'______________________',0,1);
$pdf->SetFont('Times','',6);
$pdf->Cell(0,1,'Date: '. $row['d1'],0,1);
$pdf->SetFont('Times','',10);
$pdf->Cell(0,7,'Number Plate : '. $row['platenumber'],0,1);
$pdf->Cell(0,4,'Mpesa Code : '. $row['account'],0,1);
$pdf->Cell(0,6,'Amount : 120/-',0,1);
$pdf->Cell(0,5,'______________________',0,1);
$pdf->SetFont('Times','B',6);
$pdf->Cell(40,3,'Note: Parking Fee is not refundable',0,1,'C');
$pdf->SetFont('Times','',6);
$pdf->Cell(0,7,'You may need to provide this receipt on request',0,1);
$pdf->Cell(0,7,'',0,1);

$pdf->Output();
}
?>