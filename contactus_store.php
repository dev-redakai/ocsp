<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name1 = $_POST['name'];
    $email = $_POST['email'];
    $country =$_POST['country'];
    $subject=$_POST['subject'];
    $qry = "INSERT INTO contactus (id,name,c_email,country,subject,at_time) VALUES ('','$name1','$email','$country','$subject',CURRENT_TIMESTAMP)";

    if (mysqli_query($conn,$qry)) 
    {
        echo "<script>
			alert('Feedback Sent!');
			window.location.href='contactus.php';
			</script>";
    }
    else 
        {
            echo "Error: " . $qry . "<br>" . mysqli_error($conn);
        } 
}
?>



