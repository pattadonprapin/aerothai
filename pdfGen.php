<?php
require('mysql_table.php');
class PDF extends PDF_MySQL_Table
{
    function Header()
    {
        //Title
        $this->SetFont('Arial','',18);
        $this->Cell(0,6,'PDF From mysql',0,1,'C');
        $this->Ln(10);
        //Ensure table header is output
        parent::Header();
    }
}
//Connect to database
require('connectDB.php');
$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT `vanNum`, `task` from report order by `vanNum`');
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('vanNum',40,'','C');
$pdf->AddCol('task',40,'','C');

//$pdf->AddCol('info',40,'','C');
$prop=array('HeaderColor'=>array(255,150,100),
    'color1'=>array(210,245,255),
    'color2'=>array(255,255,210),
    'padding'=>2);
$pdf->Table('select vanNum, task from report order by vanNum limit 0,10',$prop);
//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F');
header('Content-type: vansystem/pdf');
$pdf->Output('report'.".pdf", 'D');
//header('Location: '.projekter.".pdf");
?>