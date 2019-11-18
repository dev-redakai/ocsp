<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    
$sql = "DELETE FROM fcty_register WHERE fcty_email='$x'";
if (mysqli_query($conn, $sql)) {
    header("Location: userlist.php");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
