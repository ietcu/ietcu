<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
   
   
   
    <!-- <script type="text/javascript">
        function validateForm(){
        
        var mail = document.signup.email.value;
        var FnamePass = document.signup.fname.value;
        var LnamePass = document.signup.lname.value;
        var UnamePass= document.signup.uname.value;
        var Pass= document.signup.password.value;
        var confPass= document.signup.conf.value;

        var x=document.signup.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf("."); 
        
       
         if(FnamePass==null || FnamePass =="" ){
            alert("First Name is a Mandatory Field");
            return false;
        }
        

        if(LnamePass==null || LnamePass =="" ){
            alert("Last Name is a Mandatory Field");
            return false;
        }
       

        
        if(UnamePass==null || UnamePass =="" ){
            alert("Userame is a Mandatory Field");
            return false;
        }

        
        if(mail ==null || mail ==""){
            alert("Email is a Mandatory Field");
            return false;
        }
        
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address");  
        return false;  
        }

        if(Pass == null || Pass == "" ){
            alert("Password is a Mandatory Field");
            return false;
        } 

        if(Pass != confPass){
            alert("Password didn't match");
            return false;
        }

        re = /[0-9]/;
        if(!re.test(Pass)){
            alert("Password must contain atleast one number(0-9).");
            return false;
        }
        
        // if(isNaN(FnamePass) ){
        //     alert("FirstName should not contain numbers");
        //     return false;
        // }

        // if(isNaN(LnamePass) ){
            
        //     return true;
        // }
        else{
            return true;
        }

    }
     -->
 <!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="css/styles.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<title>Attendance</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
		 <!-- Custom styles for this template -->
		  <link href="navbar-fixed-top.css" rel="stylesheet">
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
				
		<div class="container-login100" style="background-image: url('images/books2.jpg');">
			
			<div class="wrap-login100 p-t-30 p-b-50">
	
		<!-- <div class="container"> -->
		  
		
				<br><br>
				<span class="login100-form-title p-b-41">
					Signup for Faculty
				</span>
				<div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>


				<form id="signup" method="post" class="login100-form validate-form p-b-33 p-t-5"> 

					<div class="wrap-input100 validate-input form-group" data-validate = "Enter Name">
						<input class="input100 form-control" type="text" name="name" placeholder="Enter Name" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input form-group" data-validate="Phone number">
						<input class="input100 form-control" type="text" name="phone" placeholder="Enter Phone number" required>
						<span class="focus-input100" data-placeholder="&#xe82b;"></span>
          </div>
          
					<div class="wrap-input100 validate-input form-group" data-validate="Email">
						<input class="input100 form-control" type="email" name="email" placeholder="Enter Email-id" required>
						<span class="focus-input100" data-placeholder="&#xe82b;"></span>
          </div>
          
					<div class="wrap-input100 validate-input form-group" data-validate="Password">
						<input class="input100 form-control" type="password" name="password" placeholder="Enter Password" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
            <span class="help-block" style="font-size:small"><center>Password should be 6 characters long.</center></span>
          </div>
          
					<div class="wrap-input100 validate-input form-group" data-validate="Confirm Password">
						<input class="input100 form-control" type="password" name="password2" placeholder="Retype Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn btn btn-primary pull-right">
							Register
						</button>
				</form>
				
		</div>
		<center>
  <div class="container-login100-from-btn m-t-32">
  <a href="index.php">
    <button class="login100-form-btn btn btn-primary">Return to Home</button>
</a>
    </div></center>
	</div>
	
</div>
<!-- FOOTER -->
<footer style="height:120%;">
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy;       @2019 GGITS &middot;  developed by  Ritika Ghosh & Twinkle Arora  &middot; </p>
		  </footer>
	</div>
		
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

		
</body>
</html>