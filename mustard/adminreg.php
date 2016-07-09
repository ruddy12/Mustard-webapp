 <!DOCTYPE html>
<html>
<head>
	<title>AdminRegister</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .panel-heading{
    	float: center;
    	margin-right: 30%;
    	margin-left: 30%;
    	padding: 0%;
    	display: inline-block;


    }
    	form{
    		display: inline-block;
    				/*border:solid black 1px;*/
    			width: 40%;
    			height: 50%;
    			margin-left: 30%;
    			margin-right: 30%;
    			padding: 5%;
    			float:center;
    	
    	}
   /*   .form-group .fields { width: 2.188em; text-align: center; border: 1px solid #CCC; }*/
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
<center><h3 class="panel-title">Admin</h3></center>
<form class="form-horizontal" role="form" method="POST" action="adminreg.php">
<div>
<div class="form-group">
  <label for="name" class="control-label">Name</label>
  <input type="text" class="form-control" name="admin_name" placeholder="entername">
</div>
 <div class="form-group">
 	<label for="email" class="control-label">Email</label>
 	 <input type="text" class="form-control" name="admin_email" placeholder="enter email">
 </div><!--form-group-->
 <div class="form-group">
   <label >ZipCode</label>
   <input type="number" class="form-control" name="admin_zipcode" placeholder="+254">
   
 </div><!--form-group-->
 <div class="form-group">
   <label>Phone Number </label>
   <input type="number" class="form-control" name="admin_number" required pattern=".{9}" title="9 characters minimum" placeholder="xxx-xxx-xxx" />
                    
 </div>
 <div class="form-group">
   <label>Upload Image</label>
   <input type="file" name="image" accept="image/jpeg" id="file">
   <button type="submit" class="btn btn-info" value="upload" name="submit">Upload</button>
 </div>

 <div class="form-group">
 	<label for="password" name="control-label">Password</label>
 	<input type="password" name="admin_pass" class="form-control" placeholder="Enter password">
 </div><!--form-group-->
 <button type="submit" class="btn btn-success" value="admin_register" name="admin_register">Register</button>
 

</form>
<center><b>Already registered ?</b> <br></b><a href="adminlogin.php">Login here</a></center><!--for centered
</div><!--form-->
</div><!--panel-body-->
</div><!--panel-->
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

<?php
//connect to db
include 'database/db_connection.php';

//condition tell us what to do when details are passed

if (isset($_POST['admin_register'])) {

  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_zipcode = $_POST['admin_zipcode'];
  $admin_number = $_POST['admin_number'];
  $admin_pass = $_POST['admin_pass'];
   
  if(isset($_POST['submit']))
  {
  $image = file_get_contents($_FILES,['image']['tmp_name']);
  $image = mysqli_real_escape_string($image);
  echo "image successful";
  }

  #$admin_number = '254'.substr($admin_number,-9);
    //validate the form

  if ($admin_name=='') {
    # code...
    echo "<script>alert('Please enter your name')</script>";
  }
  if (!preg_match("/^[a-zA-Z]+$/", $admin_name)) {
    #generate your own error message after validation
    
    echo "<script>alert('Name must contain only alphabets and space')<script>";
  }


  if ($admin_zipcode=='') {
    
    echo "<script>alert('please enter your country's zip code')</script>";
    exit();
  }
  if ($admin_zipcode !='+254') {
    
    echo "<script>alert('wrong zipcode')</script>";
    exit();
  }
  if ($admin_email=='') {
    
    echo "<script>alert('please enter your email')</script>";
    exit();
  }
  //VALIDATES THE EMAIL
  if (!filter_var("$admin_email", FILTER_VALIDATE_EMAIL)) {
    #generate your own error message after validation
  
    echo "<script>alert('Please Enter a valid Email address')</script>";
    exit();
  }

  //validate phone number
  /*if (strlen($admin_number['admin_number'])) {
    # code...
    echo "<script>alert('please provide a 9 digit number')</script>";
  }*/
  #$phone = '000-0000-0000';

/*if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $admin_number)) {
  // $phone is valid
  echo "<script>alert('please enter a 9 digit number')</script>";
}*/ 
 if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/', $admin_number))
    {
      echo "<script>alert('Invalid Number!')</script>";
    }
/*if ($admin_number != 9) {
  # code...
  echo "<script>alert('phone number isnt valid')</script>";
}*/

/*if (preg_match('/^\d{9}$/', $admin_number)) {
    
    echo "<script>alert('please enter a 9 digit number')</script>";
    exit();
  }*/
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 

  // Temporary file name stored on the server
  $tmpName  = $_FILES['image']['tmp_name'];  

  // Read the file 
  $fp      = fopen($tmpName, 'r');
  $data = fread($fp, filesize($tmpName));
  $data = addslashes($data);
  fclose($fp);


  // Create the query and insert

  // Print results
  print "Thank you, your file has been uploaded.";

  }
  else {
  print "No image selected/uploaded";
  }




  if ($admin_pass=='') {
    
    echo "<script>alert('please enter your password')</script>";
    exit();  
  }

  $check_email_query="select * from admin WHERE admin_email='$admin_email' || admin_number='$admin_number'";
    $run_query=mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $admin_email or PhoneNumber is already exist in our database, Please try another one!')</script>";
exit();
    }

  

  //insert user into db

  $insert_user = "insert into admin(admin_name,admin_email,admin_zipcode,admin_number,image,admin_pass) VALUE ( '$admin_name','$admin_email','$admin_zipcode','$admin_number','$image',md5('$admin_pass')) "; //image attribute in db is blob type

  if (mysqli_query($con, $insert_user)) {

    echo "<script>alert('Registration successful')</script>";
  
     echo "<script>window.open('adminlogin.php','_self')</script>";
  }



  /*$admin_query = " select * from admin where admin_name = '$admin_email' AND admin_pass='$admin_pass' ";
  $run_query = mysqli_query($con, $admin_query);
  if (mysqli_num_rows($run_query)>0) {
    
    echo "<script>window.open('users.php')</script>";
  }
  else{
    echo "<script>alert('Admin Details are incorrect...!')</script>";



  }*/
}


?>
