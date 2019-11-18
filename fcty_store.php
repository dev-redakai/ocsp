<?php
include('connection.php');
?>
<?php
if(isset($_POST['submit']))
{
    /*echo "yaha aa raha h ";*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass =sha1($_POST['password']);
    $qualification=$_POST['qualification'];
    $addr=$_POST['add'];
    if(!empty($name) && !empty($email) && !empty($pass) && !empty($qualification) && !empty($addr)){
        if(preg_match("/^[a-zA-Z]*$/",$name)){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                $qry = "INSERT INTO fcty_register (fcty_name,fcty_email,fcty_password,fcty_qualification,fcty_addr) VALUES ('$name','$email','$pass','$qualification','$addr')";

                if (mysqli_query($conn,$qry)) 
                {
                    header('Location: fcty_login.php?registered_successfully');
                }
                else 
                {
                    echo "Error: " . $qry . "<br>" . mysqli_error($conn);
                } 
            }else{
                ?>
            <script> alert("Enter valid Email id"); window.history.back();</script>
                 <?php 
            }
        }else{
            ?>
            <script> alert("Name should start with Alphabet"); window.history.back();</script>
                 <?php 
        }
    }else{
        ?>
            <script> alert("Fields should not be empty"); window.history.back();</script>
                 <?php 
    }
    
    
}
?>



