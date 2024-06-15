<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

/* elseif($_SESSION['usertype']='student'){
    header("location:login.php");
} */

error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$id = $_GET['student1_id'];

$sql = "select * from user where id='$id' ";

$result = mysqli_query($data,$sql);

$info = $result->fetch_assoc();

if(isset($_POST['update'])){
    $s_name=$_POST['name'];
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2 = "update user set username='$s_name', email='$s_email', phone='$s_phone', password='$s_password' where id='$id' ";

    $result2 = mysqli_query($data, $sql2);

    if($result2) {
        echo "echo <script type='text/javascript'>
        alert('Update Successfully...');
        </script>";

        //header('location:update_student.php');
    }
    else{
        echo "failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <?php
    include 'admin_css.php';
    ?>

    <style type="text/css">

        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>

</head>
<body>
     <!-- <h1>Admin Home</h1>

    <a href="logout.php">Logout</a>  -->
    
    <?php
    include 'admin_sidebar.php';
    ?>

    <div class="content">
        <center>
    <h1>Update Student</h1>

    <div class="div_deg">
        <form action="#" method="POST">
            
        <div>
                <label>Username</label>
                <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo "{$info['email']}";?>">
            </div>

            <div>
                <label>Phone</label>
                <input type="number" name="phone" value="<?php echo "{$info['phone']}";?>">
            </div>

            <div>
                <label>Password</label>
                <input type="text" name="password" value="<?php echo "{$info['password']}";?>">
            </div>

            <div>
                <input class="btn btn-success" type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
    </center>
    </div>
</body>
</html>