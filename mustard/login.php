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
  body{
      background-color:  #acacac;
      height: auto;
   width: 100%;
   
   overflow: hidden;
    }
      form{
        display: inline-block;
           /* border:solid black 1px;*/
          width: 40%;
          height: 50%;
          margin-left: 30%;
          margin-right: 30%;
          padding:5%;
          float:center;
            }
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
        <li class="active"><a href="#">Home </a></li>
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
<div class="section">
<!--row withcolumns divided in 1:3-->
<div class="mainbox col-md-6 col-md-offset-3 col-sm-offet-2">
<div class="panel">
<div class="panel-heading">
  
</div><!--panel-head-->
<div class="panel-body">
<div class="form">
<center><h3 class="panel-title">Mustard Login Form</h3></center>
<form class="form-horizontal" role="form" method="POST" action="login.php">

 <div class="form-group">
  <label for="email" class="control-label">Email</label>
       <input type="email" name="email" class="form-control" placeholder="enter name">
 </div><!--form-group-->
 <div class="form-group">
  <label for="password" name="control-label">Password</label>
  <input type="password" name="pass" class="form-control" placeholder="enter password">
 </div><!--form-group-->
 <button type="submit" class="btn btn-success" value="login" name="login">Login</button>
 

</form>

</div><!--form-->
</div><!--panel-body-->
</div><!--panel-->
</div>
</div><!--section-->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// connect with database 
 include 'database/db_connection.php';
//initialze
if (isset($_POST['login'])) {
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

//check if email match

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.
}
else{
  
  echo "<script>alert('Wrong email or password,please check them and try again')</script>";
}


}

?>