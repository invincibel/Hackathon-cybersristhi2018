 
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
<!DOCTYPE html>
<html>
<head>
	<title>here is your copy</title>
</head>
<body bgcolor="#E6E6FA">
	<!-- 
	content of this area will be the content of your PDF file 
	-->
<div id="make" style="position: absolute;width: 50%;left: 25%;top: 10%;">
    <fieldset>
        <img src="upload/<?php
                   echo $imagename;
                  ?>" alt="No image" width="100" height="100">
        <br>
        <h2>Area</h2>
        <p><?php
              echo $a;
            ?></p>
        <h2>Report
        </h2>
        <p><?php
             echo $b;
            ?></p>
    </fieldset>
</div>
    <br>
    <br>
    <div style="position: absolute;top: 70%;left: 30%; background-color: greenyellow;border: 1px solid black;">
        Your application has been submitted pls take the screenshot of the page in order to have documentation. <a href="home.php">back to home</a>
    </div>
	<!-- here we call the function that makes PDF -->

	<!-- these js files are used for making PDF -->

  
</body>
</html>