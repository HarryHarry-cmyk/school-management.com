<?php

error_reporting(0);

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'schoolproject';

$data = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['c_password'];
    $sql = "insert into register(username,email,password,confirm) values('$name','$email','$pass','$cpass')";

    $result = mysqli_query($data,$sql);

    if($result){
        echo "<script type='text/javascript'>
        alert(Successfully Registered...)</script>";
    }else{
        echo "<script type='text/javascript'>
        alert(Not Registered...)</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form-box register">  <form action="admission.php" method="POST">
        <h1>Register</h1>
        <form action="#" method="POST">
                    <div class="input-box">
                        <!-- <span class="icon"><ion-icon name="name"></ion-icon></span> -->
                        <input type="text" name="name">
                        <label>Username</label>
                        
                    </div>
                    <div class="input-box">
                        <!-- <span class="icon"><ion-icon name="email"></ion-icon></span> -->
                        <input type="Email" name="email">
                        <label>Email</label>
                        
                    </div>
                    <div class="input-box">
                        <!-- <span class="icon"><ion-icon name="lock-closed"></ion-icon></span> -->
                        <input type="Password" name="password">
                        <label>Password</label>
                        
                    </div>

                    <div class="input-box">
                        <!-- <span class="icon"><ion-icon name="lock-closed"></ion-icon></span> -->
                        <input type="password" name="c_password">
                        <label>Confirm Password</label>
                        
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree the terms & conditions</label>
                       
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="login.php" 
                            class="login-link">Login</a></p>
                    </div><br>
                    
                    </form>
                    
               </div>   
               <br><br><br>  
    </div>
</body>
</html>