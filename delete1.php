<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    $fac=$_SESSION['email'];
    $sql = "DELETE FROM fcty_course WHERE c_id=$x and fcty_email='$fac'";
if (mysqli_query($conn, $sql)) {
    header("Location: test3.php");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
