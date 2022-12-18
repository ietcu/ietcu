<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <title>About</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <style>
  .grid2 { 
      padding: 20px 100px 50px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
  grid-gap: 20px;
  }
  
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 40%;
}
.text {
  padding: 20px 100px 50px 20px;
  color: white;
}

.grid > article:nth-child(1) {
  grid-column: span 2;
  grid-row: span 2;
}
.head2{
    color:rgb(236, 227, 227);
    font-size: larger;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background: #404042d5;
}
.card2 {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(156, 148, 148, 0.705);
    transition: 0.3s;
    /* margin: 10px ;
    margin-right:500px; */
    background: #334e4e;
    alignment: center;
}
  /* On mouse-over, add a deeper shadow */
  .card2:hover {
    box-shadow: 0 8px 16px 0 black;
}
.img{
    margin-left:20px;
    width:200px;
}
.img:hover{
    box-shadow: 0 8px 16px 0 rgba(59, 100, 236, 0.945);
}
</style>
 </head>
 <body>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="teacher.php">Dashboard</a></li>
			<li ><a href="profile.php">Profile</a></li>
            
			<li><a href="statistics.php">Statistics</a></li>
			<li  class="active"><a href="about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
    <center>
    <div class="img">
            <img src="" style="width:200px;border-style: double;border: double" alt="Not available">
           
        </div>
</center>
    <main class = "grid2">
  <article>
        <div class="card2">
            <div class="head2">
                <div class="text">
               
        
            <h2 style="font-style: oblique">About Me</h2>
            <p style="font: weight 8;text-align: justify">
               
    </div>
</div>
</div>
  </article>
</main>
 </body>
</html>
