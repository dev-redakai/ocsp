<?php
include('connection.php');
session_start();
$x=$_SESSION['email'];
$query = "SELECT * from stu_register where stu_email='$x'";  
$result = mysqli_query($conn, $query);  
if (mysqli_num_rows($result) === 0) {
    header('Location:stu_home.php');
}
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>DBCourse</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel='stylesheet' id='child-theme-css'  href='https://blog.coursera.org/wp-content/themes/coursera-blog/style.css' type='text/css' media='all' />

  
        <style type="text/css">  

  
  
 td.blue {color:#00F;}  
  
</style> 

    </head>
    <body>
        
        <div class="bg-image"></div>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
				<a href="index.php"><img src="dbcourse.png" alt="Coursera" /></a>
			</div>
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                      
                
                <div class="collapse navbar-collapse" id="navbarsupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nev-item">
                            <a class="nav-link" href="stu_home.php">Home</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Database MS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">OS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Number Theory And Cryptography</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Artificial Intelligence</a>
                        </div>
                        </li>-->
                        <li class="nev-item">
                            <a class="nav-link" href="test.php" > Available Courses</a>
                        </li>
                        <li class="nev-item">
                            <a class="nav-link" href="test1.php" >My Courses</a>
                        </li>
                        
                        <li class="nev-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                        <li class="nev-item">
                                <a class="nav-link" href="contactus.php">Contact</a>
                            </li>
                        <li class="nev-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                    </ul>
                </div>
            </nav>    
            <div>
                <div >
                <br /><br />
                
                <?php
                    include('connection.php');
                    $x=$_SESSION['email'];
                    $b=$_GET['submit'];

                    //echo "$b";
                    $a=explode(",",$b);
                    $y=$a[0];
                    $z=$a[1];
                   // echo "$x"."        "."$y"."         "."$z";
                $query = "SELECT * FROM discussion where c_id='$z' and fcty_email='$y' order by at_time";  
                $result = mysqli_query($conn, $query); 
                $count=0; 
                    while($row = mysqli_fetch_array($result))  
                {   $x=$_GET['submit'];
                    $a=explode(",",$x);
                    $y=$a[0];
                    $z=$a[1];
                    
                     echo '  
                        <table>

                            <tr>
                                <td class="blue">'.$row['stu_email']."[".$row['at_time']."]".":-".'</td>
                                <td><i>'.$row['msg'].'</i></td>

                            </tr>
                        </table>
                     '; 
                     $count++;

               }  
               if($count==0){
                   echo "No Messages found in this course";
               }


               echo'<form action="add_msg.php" method="GET" >
                                <input type="text" name="msg" placeholder="Enter your Message ..">
                                 <button type="submit" name="submit" class="btn btn-primary" value="'.$y.",".$z.'">Send Message</button>
                               </form>
                 ';
               
  

mysqli_close($conn);
?>
            </div>

            </div>
        </div>
        <footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
            <div class="site-footer">
                <div class="inner-wrapper">
                    <div class="info">
                        <div class="logo"><img src="dbcourse.png"/>
                        </div>
                        <p class="about">DBCourse provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
                        <p class="copyright">© 2018 DBCourse OpenSource</p> 
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="plain">DBCourse</li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contactus.php">Contact</a></li>
                        </ul>
                        <ul>
                            <li class="plain">Community</li>
                            <li><a href="www.nitc.ac.in">Partners</a></li>
                        </ul>
                        <ul>
                            <li class="plain">Admin</li>
                            <li><a href="admin_login.php">Admin Login</a></li>
                        </ul>
                        
                    </div>
                </div>
        </div>
    </footer>
    </body>
</html>