<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Change Password</h2>
	</div>
	
	<form method="post" action="changepassword.php">

		<?php include('errors.php'); ?>
	
		<div class="input-group">
			<label>New Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="change_user">Change</button>
		</div>
		<p> <a href="index.php">back</a> </p>
	</form>
</body>
</html>