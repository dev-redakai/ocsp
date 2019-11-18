<?php
include('connection.php');

$c_name = $_POST['name'];
$c_about= $_POST['about'];
$qry = "INSERT INTO course_list (c_name,c_about) VALUES ('$c_name','$c_about')";

    if (mysqli_query($conn,$qry)) 
    {
        echo "<script>
			alert('Course Uploaded!');
			window.location.href='admin_course_list.php';
			</script>";
    }else 
        {
            echo "Error: " . $qry . "<br>" . mysqli_error($conn);
        } 
?>

