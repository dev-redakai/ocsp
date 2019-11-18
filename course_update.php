<?php
include('connection.php');

$x=$_GET['submit'];
?>
<html>
   <head>
      <title>Course Update By Admin</title> 
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel='stylesheet' id='child-theme-css'  href='https://blog.coursera.org/wp-content/themes/coursera-blog/style.css' type='text/css' media='all' />

   </head>
   <body>
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
    
        <div class="col-lg-5">
            <div class="container">
			    <br />
			    <br />
			    <h2 align="center"> Update Course</h2><br />
			    <div class="form-group">
				        <?php echo'<form action="course_up_store.php" method="get">
				      
					        <div class="table-responsive">
						        <table class="table table-bordered" id="dynamic_field">
							        <tr>
								        <td><input type="text" name="name" placeholder="Enter Course New Name" class="form-control name_list" /></td>
								        <td><input type="text" name="about" placeholder="About Course" class="form-control name_list" /></td>
							        </tr>
						        </table>
						        <button type="submit" name="submit" class="btn btn-primary" value="'.$x.'">Update</button>
					        </div>
				        </form>' ?>
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