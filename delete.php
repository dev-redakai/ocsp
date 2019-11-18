<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
$a=explode(",",$x);
$y=$a[0];
$z=$a[1];

    $stu=$_SESSION['email'];
$sql = "DELETE FROM stu_course WHERE c_id='$z' and stu_email='$stu' and fcty_email='$y'";
if (mysqli_query($conn, $sql)) {
    header("Location: test1.php");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
<html>
<head>
<title>
    </title>
    </head>
    <body>
        <h3>Course Unregistered Successfully</h3>
        
        <div><a href="test1.php" class="btn btn-info" role="button">Back</a></div>
    </body>
</html>
    
