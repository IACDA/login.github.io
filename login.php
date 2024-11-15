<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IACDA Login Form</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body background="image/img.png">

	<center>
		
		<div class="form_deg">

			<center class= "title_deg">
				 Login Form

			<h4>
				<?php

				error_reporting(0);
				session_start();

				echo $_SESSION['loginMessage'];

				?>

			</h4>

			</center>

			<form action="login_check.php" method="POST" class="login_form">

				<div>
					<label class="label_deg">Username</label>
					<input type="text" name="Username">
				</div>

				<div>
					<label>Password</label>
					<input type="Password" name="password">
				</div>

				<div>
					<input type="submit" name="submit" value="Login">
				</div>
				
			</form>
			
		</div>

	</center>
	<div class="width-100 top-header">
<div class="container">
<div class="width-100">
<marquee class="headquote">Thank you for visit our official website Institution of Art and Craft Diploma Assam (IACDA). Please visit again.</marquee>
</div>
</div>
</div>

</body>
</html>