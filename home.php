<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
	<link rel="stylesheet" href="cssfile/reset.css"> 
	<link rel="stylesheet" href="cssfile/style.css">  
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body onload="typeWriter()">
	<header class="cd-main-header">
<a class="navbar-brand" href="#">Invincibles</a>
		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">                
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="login.html" data-signin="login">Sign in</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="signup.php" data-signin="signup">Sign up</a></li>
                
			</ul>
            
		</nav>
	</header>

	



			

			 
    <div class="container-fluid">
    <div class="row" id="fixed">
        <nav class="navbar navbar-inverse">
        <div class="navbar-header">
        </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
             <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> About Us</a></li>
      </ul>           
  </nav>
    </div> 
    </div>
    <div id="seetyping">
    <h1 id="demo"></h1>
        <a href="report.php"> <button class="btn btn-danger">Report</button></a>
    </div>
    <div id="lower_content">
        <h2 id="heading">About Site</h2><br><br><br><br>
           <div class="thumbnail right-caption span4">
               
  <img src="img/1.jpg" alt="1.jpg" >
  <div class="caption">
    <h3>Crime scene</h3>
    <p>well this is made by incincibles which helps the user to report crimes and it will keep yours identity anonymous and send your report to respective police stations so that they could take the respective actions.</p>
  </div>
</div>
        <div class="thumbnail left-caption span4">
               
  <img src="img/9.jpg" alt="1.jpg" >
  <div class="caption">
    <h3>Medical</h3>
    <p>well here in the web we provide the medical facility which keep the victim safe from any harm. </p>
  </div>
</div>
        <div id="lower_one">
        <h2 id="heading2">Photos</h2>
            <div class="container-fluid">
   
      <div class="row">
     
      <div class="col-md-3">
         <div class="col1"></div>
      </div>
      <div class="col-md-6">
         <div class="col2">
           
         </div>
      </div>
      <div class="col-md-3">
         <div class="col3"></div>
      </div>
        </div>
     
      <div class="row">
      <div class="col-md-3">
         <div class="col4"></div>
      </div>
      <div class="col-md-3">
         <div class="col5"></div>
      </div>
      <div class="col-md-3">
         <div class="col6"></div>
      </div>
        <div class="col-md-3">
         <div class="col7"></div>
      </div>
     
   
      </div>
       
    </div>
        </div>
    </div>
    <hr>
    <footer>
        <h4>Contact Us:</h4>
        <i class="fa fa-github" style="font-size:30px; color:black;"></i>
        <p id="copy">&copy;Invincibles</p>
    </footer>
<script src="js/placeholders.min.js"></script> 
<script src="js/main.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
<script>
    window.onscroll = function() {myFunction()};
   var header = document.getElementById("fixed");
var sticky = header.offsetTop;

function myFunction() {
    
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

    var i = 0;
var txt = 'Making Society better...';
var speed = 150;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }

}   
    </script>
</body>
</html>