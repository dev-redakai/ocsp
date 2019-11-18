<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
$msg=$_GET['msg'];
$a=explode(",",$x);
$y=$a[0];
$z=$a[1];
    $user=$_SESSION['email'];
    
    $sql1="INSERT INTO discussion (id,stu_email,c_id,fcty_email,msg,at_time) values ('','$user','$z','$y','$msg',CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $sql1)) {

    } else {
        echo "Error updating stu_course table: " . mysqli_error($conn);
    }
    echo'<form action="discuss.php" method="GET" >
                                 <button type="submit" name="submit" class="btn btn-primary" value="'.$y.",".$z.'">Back</button>
                               </form>
                 ';

mysqli_close($conn);
?>

