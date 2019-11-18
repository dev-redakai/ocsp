<?php
include('connection.php');
session_start();

if(!$_SESSION['email'])
{
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
        <link rel="stylesheet" href="css/bootstrap.css">

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
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchterm" name="" placeholder="Enter Course Name">
                        <input type="submit" class="searchbtn" placeholder="Search">
                    </div>
                </div>
                      
                
                <div class="collapse navbar-collapse" id="navbarsupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nev-item">
                            <a class="nav-link" href="#">Home</a>
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
                <div class="row" >
                
                <?php
                    include('connection.php');
                    $x=$_SESSION['email'];
                $query = "select * from course_list";  
                $result = mysqli_query($conn, $query); 
                $count=0; 
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                          <div class="col">
                    <div class="card mb-4" style="border:0px;">
                  <div class="card-body text-center">
                     <div class="card" style="width:300px">
                                <div class="card-body">
                                       <h4 class="card-title"><b>'.$row['c_name'].'</b></h4>
                                        <p class="card-text">'.$row['c_about'].'</p>
                          
                                        <form action="course_delete.php" method="GET" >
                                          <button type="submit" name="submit" class="btn btn-primary" value="'.$row['c_id'].'">Delete</button>
                                        </form>
                                           
                              </div></div></div></div>
                            </div><br><br>
                     '; 
                     $count++;

               }  
               if($count==0){
                   echo "No Courses found in this category";
               }
                ?> 

                 
                </div>
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