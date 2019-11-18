<?php
include('connection.php');
session_start();
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
     
            <div>
                <div >
                <br /><br /><h3>Students</h3>
                <table class="table" border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>mobile</th>
	<th>Stream</th>
    <th>Address</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php 
	       $sql = "SELECT * FROM stu_register";
           $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                   ?> <tr>
                        <td><?php echo $row["stu_name"]?></td>
                        <td><?php echo $row["stu_email"]?></td>
                        <td><?php echo $row["stu_phone"]?></td>
			            <td><?php echo $row["stu_stream"]?></td>
                        <td><?php echo $row["stu_addr"]?></td>
                        <td><?php echo '<form action="stu_delete.php" method="GET" >
                                            
                                          <button type="submit" name="submit" class="btn btn-primary" value="'.$row['stu_email'].'">Delete</button>
                                        </form>
                                        ' ?></td>
                      </tr>
       <?php
                }
            } else {
                echo "0 results";
            }
?>
        
    </tbody>
  </table>

            </div>
            </div>
            <br /><br /><h3>Faculty</h3>
                <table class="table" border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
    	<th>Qualification</th>
    <th>Address</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php 
            
	       $sql = "SELECT * FROM fcty_register";
           $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                   ?> <tr>
                        <td><?php echo $row["fcty_name"]?></td>
                        <td><?php echo $row["fcty_email"]?></td>
			            <td><?php echo $row["fcty_qualification"]?></td>
                        <td><?php echo $row["fcty_addr"]?></td>
                        <td><?php echo '<form action="fcty_delete.php" method="GET" >
                                            
                                          <button type="submit" name="submit" class="btn btn-primary" value="'.$row['fcty_email'].'">Delete</button>
                                        </form>
                                        ' ?></td>
                      </tr>
       <?php
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
?>
        
    </tbody>
  </table>

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
                            <li class="plain">Coursera</li>
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