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

$sql = "select * from user where usertype='student' ";

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
    font-size: 20px;
}

.table_td{
    padding:20px;
    background-color: skyblue;
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

    <h1>Student Data</h1>

    <?php
    
    if($_SESSION['message']){
        echo $_SESSION['message'];
    }

    unset($_SESSION['message']);
    ?>

    <br><br>
    <table border="1px" width=70%>
        <tr>
            <th class="table_th">Username</th>
            <th class="table_th">Email</th>
            <th class="table_th">Phone</th>
            <th class="table_th">Password</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
        </tr>


        <?php
        while($info=$result->fetch_assoc())
            {

        ?>
        <tr>
            <td class="table_td">
                <?php echo "{$info['username']}";?>
            </td>
            <td class="table_td">
                <?php echo "{$info['email']}";?>
            </td>
            <td class="table_td">
            <?php echo "{$info['phone']}";?>
            </td>
            <td class="table_td">
            <?php echo "{$info['password']}";?>
            </td>
            <td class="table_td">
           
            <?php 
            
            echo "<a onClick=\" javascript:return confirm('Are you sure to delete this');\"class='btn btn-danger' href='delete.php?student_id={$info['id']}'>Delete </a>"?>
            </td>

            <td class="table_td">
           
            <?php 
            
            echo "<a class='btn btn-primary' href='update_student.php?student1_id={$info['id']}'>Update </a>"?>
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