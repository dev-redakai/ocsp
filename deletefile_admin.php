<?php
session_start();
if (isset($_POST['submit'])){

include('connection.php');

$file=$_POST['path'];
$fcty=$_POST['fmail'];
$cid=$_PODT['cid'];
$sql = "DELETE FROM upload WHERE c_id='$cid' and fcty_email='$fcty' and path='$file'";
if (mysqli_query($conn, $sql)) {
    header("Location: seefiles_admin.php?its coming here");
    exit();                    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}else{
    echo "jdkqaj ";
}

mysqli_close($conn);
?>