<?php
include('connection.php');
session_start();
$x=$_SESSION['email'];
$query = "SELECT * from stu_register where stu_email='$x'";  
$result = mysqli_query($conn, $query);  
if (mysqli_num_rows($result) === 0) {
    header('Location:login.php');
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
                       <!-- <li class="nav-item dropdown">
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
                            <a class="nav-link" href="test1.php" > My Courses</a>
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
            <div class="tab-content">
                <div id="courses" class="tab-pane fade">
                <br /><br /> 
                <table class="table table-bordered">  
                     <tr>  
                     include('connection.php');
                         <th>course name</th>  
                         <th>details</th>
                     </tr>  
                <?php  
                    $query = "SELECT * FROM `course_list`";  
                $result = mysqli_query($conn, $query); 
                $count=0; 
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                          <tr>  
                               <td>  
                                   '.$row['c_name'].'
                                </td>
                                <td>
                                    '.$row['c_about'].'
                                    </td>
                                    <td>
                                        <form action="delete.php" method="GET" >
                                          <button type="submit" name="submit" value="'.$row['c_id'].'">Delete</button>
                                        </form>
                                           
                                   
                               </td>
                          </tr>  
                     '; 
                     $count++;

               }  
               if($count==0){
                   echo "No Courses found in this category";
               }
                ?> 

                        
                </table>
                </div>
            </div>
            
            
            <div class ="jumbotron">
                <h1 class="display-4">Best learning Courses are here!</h1>
                <p class="lead"0>Every course on CourseDB is taught by top instructors from the world’s best universities and educational institutions. Courses include recorded video lectures, auto-graded and peer-reviewed assignments, and community discussion forums. When you complete a course, you’ll receive a sharable electronic Course Certificate.</p>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="class-title">Database MS</h5>
                            <p class="card-text">A database management system (DBMS) is system software for creating and managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="class-title">Operating System</h5>
                            <p class="card-text">This course teaches the basic operating system abstractions, mechanisms, and their implementations. The core of the course contains concurrent programming (threads and synchronization), inter process communication etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="class-title">Number Theory And Cryptography</h5>
                            <p class="card-text">We all learn numbers from the childhood. Some of us like to count, others hate it, but any person uses numbers everyday to buy things, pay for services, estimated time and necessary resources. </p>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="row mt-sm-4 mt-md-0">
                <div class="coll-sm-12 col-md-8 text-sm-center text-md-left">
                    <h5>CourseWork</h5>
                    <p class="lead">Each course is like an interactive textbook, featuring pre-recorded videos, quizzes, and projects.</p>
                    <h5>Help & Support</h5>
                    <p class="lead">Connect with thousands of other learners and debate ideas, discuss course material, and get help mastering concepts.</p>
                    <h5>Certificates</h5>
                    <p class="lead">Earn official recognition for your work, and share your success with friends, colleagues, and employers.</p>
                </div>
                
            </div>
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
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