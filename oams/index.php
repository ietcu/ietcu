<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html> 
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <title>Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

 </head>
 <body>
 
    <div class="limiter">
				
		<div class="container-login100" style="background-image: url('images/books.jpg');">
			
			<div class="wrap-login100 p-t-30 p-b-50">
	
		<!-- <div class="container"> -->
		  
		
				<br><br>
				<span class="login100-form-title p-b-41">
					Login for Faculty
				</span>
				<div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    
    <form id="login" method="post" class="login100-form validate-form p-b-33 p-t-5"> 

<div class="wrap-input100 validate-input" data-validate = "Enter Email">
  <input class="input100 form-control" type="email" name="email" placeholder="Email">
  <span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Enter password">
  <input class="input100 form-control" type="password" name="password" placeholder="Password">
  <span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>

<div class="container-login100-form-btn m-t-32">
  <button class="btn btn-primary login100-form-btn" >
    Login
  </button>
</div><br><center><h4 style="color:gray">Don't have an account?</h4>
<h2>
<a href="signup.php" style="font-size: large">Signup here</a>
</h2>
</center>
</form>

<center>
				<br>
				<h2 style="color:white; font-style:Baskerville">For Students</h2>
		  <h4 > <a href="student.php" style="color:white; font-style:Baskerville">Click here for Student Dashboard</a></h4>
		</center>
		

  </div>
  </div>
     <!-- FOOTER -->
     <footer style="height:120%;">
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy;       @2019 GGITS &middot;  developed by  Ritika Ghosh & Twinkle Arora  &middot; </p>
		  </footer>
</div>
    </div><!-- /.container -->

 </body>
</html>
