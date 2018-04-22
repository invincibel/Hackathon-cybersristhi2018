<?php
include_once 'connection.php';
     $a=$_POST['email'];
    @ $b=$_POST['password'];
     $q="SELECT * FROM `user`;";
     $query=mysqli_query($hritik,$q);
     while($k=mysqli_fetch_array($query))
     {
         if($k['email']==$a && $k['password']==$b)
         {
             session_start();
             $_SESSION['email']=$a;
             $_SESSION['password']=$b;
             $_SESSION['name']=$k['name'];
             header("location:home2.php");
         }
         else
             echo "<script> alert('Invalid username or password');</script>";
     }
?>