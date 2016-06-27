<!DOCTYPE html>
<html>
<head>
	<title>MUSTARD</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conutent="IE=edge">
    <!--for repsonsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="style.css" href="css/main.css"> 
    <style type="text/css">
    .nav{
      font-family: 'freight-text-pro';
      font-size: 1em;
    }
      body{
        font-family: 'freight-text-pro';
        font-size: 2em
        line height:32px;
      }
      .well{
        font-family: 'freight-text-pro';
        font-size: 1em;
      }

      .well > h2{
         color: #0033FF;
         font-family: 'freight-text-pro';
         font-size: 2.25em;
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
      <a class="navbar-brand" >
      	<img  style="width:100px; height: 35px" src="img/mustard1.jpg" class="img-responsive">
      	
      </a>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
    
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home </a></li>
        <li><a href="#">News</a></li>
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
       <form action="" class="navbar-form navbar-right" role="search">
           <div class="form-group has-feedback">
             <i class="form-control-feedback glyphicon glyphicon-search"></i>
             <input type="text" class="form-control" placeholder="search">
           </div>
        </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--row withcolumns divided in 1:3-->
<div class="row">
   <div class="col-sm-8">
        <div id="myCarousel" class="carousel slide" style="width: 700px; height:400px; margin: 0 auto" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox" style=" margin:0; padding:0;">
              <div class="item active">
                <img src="img/cross.jpg" style="width: 700px; height:400px;" alt="baptism">
              </div>
              <div class="item">
                <img src="img/communion.jpg" style="width: 700px; height:400px;" alt="Holy Communion">
              </div>
              <div class="item">
                <img src="img/risen.jpg" style="width: 700px; height:400px; margin: 0 auto" alt="resurection">
              </div>
            </div>
            <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span> 
            </a>
            
            <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span> 
            </a>
          </div><!--courasel-->

 </div><!--col-sm-9-->       
 
<div class="col-sm-4">
  <div class="list-group">
    <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-hand-right"></span> Trending Topics<span class="badge">15</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-camera"></span> Gallery<span class="badge">25</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-file"></span> Latest Article<span class="badge">8</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-file"></span> Popular Article<span class="badge">5</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-folder-open"></span>Notice Board<span class="badge">7</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-envelope"></span>Letter to the Editor<span class="badge">14</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-book"></span>Resources<span class="badge">10</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-user"></span>Quotes<span class="badge">12</span></a>
    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-cloud"></span>Blogs<span class="badge">3</span></a>
    <a href="http://www.challies.com/resources/take-a-quiz-on-christ" class="list-group-item " data-toggle="tooltip" title="Take a small quiz on Christ"><span class="glyphicon glyphicon-blackboard"></span>Quizes<span class="badge">10</span>tooltip</a>
    <div clas="col-sm-2">
      
    </div><!--col-sm-2-->
    


  </div><!--listgroup-->

</div><!--col-sm-4 listgroup-->


</div><!-- row -->
 
 <!--articles-->
 <div class="container">
    <section id="articles">
    <!-- quote/mission of what mustard is about-->
    <div class="well well-lg">
    <h2 align="center">OUR MISSION</h2>
    <p>“The kingdom of heaven is like a grain of mustard seed that a man took and sowed in his field.It is the smallest of all seeds, but when it has grown it is larger than all the garden plants and becomes a tree, so that the birds of the air come and make nests in its branches.” Matthew13:31-32</p>
      
    </div><!--well-->
    <div class="well">
    <div class="row"><!--grid with three articles-->
      <div class="col-xs-4">
      <div class="thumbnail">
        <img src="img/seeking-allah.jpg" class="responsive"  style="" />
        <h3 align="center"><strong>SEEKING ALLAH, FINDING JESUS</strong></h3>
        <p>The New York Times bestselling Seeking Allah, Finding Jesus, describes Nabeel’s dramatic journey from Islam to Christianity, complete with friendships, investigations, and supernatural dreams along the way.</p>
        <p><a href="http://www.answeringjihad.com" class="btn btn-default">Learn More</a></p>
      </div><!--thumbnail-->

      </div><!--col-xs-4-->
      <div class="col-xs-4">
            <div class="thumbnail">
        <img src="img/man-at-work.jpg" class="responsive" style="">
        <h3 align="center"><strong>Work That Makes a Difference</strong></h3>
        <p> I once had a job I hated. Day after day I sat in a windowless basement office surrounded by hot, noisy computers. Day after day nothing happened. nothing ever did, at least until the day came when they laid me off. I hated that job. I hated going to that office. </p>
        <P><a href="http://www.challies.com/christian-living/work-that-makes-a-difference" class="btn btn-default">Learn More</a></P>
        </div><!--thumbnail-->
      </div>
      <div class="col-xs-4">
        <div class="thumbnail">
        <img src="img/No God but one.jpg" class="responsive" style="">
        <h3 align="center"><strong>NO GOD BUT ONE</strong></h3>
        <p>In No God But One, New York Times bestselling author Nabeel Qureshi takes readers on a global, historical, yet deeply personal journey to the heart of the world’s two largest religions.</p>
        <p><a href="http://www.zondervan.com/seeking-allah-finding-jesus" class="btn btn-default">Leran More</a></p>
          </div><!--thumbnail-->
      </div><!--col-xs-4-->
      
      </div><!--row-->
      </div><!-- jumbotron-->
    </section>
     </div>
<!-- footer -->
<div class="container">
  <div class="col-sm-8 col-sm-offset-2 text-center">
  <ul class="list-inline center-block">
  <li><a href="http://facebook.com/mustard"><img src="img/soc_fb.png" /></li>
  <li><a href="http://twitter.com/mustard"><img src="img/soc_tw.png" /></li>
  <li><a href="http://google.com/+mustard"><img src="img/soc_gplus.png" /></a></li>
  <li><a href="http://google.com/+mustard"><img src="img/soc_pin.png" /></a></li>
  
    
  </ul>
  
  </div>
  
</div>
<ul class="nav pull-right scroll-top">
<li><a href="#" title="Back to top" data-toggle="popover" tabindex="0" data-trigger="focus" ><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
<div class="footer">
     <p class="text-muted">Copyright ©2016 Mustard</p>

</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
  </script>
  <script type="text/javascript">
  //tooltip
    $(document).ready(function(){
      $('[data-toggle = "tooltip"]').tooltip({
        placement:'top'
      });
     });
    //POPUP on the scroll at the bottom
    $(document).ready(function(){

      $("pop-bottom").popover({placement:"bottom"});
    };)



  </script>
 
</body>
</html>
<?php ?>