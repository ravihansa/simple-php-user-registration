<?php 
include('server.php');
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Welcome</h2>
	</div>
	<div class="content">	

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<p> <a href="changepassword.php" style="color: red;">change password</a> </p>
			
		<?php endif ?>
	</div>
	<div class="header">
		<h2>All User List</h2>
	</div>
	<div class="content">		
		
		<?php
			
		while($row = mysqli_fetch_assoc($loadresults)) {
      		echo "{$row['username']} <br> "."<br>";
   		}

		?> 			
      	
    </div>
		
</body>
</html>