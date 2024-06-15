<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
/* elseif($_SESSION['usertype']='admin'){
    header("location:login.php");
} */

error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$name = $_SESSION['username'];

$sql = "select * from user where username = '$name' ";

$result = mysqli_query($data,$sql);

$info = $result->fetch_assoc();

if(isset($_POST['update_profile'])){

    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2 = "update user set email='$s_email', phone='$s_phone', password='$s_password' where username='$name' ";

    $result2 = mysqli_query($data, $sql2);

    if($result2) {
        echo "echo <script type='text/javascript'>
        alert('Update Successfully...');
        </script>";

        //header('location:student_profile.php');
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
    include 'student_css.php';
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
    <!-- <h1>Student Home</h1>

    <a href="logout.php">Logout</a> -->

    <?php
    include 'student_sidebar.php';
    ?>

    <div class="content">
    <center>
        <h1>Update Profile</h1>
        <form action="#" method="POST">

        <div class="div_deg">

            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="phone" name="phone" value="<?php echo "{$info['phone']}"; ?>">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="<?php echo "{$info['password']}"; ?>">
            </div>
            <div>
                <input type="submit" class="btn btn-success" name="update_profile">
            </div>
            </div>
        </form>
        </center>
    </div>
</body>
</html>