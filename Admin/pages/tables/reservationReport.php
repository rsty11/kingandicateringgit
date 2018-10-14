<?php
require('../pdf/fpdf.php');
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(200,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(7,30,50,35,20,20,15,30,40,20,20);
	
	
	//Header
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	
	//Data
	$this->SetFont('Arial','',9);
	foreach ($data as $eachResult) 
	{ //width
	    $this->Cell(7,10,$eachResult["res_ID"],1,0,'C');
		$this->Cell(30,10,$eachResult["resdate"],1,0,'C');
		$this->Cell(50,10,$eachResult["name"],1,0,'C');
		$this->Cell(35,10,$eachResult["email"],1,0,'C');
		$this->Cell(20,10,$eachResult["phone"],1,0,'C');
		$this->Cell(20,10,$eachResult["package"],1,0,'C');
		$this->Cell(15,10,$eachResult["menu"],1,0,'C');
		$this->Cell(30,10,$eachResult["date"],1,0,'C');
		$this->Cell(40,10,$eachResult["location"],1,0,'C');
		$this->Cell(20,10,$eachResult["pax"],1,0,'C');
		$this->Cell(20,10,$eachResult["total"],1,0,'C');
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('ID','Reservation Date','Client Name','Email', 'Phone', 'Package', 'Menu', 'Date', 'Location', 'Pax', 'Total');
//Data loading
//*** Load MySQL Data ***//
//db settings
$db_username = 'id4361398_kingandi';
$db_password = 'beardmaaan';
$db_name = 'id4361398_kingandi';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$currMonth = date('m');
$strSQL = "Select * From  reservations";
$objQuery = mysqli_query($mysqli,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);

}
//************************//

//***********************///	
//*** Table 1 ***//
$pdf->AddPage('L','Legal',0);
	
	$pdf->SetFont('Helvetica','b',14);
	$pdf->Cell(276,5,'King & I Events and Catering',0,0,'L');
	$pdf->Ln();
	
	$pdf->SetFont('Helvetica','b',12);
	$pdf->Cell(276,11,'CUSTOMER RESERVATIONS',0,0,'L');
	$pdf->Ln();
	
	$pdf->SetFontSize(7);
	$pdf->Cell(276,11);
	$result=mysqli_query($mysqli,"select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysqli_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	$pdf->Cell(0);
	$pdf->SetFontSize(10);
	$pdf->Cell(54);
	//$get_user = $_GET['username'];
	//$pdf->Write(5, 'Printed By: '.$get_user.'');
	$pdf->Ln(-1);
	
	//display numbers of reports
	$result=mysqli_query($mysqli,"SELECT * FROM reservations ") or die ("Database query failed: $query" . mysql_error());
	
	$count = mysqli_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, 'Reservation Count : '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>

