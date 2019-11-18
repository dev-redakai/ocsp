<?php
include('connection.php');
if(isset($_POST['submit']))
{
    /*echo "yaha aa raha h ";*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass =sha1($_POST['password']);
    $phone =$_POST['phone'];
    $stream=$_POST['stream'];
    $addr=$_POST['add'];
    if(!empty($name) && !empty($email) && !empty($pass) && !empty($stream) && !empty($phone) && !empty($addr)){
        if(preg_match("/^[a-zA-Z]*$/",$name)){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                if(preg_match("/^[6-9]{1}[0-9]{9}$/",$phone)){
                    $qry = "INSERT INTO stu_register (stu_name,stu_email,stu_password,stu_phone,stu_stream,stu_addr) VALUES ('$name','$email','$pass','$phone','$stream','$addr')";

                    if (mysqli_query($conn,$qry)) 
                    {
                        echo "New record created successfully";
                        header('location: login.php');
                    }
                    else 
                        {
                            echo "Error: " . $qry . "<br>" . mysqli_error($conn);
                        } 
                }else{
                    ?>
            <script> alert("Enter valid Phone Number"); window.history.back();</script>
                 <?php 
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



