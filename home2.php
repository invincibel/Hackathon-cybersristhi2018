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
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Invincible</a>
        </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home2.php">Home</a></li>
        <li><a href="profile.php">profile</a></li>
       
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>            
      
    </div>  
  </nav>
        <?php
        $a=$_SESSION['email'];
        
          $q="SELECT * FROM `report` WHERE 1 ;";
          $query=mysqli_query($hritik,$q);
        while($k=mysqli_fetch_array($query))
        {
          echo "<div class='thumbnail right-caption span4'><img src='upload/'".$k['image']." alt='no photo' ><div class='caption'><h3>".$k['area']."</h3><p>".$k['data']."</p></div></div> ";  
        }
        
        ?>
        
    </body>
</html>