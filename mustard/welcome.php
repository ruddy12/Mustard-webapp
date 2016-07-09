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
    <style>
     .jumbotron{
         height: auto;
          width: 100%;
         padding: 40px 0;
        overflow: hidden;
 
      }
      #vid0{
        margin: 5%;
        padding: 2%;
      }
      #vids{
        margin: 5%;
        padding: 2%;
      }

      #vid1{
        margin: 5%;
        padding: 2%;
      }
      #vid2{
        margin: 5%;
        padding: 2%;
      }
      #vid3{
        margin: 5%;
        padding: 2%;
      }
      #vid4{
        margin: 5%;
        padding: 2%;
      }
      #vid5{
        margin: 5%;
        padding: 2%;
      }
     
    </style>
    
</head>
<body>
<h1>WELCOME..</h1>
<div class="well-md">
<?php echo $_SESSION['email'];
 ?>
  <a href="logout.php"><button type="submit" class="btn btn-danger"><h6 style="color:#ffffff;">Logout</h6></a>
</div>

<div class="col-md-12">
<div class="breadcrums">
<div class="feature">
<h3>  Mustard seed chat Help guide </h3>
<ol class="breadcrumb">

 <li> <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#mymodal">Chat HelpGuide</button></li>
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

  <li><a href="https://mustardseedgroup.slack.com"><button type="submit" class="btn btn-success">CHAT</button></a></li>
  <li><a href="../index.html"><button type="submit" class="btn btn-primary">Homepage</button></a></li>
 <li> <a href="http://linoit.com/users/ruddy12/canvases/Mustard#e41746255"><button type="submit" class="btn btn-primary">Notices</button></a></li>
  <li><a href="../Articles.html"><button type="submit" class="btn btn-primary">Articles</button></a></li>
 <li> <a href="../blogs.html"><button type="submit" class="btn btn-primary">Blogs</button></a></li>
 <li> <a href="../templates/downloads.html"><button type="submit" class="btn btn-primary">Listen/Download Sermons</button></a></li>
  <li><a href="../templates/videos.html"><button type="submit" class="btn btn-primary">Watch Videos</button></a></li>
</ol>
</div><!--breadcrums-->
</div><!--feature-->
</div><!--col-md-12-->
<br>
<!--videos-->
<div class="row">
  <div class="jumbotron">
  <div class="container">
    <div class="col-md-8">
      <section id="vid0">
      <div class="embed-responsive embed-responsive-16by9">
       <iframe src="https://player.vimeo.com/video/173866425" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173866425">The Story Short Film-SD</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>  
</div><!--embed-responsive-->  
</section>
    </div>

    <div class="col-md-8">
      <section id="vids">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://player.vimeo.com/video/173867018" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173867018">WhyTheStory_com The Story in Making Disciples by Spread Truth</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div><!--embed-responsive-->
      </section>
    </div>
  <div class="col-md-8">
<section id="vid1">
  <div class="embed-responsive embed-responsive-16by9">
<div class="container-fluid"></div> 
<!--are u a goo person-->
<iframe src="https://player.vimeo.com/video/173585197" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173585197">Are You a Good Person_</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
</section>
 </div>
 </div><!--col-m-8-->
 



<div class="col-md-8">
<section id="vid2">
<div class="embed-responsive embed-responsive-16by9">

<!--maasaai worrier-->
    <iframe src="https://player.vimeo.com/video/173428940?color=ff0179" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <p><a href="https://vimeo.com/173428940">Joseph the masaai warrior by john piper</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga & I'llBeHonest.com</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div><!--embed-->
    </section><!--vid2-->
</div><!--col-md-8-->




<div class="col-md-8">
<section id="vid3">
    <div class="embed-responsive embed-responsive-16by9">
    <!--persecution John macarthur-->

    <iframe src="https://player.vimeo.com/video/173585146"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173585146">Persecution_ A Price to Pay for Being a Christian_ (John MacArthur)</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div>
     </section><!--vid3-->

    </div><!--col-md-8-->


    <div class="col-md-8">
      <section id="vid4">
        <iframe src="https://player.vimeo.com/video/166441089?color=e3b64f&title=0&byline=0&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/166441089">How do you know that you are really a Christian?</a> from <a href="https://vimeo.com/mastersseminary">The Master&#039;s Seminary</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
      </section>
    </div><!--col-md-8-->
   
         <div class="col-md-8">
           <section id="vid4">
              <!--steve lawson-->
      <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://player.vimeo.com/video/173630472"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173630472">It Will Cost You Everything</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>





      </div><!--embed-->
      </section><!--vid4-->

      </div><!--col-md--8-->

      <div class="col-md-8">
        <section id="vid5">

           <!--paul washer-->
        <iframe src="https://player.vimeo.com/video/173430562" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/173430562">Jesus Died! - Paul Washer</a> from <a href="https://vimeo.com/user53912445">Rufus Nganga</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
     

        </section>
      </div>

      
    

</div><!--container-->
</div><!--jumbotron-->
  
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>