<?php

error_reporting(0);
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $m_name=$_POST['m_name'];
    $email=$_POST['email'];
    $aadhar_num=$_POST['aadhar_num'];
    $b_date=$_POST['b_date'];
    $phone=$_POST['phone'];
    $fNo=$_POST['f_no'];
    $sNo=$_POST['s_no'];
    $landmark=$_POST['landmark'];
    $city=$_POST['cname'];
    $dist=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['p_code'];
    $class=$_POST['class'];
    $photo=$_POST['s_photo'];
    $sign=$_POST['s_sign'];
    $marksheet=$_POST['s_marksheet'];
    $lc=$_POST['lc'];
    /* $file = $_FILE['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file; */

    include "fpdf/fpdf.php";

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",12);
    $pdf->Cell(0,10,"Admission Form",1,1,'C');
    $pdf->Cell(20,10,"Name",1,0);
    $pdf->Cell(20,10,"Mother Name",1,0);
    $pdf->Cell(20,10,"Email",1,0);
    $pdf->Cell(20,10,"Aadhar Number",1,0);
    $pdf->Cell(20,10,"Phone",1,0);
    $pdf->Cell(20,10,"Flat No/Building Name",1,0);
    $pdf->Cell(20,10,"Street No/Street Name",1,0);
    $pdf->Cell(20,10,"Landmark",1,0);
    $pdf->Cell(20,10,"City Name",1,0);
    $pdf->Cell(20,10,"District",1,0);
    $pdf->Cell(20,10,"State",1,0);
    $pdf->Cell(20,10,"PinCode",1,0);
    $pdf->Cell(20,10,"Class",1,0);
    $pdf->Cell(20,10,"Photo",1,0);
    $pdf->Cell(20,10,"Sign",1,0);
    $pdf->Cell(20,10,"Marksheet",1,0);
    $pdf->Cell(20,10,"Leaving Certificate",1,0);

    $pdf->Cell(20,10,$name,1,0);
    $pdf->Cell(20,10,$m_name,1,0);
    $pdf->Cell(20,10,$email,1,0);
    $pdf->Cell(20,10,$aadhar_num,1,0);
    $pdf->Cell(20,10,$phone,1,0);
    $pdf->Cell(20,10,$fNo,1,0);
    $pdf->Cell(20,10,$sNo,1,0);
    $pdf->Cell(20,10,$landmark,1,0);
    $pdf->Cell(20,10,$city,1,0);
    $pdf->Cell(20,10,$city,1,0);
    $pdf->Cell(20,10,$state,1,0);
    $pdf->Cell(20,10,$pincode,1,0);
    $pdf->Cell(20,10,$class,1,0);
    $pdf->Cell(20,10,$photo,1,0);
    $pdf->Cell(20,10,$sign,1,0);
    $pdf->Cell(20,10,$marksheet,1,0);
    $pdf->Cell(20,10,$lc,1,0);

    $pdf->output();
}
?>