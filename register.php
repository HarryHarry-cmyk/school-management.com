<?php

error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);


if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    
    $sql = "select * from register1";

    $result = mysqli_query($data, $sql);

    echo "data";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>

    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="t4.png.jpg" class="body_deg">

<div>
    <form action="">
        <div>
            <label for="">
                Username <input type="text" name="name">
            </label>
        </div>
        <div>
            <label for="">
                Email <input type="email" name="email">
            </label>
        </div>
        <div>
            <label for="">
                Password <input type="password" name="password">
            </label>
        </div>
        <div>
            <label for="">
                Confirm Password <input type="password" name="c_pass">
            </label>
        </div>
        <div>
            <label for="">
                <input type="submit" name="register" value="register">
            </label>
        </div>
    </form>
</div>

</body>
</html>

