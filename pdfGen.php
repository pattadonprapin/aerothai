<html>
<head>
    <title>AEROTHAI VAN REPORT PDF</title>
</head>
<body>

<?php
require ('fpdf.php');
?>

<?php
class PDF extends FPDF
{
    function Header()
    {
        //Logo
        $this->Image('image/logo.png',15,8,33);
        //Arial bold 15
        $this->SetFont('Arial','B',15);
        //Move to the right
        $this->Cell(60);
        //Title
        $this->Cell(70,10,'AEROTHAI VAN REPORT',1,0,'C');
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



//Colored table
    function FancyTable($header,$data)
    {
        //Colors, line width and bold font
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        //Header
        $w=array(20,85,55,25);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        //Color and font restoration
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        //Data
        $fill=false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
            $this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
            $this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
            $this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w),0,'','T');
    }
}

$pdf=new PDF();
//Column titles
$header=array('Van No.','Task','Date','Hours');
//Data loading
$mysqli = mysqli_connect('localhost','root','','vansystem');
$strSQL = $mysqli->query("SELECT vanNum,task,date,time FROM `report` ");
$resultData = array();
for ($i=0;$i<mysqli_num_rows($strSQL);$i++) {
    $result = mysqli_fetch_array($strSQL);
    array_push($resultData,$result);
}

ob_start();
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Ln(35);
$pdf->FancyTable($header,$resultData);
$pdf->Output();
ob_end_flush();

?>


</body>
</html>