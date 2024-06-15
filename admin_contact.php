<?php

error_reporting(0);
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

$sql = "select * from contact ";

$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    

    <style type="text/css">

.table_th{
    padding: 10px;
    font-size: 25px;
}

.table_td{
    padding:20px;
    background-color: skyblue;
    font-size: 20px;
}
</style>

    <?php
    include 'admin_css.php';
    ?>



</head>
<body>
     <!-- <h1>Admin Home</h1>

    <a href="logout.php">Logout</a>  --> 
    
    <?php
    include 'admin_sidebar.php';
    ?>

    <div class="content">

        <center>

    <h1>Messages from Followers</h1>
<br>
    <?php
    
    if($_SESSION['message']){
        echo $_SESSION['message'];
    }

    unset($_SESSION['message']);
    ?>

    <br><br>
    <table border="1px" width=70%>
        <tr>
            <th class="table_th">Name</th>
            <th class="table_th">Class</th>
            <th class="table_th">Email</th>
            <th class="table_th">Phone</th>
            <th class="table_th">Password</th>
        </tr>


        <?php
        while($info=$result->fetch_assoc())
            {

        ?>
        <tr>
            <td class="table_td">
                <?php echo "{$info['name']}";?>
            </td>
            <td class="table_td">
                <?php echo "{$info['class']}";?>
            </td>
            <td class="table_td">
            <?php echo "{$info['email']}";?>
            </td>
            <td class="table_td">
            <?php echo "{$info['phone']}";?>
            </td>
            <td class="table_td">
            <?php echo "{$info['message']}";?>
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