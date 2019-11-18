<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
$a=explode(",",$x);
$y=$a[0];
$z=$a[1];
    $user=$_SESSION['email'];
    $sql2="SELECT count(stu_email) as count from stu_course where stu_email='$user'";
    $result1=mysqli_query($conn,$sql2);
    $row1=mysqli_fetch_assoc($result1);
    if($row1['count'] < 6 )
    {
    $sql = "SELECT * FROM fcty_course where c_id='$z' and fcty_email='$y'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                        $sql1="INSERT INTO stu_course (c_id,stu_email,fcty_email) values ('$z','$user','$y')";
                        if (mysqli_query($conn, $sql1)) {
                            header("Location: test.php");
                            exit();
                        } else {
                            echo "Error updating stu_course table: " . mysqli_error($conn);
                        }
                                 
                }

    
            } else {
                echo "0 results";
            }
        }else{
            //header("Location: test.php?Cannot_register__only_6_courses_are_permitted");
            //echo "Cant register.... only 6 courses are permitted ";
            echo "<script>
            alert('Cannot register....only 6 courses are permitted.');
            window.location.href='test.php';
            </script>";
        
        }
mysqli_close($conn);
?>