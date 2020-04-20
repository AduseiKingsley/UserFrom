<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Welcome Back</h2>
		<h4>Sign to continue</h4>
	</div>
	
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div align='right'>
		<a href="register.php">Forgot Password</a>
		</div>
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		</br>
		<center>
		<p>
			Dont have account? <a href="register.php">create a new account</a>
		</p>
		</center>
	</form>


</body>
</html>