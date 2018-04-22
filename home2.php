<?php
 include 'connection.php';
  session_start();
  if(!isset($_SESSION['email']))
  {
      echo "pls login first";
      header("refresh:2;url=home.php");
      exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="cssfile/home2.css">
</head>
</html>