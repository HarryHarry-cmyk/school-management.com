<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

/* elseif($_SESSION['usertype']='student'){
    header("location:login.php");
} */

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "select * from admission";

$result = mysqli_query($data,$sql);


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

</head>
<body>
    <!--  <h1>Admin Home</h1>

    <a href="logout.php">Logout</a>  -->

    <?php
    include 'admin_sidebar.php';
    ?>

    
    <div class="content">
    <center>
    <h1>Applied For Admission</h1>

    <br><br>
    <table border="1px">
        <tr>
            <th style="padding: 20px; font-size:15px" >Name</th>
            <th style="padding: 20px; font-size:15px" >Class</th>
            <th style="padding: 20px; font-size:15px">Mother Name</th>
            <th style="padding: 20px; font-size:15px">Aadhar</th>
            <th style="padding: 20px; font-size:15px">Birth Date</th>
            <th style="padding: 20px; font-size:15px" >Email</th>
            <th style="padding: 20px; font-size:15px" >Phone</th>
            <th style="padding: 20px; font-size:15px" >Address</th>
            <th style="padding: 20px; font-size:15px" >Photo</th>
            <th style="padding: 20px; font-size:15px" >Sign</th>
            <th style="padding: 20px; font-size:15px" >Marksheet</th>
        </tr>

        <?php
            
            while($info=$result->fetch_assoc()){
                
            
        ?>
        <tr>
            <td style="padding: 20px;">
                <?php echo "{$info['name']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['class']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['mothername']}"; ?>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['aadhar']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['birth']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['email']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['phone']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['address']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['photo']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['sign']}"; ?>
        </td>
        </td>
            <td style="padding: 20px;">
            <?php echo "{$info['marksheet']}"; ?>
        </td>
        </tr>

        <?php
                
            }
        ?>

    </table>

    </center>
</div>
</body>
</html>

