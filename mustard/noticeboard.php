<?php
session_start(); //starts session here

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      form{
        display: inline-block;
        height: 40%;
        width: 60%;
        margin-right: 30%;
        margin-left: 30%;
        float: center;
      }
    </style>
    
</head>
<body>
 <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">

      <!-- Brand and toggle get grouped for better mobile display -->
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand">
        <img  style="width:160px; height: 35px; align=left;" src="../img/musstardssed.png" >
        
      </a>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
    
      <ul class="nav navbar-nav navbar-right" style="font-size:1.2em;">
        <li class="active"><a href="index.html">Home </a></li>
          <li><a href="#">News</a></li>
          <li  class="active"><a href="#">Register</a></li>
        <li class="active"><a href="http://linoit.com/users/ruddy12/canvases/Mustard#e41746255">NoticeBoard</a></li>
        <li class="dropdown">
          <a data-target="#" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inspiration Stories</a></li>
            <li><a href="#">Notice Board</a></li>
            <li><a href="#">Trends</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Business Forum</a></li>
            
          </ul>
        </li>
      </ul>
       <!--search bar-->
        
       <form action="" class="navbar-form navbar-right" role="form-control" action="search.php" method="get">
           <div class="form-group has-feedback">
             <i class="form-control-feedback glyphicon glyphicon-search"></i>
             <input type="text" class="form-control" name="search" placeholder="search">
           </div>
        </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--row withcolumns divided in 1:3-->
<div class="mainbox col-md-6 col-md-offset-3 col-sm-offet-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <center><h3>Mustard Login Form</h3></center>
  </div>
  <div class="alert alert-danger"></div>
  <div class="panel-body">
  <form class="horizontal-form" action="noticeboard.php" method="POST" role="form">
  
    <input type="email" name="email" class="form-control" placeholder="enter name">
    <input type="password" name="pass" class="form-control" placeholder="enter password">
    <input class="btn btn-sm btn-success btn-block" type="submit" value="noticeboard" name="noticeboard"> <br>
       </form>
  </div>
</div>
</div><!--col-xs-->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// connect with database 
 include 'database/db_connection.php';
//initialze
if (isset($_POST['noticeboard'])) {
  # code...
  $user_email = $_POST['email'];
  $user_pass = $_POST['pass'];
  
  //encrypt password
  $user_pass = md5($user_pass);

//Check user from db
 # $check_user = " select * from user WHERE user_email='$user_email' AND user_pass = '$user_pass'";

  $check_user="select * from user WHERE user_email='$user_email'AND user_pass='$user_pass'";

  //run a query in db to check if the credentials match
  $run = mysqli_query( $con, $check_user);

//check if etail match

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('http://linoit.com/users/ruddy12/canvases/Mustard#e41746255','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.
}
else{
  
  echo "<script>alert('Wrong email or password,please check them and try again')</script>";
}

  

}

?>