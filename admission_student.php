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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body {
  background-color: lightblue;
}
    .input_deg{
        width: 500px;
        padding-bottom: 2px;
        border-radius: 5px;
        border: 1px solid rgb(12, 12, 12);
        height: 40px;
    }
    .label_text{
        display: inline-block;
        width: 100px;
        text-align: left;
        padding-right: 20px;
        padding-bottom: 25px;
        font-size: 20px; 
        font-family: 'Times New Roman', Times, serif;
    }
    .school{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    .adm{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    .per{
        font-size: 30px; 
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    .input_txt1{
        width: 500px;
    height: 40px;
    border-radius: 5px;
    border: 2 px solid blue;
    text-align: left;
        padding-right: 20px;
    }
    .sl{
        width: 400px;
    height: 40px;
    border-radius: 5px;
    border: 2 px solid blue;
    text-align: left;
        padding-right: 60px;
    }
    .label_text1{
        display: inline-block;
        width: 100px;
        text-align: left;
        padding-right: 25px;
        font-size: 25px; 
        font-family: 'Times New Roman', Times, serif;
    }
    .sl1{
        display: inline-block;
        width: 90px;
        text-align: left;
        padding-right: 30px;
        font-size: 20px; 
        font-family: 'Times New Roman', Times, serif;
    }
    .c{
        font-size: 25px;
        font-family: 'Times New Roman', Times, serif;
        width: 70px;
    }
  </style>
</head>
<body>
    

<center>
    <h1 class="school">Madrasa Imdadul Uloom Yusufiya Urdu High School & Jr. College Daund</h1>
        <h1 class="adm">Admission Form</h1>
    </center>


    <div align="center" class="admission_form">
        
       <!--  <form action="data_check.php" method="POST"> -->
        <form id="form"></form>
        <fieldset>
        <h1 class="per">Personal Details</h1>

            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Mother Name</label>
                <input class="input_deg" type="text" name="m_name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="email" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Aadhar Number</label>
                <input class="input_deg" type="number" name="aadhar_num">
            </div>

            <div class="adm_int">
                <label class="label_text">Date of Birth</label>
                <input class="input_deg1" type="date" name="b_date">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="phone" name="phone">
            </div>
            </fieldset>
            <fieldset>
            <h1 class="per">Residential Address</h1>
            <div class="adm_int">
                <label class="label_text">Flat No/Building Name</label>
                <input type="text" class="input_txt1" name="f_no">
            </div>
            <div class="adm_int">
                <label class="label_text">Street No/Street Name</label>
                <input type="text" class="input_txt1" name="s_no">
            </div>
            <div class="adm_int">
                <label class="label_text">Landmark</label>
                <input type="text" class="input_txt1" name="landmark">
            </div>
            <div class="adm_int">
                <label class="label_text">City Name</label>
                <input type="text" class="input_txt1" name="cname">
            </div>
            <div class="adm_int">
                <label class="label_text">District</label>
                <input type="text" class="input_txt1" name="district">
            </div>
            <div class="adm_int">
                <label class="label_text">State</label>
                <input type="text" class="input_txt1" name="state">
            </div>
            <div class="adm_int">
                <label class="label_text">PinCode</label>
                <input type="number" class="input_txt1" name="p_code">
            </div>
            </fieldset>
            <fieldset>
            <h1 class="per">Educational Details</h1>
<br>
            <label class="c" name="class">Class</label>
             <select class="sl1">
                <option class="sl" value="11th">11th Class</option>
                <option class="sl" value="12th">12th Class</option>
            </select>
            <br><br>
            <div class="adm_int">
                <label class="label_text1">Photo</label>
                <input type="file" name="s_photo">
            </div>
            <br><br>
            <div class="adm_int">
                <label class="label_text1">Sign</label>
                <input type="file" name="s_sign">
            </div>
            <br><br>
            <div class="adm_int">
                <label class="label_text1">Marksheet</label>
                <input type="file" name="s_marksheet">
            </div>
            <br><br>
            <div class="adm_int">
                <label class="label_text1">Leaving Certificate</label>
                <input type="file" name="lc">
            </div>
            <div class="adm_int">
                <label class="label_text1">text</label>
                <input type="text" id="text">
            </div>
            <div class="adm_int">
                <label class="label_text1">number</label>
                <input type="number" id="fontsize">
            </div>
            <br><br>
            </fieldset>
            <div class="adm_int">
                <input class="btn btn-success" id="submit" type="submit" value="apply" name="apply">
            </div>
           <button id="button">Submit</button>

            <br><br>
        </form>
    </div>

    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

    <script>
        var form = document.getElementById('submit',function(event){
            event.preventDefault()

            var text = document.getElementById('text').value
            var fontsize = document.getElementById('fontsize').value

            var doc = new jsPDF()

            doc.setFontSize(fontsize)

            doc.text(text,20,20)

            doc.save("output.pdf")

        })
    </script>
</html>
