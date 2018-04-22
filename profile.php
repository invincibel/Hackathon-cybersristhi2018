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
        <title>Profile</title>
        	<meta charset="UTF-8">
            <link rel="stylesheet" href="cssfile/profile.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet"> 
    </head>
    <body>
         <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Invincible</a>
        </div>
      <ul class="nav navbar-nav">
        <li><a href="home2.php">Home</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
          <li ><a href="emer.php">Emergency</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>  
  </nav>
        <div class="row">
 <div class="card">
  <img src="upload "alt="NO photo" style="width:100%">
  <h1><?php  $a=$_SESSION['email'];
                      $q="select * from user where email='$a';";
                      $query=mysqli_query($hritik,$q);
                      while($k=mysqli_fetch_array($query))
                          echo $k['name'];?></h1>
  <p class="title"><?php  $a=$_SESSION['email'];
                      $q="select * from user where email='$a';";
                      $query=mysqli_query($hritik,$q);
                      while($k=mysqli_fetch_array($query))
                          echo $k['email'];?></p>
  
 <p><button>Online</button></p>
             </div>
            <div class="print">
                <h1>Area of work</h1>
                <p class="title"><?php
                    $q="select * from user where email='$a';";
                      $query=mysqli_query($hritik,$q);
                      while($k=mysqli_fetch_array($query))
                          echo $k['about'];
                    ?></p>
            </div>
        </div>
        <div id="input">
            <form method="get">
                <input type="text" class="text" name="text" placeholder="enter your area"><br><br>
                <input type="submit" class="btn btn-success" name="submit" id="text" value="submit">
            </form>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
if(isset($_GET['submit']))
{
    $a=$_SESSION['email'];
    $line=$_GET['text'];
    $q="UPDATE `user` SET `about`='$line' WHERE email='$a';";
    $_SESSION['about']=$line;
    $query=mysqli_query($hritik,$q);
    header("location:profile.php");
}
?>