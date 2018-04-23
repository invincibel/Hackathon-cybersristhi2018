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
        <title>Emegency </title>
                <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Invincible</a>
        </div>
      <ul class="nav navbar-nav">
        <li><a href="home2.php">Home</a></li>
        <li ><a href="profile.php">Profile</a></li>
          <li class="active"><a href="emer.php">Emergency</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>  
  </nav>
        <?php
          $q="SELECT * FROM `location` WHERE 1;";
         $query=mysqli_query($hritik,$q);
        while($k=mysqli_fetch_array($query))
        {
            echo "LATITUDE:".$k['lat'];
            echo "<br>";
                echo "LONGITUDE:".$k['lon'];
                        echo "<br><br>";
        }
        ?>
    </body>
</html>
