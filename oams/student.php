<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
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
<link href="navbar-fixed-top.css" type="text/css" rel="stylesheet">
 </head>
 <body>
    
		<div class="limiter">
				
        <div class="container-login100" style="background-image: url('images/books4.jpg');">
          
				<br><br>
        <span class="login100-form-title p-b-41">
					Student Information
        </span>
        
        <div class="container">
          <center>
  <div id="output"></div>
</center>
</div>
  <br>
  
  <div class="wrap-login100 p-t-30 p-b-50">
          
  <form id="getAttendance" method="post" class="login100-form p-b-33 p-t-33"> 

        <div class="wrap-input100 validate-input form-group" data-validate="Year of Course">
        <input list="ex" class="input100 form-control" name="year" placeholder="Enter Year of Course" >
        <datalist id="ex">
          <?php foreach(range(date('Y',time()), 2003) as $r) echo '<option>'.$r.'</option>'; ?>
        </datalist>
          <span class="focus-input100" data-placeholder="&#xe82b;"></span>
        </div>

        <div class="wrap-input100 validate-input form-group" data-validate = "Section">
        <input class="input100 form-control" list="eg" name="section" placeholder="Choose Section" required>
          <datalist id="eg">
            <option>1</option><option>2</option><option>3</option>
          </datalist>
          <span class="focus-input100" data-placeholder="&#xe82b;"></span>
        </div>

        <div class="wrap-input100 validate-input form-group" data-validate="Subject Code of Course">
          <input class="input100 form-control" type="text" name="code" placeholder="Enter Subject code of Course " required>
          <span class="focus-input100 help-block" data-placeholder="&#xe82b;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Subject code: DDD-NNN where D : Department , N : Number</span>
        </div>

            
          <div class="wrap-input100 validate-input form-group" data-validate="Roll number">
            <input class="input100 form-control" type="text" name="roll" placeholder="Enter Roll number  " required>
            <span class="focus-input100 help-block" data-placeholder="&#xe82b;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Roll No.:NNN/DD/YY where N : Number, D : Department , Y : Year</span>
          </div>

<center>
    <div class="container-login100-from-btn m-t-32">
    <button class="login100-form-btn btn btn-primary">Get Results</button>
    </div>
</center>
  </form>
  <center>
  <div class="container-login100-from-btn m-t-32">
  <a href="index.php">
    <button class="login100-form-btn btn btn-primary">Return to Home</button>
</a>
    </div></center>
  </div>
  </div>
  </div>
   <!-- FOOTER -->
   <footer style="background:; height:;">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;       @2019 GGITS &middot;  developed by  Ritika Ghosh & Twinkle Arora  &middot; </p>
       </footer>

    
 </body>
</html>
 