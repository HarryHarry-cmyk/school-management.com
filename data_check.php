<?php
session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if($data==false){
    die("Connection error");
}


if(isset($_POST['apply'])){
    
    $name=$_POST['name'];
    $class=$_POST['c_name'];
    $m_name=$_POST['m_name'];
    $aadhar_num=$_POST['aadhar_num'];
    $b_date=$_POST['b_date'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $photo=$_POST['s_photo'];
    $sign=$_POST['s_sign'];
    $marksheet=$_POST['s_marksheet'];
    $file = $_FILE['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file;


    $sql = "insert into admission(name,class,mothername,aadhar,birth,email,phone,address,photo,sign,marksheet)values('$name','$class','$m_name','$aadhar_num','$b_date','$email','$phone','$address','$photo','$sign','$marksheet')";

    $result = mysqli_query($data,$sql);

    if($result) {
        
        $_SESSION['message']="Your application sent successfully";

        header("location:index.php");
    }
    else {
        echo "Apply failed...";
    }
}

?>