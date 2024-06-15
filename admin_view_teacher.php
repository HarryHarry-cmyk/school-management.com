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

$sql = "select * from teacher";

$result = mysqli_query($data,$sql);

if($_GET['teacher_id']) {
    $t_id = $_GET['teacher_id'];

    $sql2 = "delete from teacher where id='$t_id' ";

    $result2 = mysqli_query($data,$sql2);

    if($result2) {

        header('location:admin_view_teacher.php');
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

.table_th{
    font-size: 20px;
    padding: 20px;
   
}

.table_td{
    background-color: skyblue;
    padding: 20px;
    font-size: 20px;
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
    <h1>View All Teachers Data</h1>

    <table border=1px width=70%>
        <tr>
            <th class="table_th">Teacher Name</th>
            <th class="table_th">About Teacher</th>
            <th class="table_th">Image</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>

        </tr>

        <?php
        while($info=$result->fetch_assoc()){

       
        ?>
        <tr>
            <td class="table_td">
                <?php echo "{$info['name']}" ?>
            </td>

            <td class="table_td">
                <?php echo "{$info['description']}" ?>
            </td>

            <td class="table_td">
                <img height="150px" width="150px" src="<?php echo "{$info['image']}" ?>">
            </td>

            <td class="table_td">
                
            <?php
            
            echo "
                <a onClick=\" javascript:return confirm('Are you sure to delete this');\"class='btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete
           
                </a>";
            ?>
            </td>

            <td class="table_td"> 
            <?php
            
            echo "
                <a class='btn btn-primary' href='admin_update_teacher.php?teacher_id={$info['id']}'>Update
           
                </a>";
            ?>
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