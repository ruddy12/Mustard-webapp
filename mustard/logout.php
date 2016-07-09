<?php

session_start(); //stores all inforamation of pages in variables 
session_destroy();
header("Location: login2.php"); //redirects them to login page

 ?>