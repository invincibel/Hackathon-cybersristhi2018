 
<?php
include 'connection.php';
$a=$_POST['area'];
     $b=$_POST['data'];
     $imagename=$_FILES['image']['name'];
        $tempimgname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tempimgname,"upload/$imagename");
       $q="INSERT INTO `report`(`area`, `data`,`image`) VALUES ('$a','$b','$imagename');";
        $query=mysqli_query($hritik,$q);
header("location:home.php");
?>