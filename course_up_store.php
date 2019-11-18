<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    $name=$_GET['name'];
    $about=$_GET['about'];
$sql = "UPDATE course_list SET c_name='$name',c_about='$about'  WHERE c_id=$x";
if (mysqli_query($conn, $sql)) {
    header("Location: courselist.php");
    exit();                    
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
