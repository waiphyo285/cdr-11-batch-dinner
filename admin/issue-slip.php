<?php
//include connection file 
include_once('../users/config.php');
include_once('../fpdf/fpdf.php');

$id = $_POST['id'];

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('ucsmtla-logo.jpg',10,5,30);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(15);
        // Title
        $this->Cell(80,25,'CDR TICKET RECEIPT',0,0,'C');
        // Line break
        $this->Ln(5);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Powered by WTF',0,0,'L');
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
    }
}

// $db = new dbObj();
// $connString =  $db->getConnstring();
// $display_heading = array('code'=>'Code', 'rollno'=> 'Roll No.', 'sname'=> 'Name','email'=> 'Email','mobile'=>'Mobile','status'=>'Status');

$result = mysqli_query($con, "SELECT code, sname, email, mobile, status, updated_time FROM `students` WHERE `id`='$id' ") or die("database error:". mysqli_error($con));
$header = mysqli_query($con, "Payroll Receipt Slip");

$pdf = new PDF('P','mm',array(100,150));
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

// foreach($header as $heading) {
//     $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
// }
foreach($result as $row) {
    $pdf->Ln();
    foreach($row as $column){ 
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(70,70,70);
        $pdf->SetFont('');    
        $pdf->Cell(80,10,$column,1,1,'L',1);
    }
}

$register_by = mysqli_query($con, "SELECT register_by FROM `students` WHERE `id`='$id' ") or die("database error:". mysqli_error($con));

foreach($register_by as $row) {
    $pdf->Ln();
    foreach($row as $column){ 
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(70,70,70);
        $pdf->SetFont('');    
        $pdf->Cell(40,10,'Full Received By',1,0,'L',0);
        $pdf->Cell(40,10,$column,1,0,'L',0);
    }
}
// $pdf->Cell(40,10,'000',1,10,'L',0);  
// $pdf->Cell(40,10,'001',1,10,'L',0);

//                 $pdf->Ln();

// $pdf->Cell(40,5,'Solid Here',1,0,'L',0);  
// $pdf->Cell(40,5,'[ o ] che1',1,0,'L',0);
// 1,10,'L',0status,updated_t
//                 $pdf->Ln();

// $pdf->Cell(40,5,'002',1,0,'L',0);  
// $pdf->Cell(40,5,'003',1,0,'L',0);

//                 $pdf->Ln();

$pdf->Output('CDR-SLIP.pdf','D');
?>