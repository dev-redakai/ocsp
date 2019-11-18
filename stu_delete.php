<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    
$sql = "DELETE FROM stu_register WHERE stu_email='$x'";
if (mysqli_query($conn, $sql)) {
    header("Location: userlist.php");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
