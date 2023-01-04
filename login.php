<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body align="center">
		<div class="login">
			<h1>Login</h1>
			<form action="index.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
			<input type="text" name="user" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="pass" placeholder="Password" id="password" required>
				<input type="submit" name="submit" value="Login">
				
			</form>
		</div>
		<?php

			if (isset($_POST['submit'])){
			  $username=$_POST['user'];
			 $password=$_POST['pass'];}

			$res=mysqli_query($mysqli," select * from signin where username='$username' and password='$password'"); 

			 $result=mysqli_fetch_array($res);

			 if($result)
			 {
			 	header(location:"index.php");
			 }
			 else{

			 	echo " invalid";
			 }
		?>
	</body>
</html>