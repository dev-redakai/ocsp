<?php
include('connection.php');
session_start();
$e= $_SESSION['email'];
if(!empty($e))
{
    $query = "SELECT * from stu_register where stu_email='$e'";  
$result = mysqli_query($conn, $query);  
if (mysqli_num_rows($result) !== 0) {
    header('Location:about2.php');
}else{
    header('location: about3.php');
}
}else{
    header('location: about1.php');
}