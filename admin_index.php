
<?php
include('admin_login_check.php');

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel='stylesheet' id='child-theme-css'  href='https://blog.coursera.org/wp-content/themes/coursera-blog/style.css' type='text/css' media='all' />

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo">
				<a href="index.php"><img src="dbcourse.png" alt="Coursera" /></a>
			</div>
            <a class="navbar-brand mr-1" href="admin_index.php">DBCourse-Admin</a>
                
                <div class="collapse navbar-collapse" id="navbarsupportedContent">
                    <ul class="navbar-nav ml-auto">
                  
            
                        <li class="nev-item">
                            <a class="nav-link" href="admin_index.php">Home</a>
                        </li>
                        <li class="nev-item">
                                <a class="nav-link" href="admin_course_list.php">Add Course</a>
                            </li>
                        <li class="nev-item">
                                <a class="nav-link" href="courselist.php">Course List</a>
                            </li>
                        <li class="nev-item">
                                <a class="nav-link" href="userlist.php">User List</a>
                            </li>
                            <li class="nev-item">
                                <a class="nav-link" href="feedback.php">See Feedback</a>
                            </li>
                            <li class="nev-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav> 
            <h1 align="center">Welcome Admin</h1>
            <h5 align="center">You got the power to Control elements on this Website...</h5>
            <p align="center">A website coordinator works as an administrator to a company's websites, managing content, maintaining Web design and answering consultation questions. ... Good attention to detail, creativity and knowledge of information technology are all highly sought-after qualities in a website coordinator.</p>



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
