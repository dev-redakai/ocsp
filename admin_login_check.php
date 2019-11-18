<?php
session_start();
include('connection.php');

if(isset($_POST['submit']))
{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
        $sql = "SELECT * FROM admin_register WHERE a_name = '$myusername' and a_password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
            $_SESSION['username']=$myusername;
           header("location: welcome.php");
        }else {
            ?><script> alert("Invalid Details");</script><?php
           header('location: index.php');
        }
     }
}
?>
