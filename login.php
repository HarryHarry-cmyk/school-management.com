<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="schoolImg.png" class="body_deg">
    <center>


        <div class="form_deg">
            <center class="title_deg">
                Login Form
                <h1>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h1>
            </center>
            <form action="login_check.php" method="POST" class="login_form">

                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>