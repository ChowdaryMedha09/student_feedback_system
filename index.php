<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Homeeee</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		
    <header id="myCarousel" class="carousel slide">
  

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/abcc.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div> 
          
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
			<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">
				<h2>About Faculty feedback System</h2>
				This website has three kinds of users Student, Staff and admin, 
admin can be the hod. later as an update to the website we can 
make the principal of the college a First of staff can prepare 
questions & add, and update these questions to the online 
system. After that, it will be viwed by the students and can give 
feedback about the lecturers. Students will fill out online feedback 
using a standard form.This feedback report will be checked by Hods. He can view 
grades and view the grades obtained from the lecturers and give 
this report to the principal and he gives counseling to the college 
staffdmin so he can also handle the website to check the 
feedback of the staff. In this website we implemented a system 
that works on the concept of online feedback from students which 
is the replacement of the existing paper feedback system which is 
so complicated method for finding an average for particular 
subject feedback which is submitted by students. Students can 
use their credentials and log in to the website and give their 
feedback. This feedback can only be viewed by the faculty and 
only the admin(hod) can see the dashboard by which he can 
make conclusions about any particular faculty
			</div>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By ....... 	<a href="http://www.phptpoint.com">Phptpoint.com</a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
