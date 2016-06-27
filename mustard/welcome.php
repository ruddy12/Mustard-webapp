<?php

session_start(); //store information of all pages in variables

if (!$_SESSION['email']) {
  
  header("location: login.php");
}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<h1>WELCOME..</h1>
<div class="well-md">
<?php echo $_SESSION['email'];
 ?>
  <a href="logout.php"><button type="submit" class="btn btn-danger"><h6 style="color:#ffffff;">Logout</h6></a>
</div>
<div class="col-md-12">
<div class="feature">
<h3>  Mustard seed chat Help guide </h3>
  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#mymodal">Chat HelpGuide</button>
  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodallabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
     <center> <h3 class="modal-title" id="mymodallabel"><strong>Sauti Chat HelpGuide</strong></h3></center>
    </div><!--modal-header-->
    <div class="modal-body">
      <p>Sautidates does not disclose your personal number to anyone.Subscribers are however allowed to share their numbers at their will though sautidates shall not be help responsible incase of anything</p>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div><!--modal-footer-->
    </div><!--modal-content-->
  </div><!--modal-modal dialog-->
</div><!--modal-fade-->

  <a href="https://mustardseedgroup.slack.com"><button type="submit" class="btn btn-success">CHAT</button></a>
  <a href="../index.html"><button type="submit" class="btn btn-primary">Homepage</button></a>
  <a href="http://linoit.com/users/ruddy12/canvases/Mustard#e41746255"><button type="submit" class="btn btn-primary">Notices</button></a>
  <a href="../Articles.html"><button type="submit" class="btn btn-primary">Articles</button></a>
  <a href="../blogs.html"><button type="submit" class="btn btn-primary">Blogs</button></a>
  <a href="../templates/downloads.html"><button type="submit" class="btn btn-primary">Listen/Download Sermons</button></a>
  <a href="../templates/videos.html"><button type="submit" class="btn btn-primary">Watch Videos</button></a>
</div><!--feature-->
</div><!--col-md-12-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>