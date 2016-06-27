<!DOCTYPE html>
<html>
<head>
	<title>users</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<div class="well">
<div clas="col-md-12">
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="info">
         <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User pass</th>
            <th>Delete User</th></tr>
      </thead>
      <?php
      //connect to db
      include 'database/db_connection.php';

      //select query to view users
      $view_users_query = " select * from User";
      //run the sql query

      $run = mysqli_query($con, $view_users_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $user_id = $row[0];
        $user_name = $row[1];
        $user_email = $row[2];
        $user_pass = $row[3];
      

       ?>
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $user_name; ?></td>
         <td><?php echo $user_pass; ?></td>
         <td><?php echo $user_email; ?></td>
         <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete User</button></a></td>
       </tr>
       <?php } ?>
    </table>
  </div>
</div>
</div><!--col-md-12 -->
</div><!--well -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>