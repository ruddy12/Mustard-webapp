 <!DOCTYPE html>
<html>
<head>
	<title>Register</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>
    <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .panel-heading{
    	float: center;
    	margin-right: 30%;
    	margin-left: 30%;
    	padding: 0%;
    	/*display: inline-block;*/


    }
    	form{
    		display: inline-block;
    				border:solid black 1px;
    			width: 40%;
    			height: 50%;
    			margin-left: 30%;
    			margin-right: 30%;
    			padding: 5%;
    			float:center;
    	
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
<!--row withcolumns divided in 1:3-->
<div class="mainbox col-md-6 col-md-offset-3 col-sm-offet-2">
<div class="panel">
<div class="panel-heading">
	
</div><!--panel-head-->
<div class="panel-body">
<div class="form">
<center><h3 class="panel-title">Mustard Registration</h3></center>
<form class="form-horizontal" role="form" method="POST" action="register.php">

 <div class="form-group">
	<label for="name" class="control-label">Name</label>
	<input type="text" class="form-control" name="name" placeholder="enter Name">
	</div><!--form-group-->
 <div class="form-group">
 	<label for="email" class="control-label">Email</label>
 	 <input type="text" class="form-control" name="email" placeholder="enter email">
 </div><!--form-group-->
 <div class="form-group">
 	<label for="password" name="control-label">Password</label>
 	<input type="password" name="pass" class="form-control" placeholder="Enter password">
 </div><!--form-group-->
 <button type="submit" class="btn btn-primary" value="register" name="register">Register</button>
 
 <div class="well-sm">
		<center>Already have an account?please <a href="login.php">Login</a></center>
	</div>

</form>

</div><!--form-->
</div><!--panel-body-->
</div><!--panel-->
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'database/db_connection.php';
//flag
$error = false;

if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//validates name,email and password pattern and character

if (!preg_match("/^[a-zA-Z]+$/",$user_name)) {
	
	echo "<script>alert('Name must contain only alphabets and space')</script>";
	exit();
}
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
	
	echo "<script>alert('Please enter a valid email address')</script>";
	exit();
}


//here query check weather if user already registered so can't register again.
    $check_email_query="select * from user WHERE user_email='$user_email'";
    $run_query=mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into user(user_name,user_pass,user_email) VALUE ('$user_name',md5('$user_pass'),'$user_email')";
    if(mysqli_query($con,$insert_user))
    {
    	#$error =true;
    	#$successmsg= 'registration successful';
    	#echo "<script> alert('registration successful')</script>";
       # echo"<script>window.open('login.php','_self')</script>";
               echo "<script>window.open('welcome.php','_self')</script>";
    }

}

?>


