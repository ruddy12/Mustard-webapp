<!DOCTYPE html>
<html>
<head>
	<title>mustard Chat help guide</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conutent="IE=edge">
    <!--for repsonsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="style.css" href="css/main.css"> 
   
    

</head>
<body>
<div class="jumbotron">
  <p>Thank you using our live chat platform. </p>
  To chat to this friend,please Top up using our MPESA Service:<br>
<ol>
  <li>Daily Subscription at Ksh.20</li>
  <li>Weekly Subscription at Ksh.100</li>
  <li>Monthly Subscription at Ksh.300</li>
</ol>



<div class="form-group">
<form action="sample.php" method="POST" enctype="multipart/form-data">
   <label>Upload Image</label>
   <input type="file" name="image" accept="image/jpeg" id="file">
  
 </div>

 <button type="submit" class="btn btn-info" value="upload" name="upload">Upload Image</button><br>
 </form>
</div><!--jumbotron -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 
</body>
</html>
<?php

require 'sampledb.php';
if (isset($_POST['upload'])) {
  # code...


   #$image = file_get_contents($_FILES,['image']['tmp_name']);
  /*$imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
  $imageData = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
  $imageType = mysqli_real_escape_string($_FILES["image"]["type"]);*/

  $image =mysqli_real_escape_string($_FILES['image']['name']);

  $image_temp =   mysqli_real_escape_string($_FILES['image']['name']);           #mysqli_real_escape_string(file_get_contents($_FILES['image']['temp_name']);

  $image_size = $_FILES['image']['size'];

    if ($image_size>500000) {
      # code...
      die('file exceeds maximum upload size');
    }

    $query= "insert into blob(img) VALUE('$image')";
    if( mysqli_query($con,$query )){

      echo "photo has been successfully uploaded<br>";
    }
    else{
      echo "upload failedd check ur photo size";
    }

   /* move_uploaded_file($image_temp, "img/$image");
    
    $move = "<img src='img/$image' />";

 echo $move;*/



}

 ?>