<?php
session_start();
if($_SESSION['username']==true){
    ?><script> alert("Welcome");</script><?php
    //$link=$_SESSION['username'];
    header('location: admin_index.php');
}else{
        ?>
           <script> alert("Your Login Email or Password is invalid"); window.history.back();</script>
           <?php
    header('location: login.php');
}
            
?>