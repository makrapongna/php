<?php
include("connect.php");

$find_id = isset($_REQUEST["find"]) ? $_REQUEST["find"] : "";
        if($find_id!=""){
            $sql = "SELECT * FROM employee WHERE id = ".$find_id;
        }else{
            $sql = "SELECT * FROM employee"; 
        }
        $result = @mysqli_query($condb,$sql);

        
require('fpdf182/fpdf.php');
if(@mysqli_num_rows($result)>0){
    
$row = mysqli_fetch_array($result);
$pdf = new FPDF('P','mm','A4');

$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->AddPage();

$pdf->Image('img/20200816125252.jpg',10,6,20,20);
//$pdf->SetFont('THSarabunNew','',16);
//$pdf->Cell(80, 20, iconv('UTF-8', 'cp874', 'สวัสดี'));
$pdf->SetFont('THSarabunNew','B',20);
//$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'สวัสดี'));

$pdf->Cell(200,0,iconv('UTF-8', 'cp874', 'หัวข้อรายงานการประชุม3333333333333'),0,0,'C');
    // Line break
    $pdf->Ln(10);
    $pdf->SetX(50);
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(10, 100, iconv('UTF-8', 'cp874', 'ชื่อ '.$row['id']));
$pdf->Ln(5);
$pdf->SetX(50);
$pdf->Cell(10, 100, iconv('UTF-8', 'cp874', 'นามสกุล '.$row['name']));
$pdf->Output();

}



?>