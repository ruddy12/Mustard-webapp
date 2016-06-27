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
<center><h3 class="panel-title">Mustard Admin Login Form</h3></center>
<form class="form-horizontal" role="form" method="POST" action="dummy.php">

 <div class="form-group">
  <label for="email" class="control-label">Email</label>
       <input type="text" name="admin_name" class="form-control" placeholder="enter email">
 </div><!--form-group-->
 <div class="form-group">
  <label for="password" name="control-label">Password</label>
  <input type="password" name="admin_pass" class="form-control" placeholder="enter password">
 </div><!--form-group-->
 <button type="submit" class="btn btn-success" value="admin_login" name="admin_login">Login</button>
 

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
// connect with database 
 include 'database/db_connection.php';
//initialzerong
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($con,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('view_users.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>