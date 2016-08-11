<!DOCTYPE html>
<html>
	<head>
		<!--Title of the Web Application -->
		<title> Web Chat Application </title>
		<!-- Including of JQuery -->
		<script src="JS/jquery.js" type="text/javascript"></script>
		<!-- Including Main JavaScript File -->
		<script src="JS/main.js" type="text/javascript"></script>
		<!-- Including StyleSheet -->
		<link type="text/css" href="CSS/main.css"  rel="stylesheet"/>
	</head>
	<body>
		<!-- Main Wrapper -->
		<div id="wrapper">

			<?php
			## Including Configuration File
			require 'PHP/config.info.php';
			## Checking if the User Has Laready Logged in - if yes load wrapper with home.php or else load it with Login form
			if (!empty($_SESSION['user_id'])) {
			?>
				<script>
					$("#wrapper").load("PHP/pages/home.php");
				</script>
			<?php
				die();
			}
			?>
			<!-- Login form container div -->
			<div id="loginform">
				<p>
					LogIn
				</p>
				<!-- Loging Form -->
				<form action="#" method="post">
					<div>
						<label>User Name</label>
						<input type="text" id="user_name" />
					</div>
					<div>
						<label>Password</label>
						<input type="password" id="user_pwd" />
					</div>
					<!-- Two buttons for register and sig-in -->
					<div>
						<input type="button" value="Register" id="nav_register" />
						<input type="submit" value="Log In" id="login_button" />
					</div>
					<!-- Div to display error message -->
					<div id="error">

					</div>
				</form>
			</div>
		</div>
	</body>
</html>