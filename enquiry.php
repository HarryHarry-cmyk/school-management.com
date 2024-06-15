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


if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $class=$_POST['c_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message = $_POST['message'];

    $sql = "insert into enquiry(name,class,email,phone,message)values('$name','$class','$email','$phone','$message')";

    $result = mysqli_query($data,$sql);

    if($result) {
        
        $_SESSION['message']="Your Message sent successfully";

        header("location:index.php");
    }
    else {
        echo "Apply failed...";
    }
}
?>

