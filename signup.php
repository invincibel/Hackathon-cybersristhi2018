<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="cssfile/sign.css">
    </head>
    <body>

<div class="container">
	
	<form enctype="multipart/form-data" action="up.php" method="post">
		<h1>Sign Up</h1>
		<p>Create an account now</p>
		<br>
		<label>Name:</label><br>
		<input type="text" name="name"  required><br>
		
		<label>Email:</label><br>
		<input type="email" name="email" required><br>
		
		<label>Password:</label><br>
		<input type="password" name="password" required><br>
				<label>Upload Your image:</label><br>
          <input type="file" name="image" required><br>
        <label>Admin Password:</label><br>
		<input type="password" name="adpassword" required><br>
        <input type="checkbox" name="term" id="term" required>Accept <a href="term.html">Terms and Condition</a>
		<input type="submit" id="button" name="submit"><br>
    </form>
</div>
    </body>
</html>