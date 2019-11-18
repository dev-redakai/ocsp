<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $email = $_POST['email'];
        $mypassword =sha1($_POST['password']);
        $sql = "SELECT * FROM fcty_register WHERE fcty_email = '$email' and fcty_password = '$mypassword'";
        //echo $sql;
        $result = mysqli_query($conn,$sql) or die ("no database");
        //echo "$result";
        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
        //echo $row['name'];
        $active = $row['active'];
        //echo $active;
        $count = mysqli_num_rows($result);
        
        // If result matched $email and $mypassword, table row must be 1 row
        if($count == 1) {
            $_SESSION['email']=$email;
            echo "<script>window.open('Success!')</script>";
           header("location: fcty_home.php");
        }else {
           $error = "Your Login Name or Password is invalid";
           ?>
           <script> alert("Your Login Email or Password is invalid"); window.history.back();</script>
           <?php
           //header("location: 404.php");
        }
     }
}
?>
