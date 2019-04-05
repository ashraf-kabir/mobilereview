<?php 
require_once('includes/config.php');
if (isset($_POST['reg_user'])) {

    // Getting username/ email and password
    $uname = $_POST['username'];
	$email=$_POST['email'];
    $password = $_POST['password'];
	$phone=$_POST['Phone_number'];
	$query = mysqli_query($con, "insert into user(name,email,password,Phone_number) values('$uname','$email','$password','$phone')");
}
			


 ?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>phone number</label>
  	  <input type="text" name="Phone_number">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>