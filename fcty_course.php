<?php
include('connection.php');
session_start();
$x=$_GET['submit'];
    $user=$_SESSION['email'];
    $sql2="SELECT count(fcty_email) as count from fcty_course where fcty_email='$user'";
    $result1=mysqli_query($conn,$sql2);
    $row1=mysqli_fetch_assoc($result1);
    if($row1['count'] < 2 )
    {   
        $sql3="SELECT count(c_id) as count from fcty_course where c_id='$x'";
        $result2=mysqli_query($conn,$sql3);
        $row2=mysqli_fetch_assoc($result2);
        if($row2['count'] < 2 )
        {
            $sql = "SELECT * FROM course_list where c_id=$x";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
               
                    $sql1="INSERT INTO fcty_course (c_id,fcty_email) values ('$x','$user')";
                    if (mysqli_query($conn, $sql1)) {
                        header("Location: test2.php");
                        exit();
                    } else {
                    echo "Error updating fcty_course table: " . mysqli_error($conn);
                }
             
                }

    
            } else {
                echo "0 results";
            }
        }else{
            //header("Location: test2.php?Cannot_register__Course_has_already_been_taken_by_two_Staff");
            //echo "Cant register...";
            echo "<script>
            alert('Cannot register....Course has already taken by two Faculty.');
            window.location.href='test2.php';
            </script>";
        }
    }else{
        //header("Location: test2.php?Cannot_register__only_2_courses_are_permitted");
        //echo "Cant register.... only 2 courses are permitted ";
        echo "<script>
            alert('Cannot register....Only 2 courses are permitted.');
            window.location.href='test2.php';
            </script>";
        
    }

mysqli_close($conn);
?>
