<?php
    error_reporting(0);
    session_start();

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'schoolproject';

    $data = mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $class = $_POST['c_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "insert into contact(name,class,email,phone,message) values('$name','$class','$email','$phone','$message')";

        $result = mysqli_query($data,$sql);

        if($result) {
            echo "<script type='text/javascript'>
            alert('Your message sent successfully..');</script>";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        h1{
            font-size: 50px;
            font-family: ;
            padding-bottom: 50px;
        }
        .contact{
            min-height: 100vh;
            background-color: azure;
            padding: 50px;
            text-align: center;
        }
        .container{
            max-width: 1000px;
            margin: 0 auto;
        }
        .container h3{
            font-size: 30px;
            margin-bottom: 40px;
            color: black;
        }
        .contact-wrapper{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 36px;
        }
        .contact-form{
            text-align: left;
        }
        .contact-form h3{
            font-size: 24px;
            margin-bottom: 20px;
            color: black;
        }
        .form-group{
            margin-bottom: 20px;
        }
        input, textarea{
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border:none;
            background-color: #f8f9fa; 
            color: #333;
        }
        input:focus,
        textarea:focus{
            outline:none;
            box-shadow: 0 0 8px #bbb;
        }
        button{
            display: inline-block;
            padding: 12px 24px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }
        button:hover{
            background-color: #45a049;
        }
        .contact-info{
            text-align: left;
        }
        .contact-info h3{
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .contact-info p{
            margin-bottom: 10px;
            color: black;
        }
        .contact-info i{
            margin-right: 10px;
            color:#4caf50;
        }
        
        @media screen and(max-width: 768px){
            .container{
                padding: 24px;
            }
            .contact-wrapper{
            grid-template-columns: 1fr;
        }
        }
    </style>
</head>
<body>
    <section class="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send Us a message</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                        <input type="text" name="c_name" placeholder="Your Class">
                        </div>
                        <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                        <input type="number" name="phone" placeholder="Your Mobile Number">
                        </div>
                        <div class="form-group">
                        <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" name="submit" value="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3 class="c-info">Contact Information</h3>
                    <p><i class="fas fa-phone"></i>+91 9028273486</p>
                    <p><i class="fas fa-envelope"></i>madrasaschool@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>Saraswati Nagar Gopalwadi road Madrasa School Daund</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>