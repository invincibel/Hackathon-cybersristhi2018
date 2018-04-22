<?php
include 'connection.php';
$a=$_POST['name'];
 $b=$_POST['email'];
    $c=$_POST['password'];
$d=$_POST['adpassword'];
if($d=='hritik.31')
{
$g="select * from user";
    $fet=mysqli_query($hritik,$g);
while($k=mysqli_fetch_array($fet))
    {
        if($k['email']==$b)
        {
            echo "<script>alert('Email already exists');</script>";
            exit();
        }
}
    if(strlen($a)<3 || strlen($c)<4)
        {
       echo "<script>alert('Something went wrong check out pass should be of length 5 and name should be greater than 3');</script>";
       exit();
   }
       else
    {
        $imagename=$_FILES['image']['name'];
        $tempimgname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tempimgname,"upload/$imagename");
       $q="INSERT INTO `user`(`name`, `email`, `password`, `image`) VALUES ('$a','$b','$c','$imagename');";
        $query=mysqli_query($hritik,$q);
    }
header("location:home.php");
}
else
    echo "<script>alert('Wrong admin password');</script>";
?>