<?php

//connect to db
include'database/db_connection.php';
//delete using id
$delete_id = $_GET['del'];
$delete_query = "delete from admin WHERE admin_id = '$delete_id'";
$run = mysqli_query($con, $delete_query);
if ($run) {
  //javascript to open the same window i.e. users.php
  echo "<script>window.open('useradmin.php?deleted=Admin has been deleted by SuperAdmin','_self')</script>";
}

 ?>