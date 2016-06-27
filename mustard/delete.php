<?php

//connect to db
include'database/db_connection.php';
//delete using id
$delete_id = $_GET['del'];
$delete_query = "delete from user WHERE id = '$delete_id'";
$run = mysqli_query($con, $delete_query);
if ($run) {
  //javascript to open the same window i.e. users.php
  echo "<script>window.open('users.php?deleted=user has been deleted','_self')</script>";
}

 ?>