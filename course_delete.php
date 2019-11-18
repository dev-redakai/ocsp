<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    $stu=$_SESSION['email'];
$sql = "DELETE FROM course_list WHERE c_id=$x";
if (mysqli_query($conn, $sql)) {
    header("Location: courselist.php");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
