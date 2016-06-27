<!DOCTYPE html>
<html>
<head>
  <title>users Admin</title>

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
         <th>Admin Id</th>
            <th>Admin Name</th>
            <th>Admin E-mail</th>
            <th>Admin Zipcode</th>
            <th>Admin number</th>
            <th>Admin pass</th>
            <th>Admin pass</th>
            <th>Delete Admin</th></tr>
      </thead>
      <?php
      //connect to db
      include 'database/db_connection.php';

      //select query to view users
      $view_admin_query = " select * from admin";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $admin_id = $row[0];
        $admin_name = $row[1];
        $admin_email = $row[2];
        $admin_zipcode = $row[3];
        $admin_number= $row[4];
        $admin_pass= $row[5];
        $admin_pas = $row[6];
      

       ?>
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $admin_id; ?></td>
         <td><?php echo $admin_name; ?></td>
         <td><?php echo $admin_email; ?></td>
         <td><?php echo $admin_zipcode; ?></td>
         <td><?php echo $admin_number; ?></td>
         <td><?php echo $admin_pass; ?></td>
         <td><?php echo $admin_pas; ?></td>
         <td><a href="deleteadmin.php?del=<?php echo $admin_id ?>"><button class="btn btn-warning">Delete Admin</button></a></td>
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