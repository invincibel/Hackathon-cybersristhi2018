<?php
include 'connection.php';
 session_start();
header("location:home.php");
session_destroy();

?>