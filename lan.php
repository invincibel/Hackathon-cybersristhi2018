
<?php
include 'connection.php';
$a=$_POST['lat'];
      $b=$_POST['lon'];
      $q="INSERT INTO `location`(`lat`, `lon`) VALUES ('$a','$b');";
      $query=mysqli_query($hritik,$q);
?>