<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>

	<h1> PICTOMATCH REGISTRATION </h1>

	<div class="main">
		<form method="POST" action="index_back.php">
			<div>
				<h2>Register</h2>
				<input type="text" placeholder="Registration Number" name="reg" id="reg" pattern="[0-9]{9}" required />
				<input type="text" placeholder="Name" name="name" id="name" pattern="[A-Za-z]+" required />
				<input type="password" placeholder="Password" name="password" id="password" 	pattern="[A-Za-z0-9]{8,}" required />
			</div>
			<input id="register" type="submit" name="register" value="Register" />

			<div class="error">
				<?php
					if(isset($_SESSION['message']))
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					}
					if(isset($_SESSION['final_message']))
					{
						echo $_SESSION['final_message'];
						unset($_SESSION['final_message']);
					}
				?>
			</div>
		</form>

		<form method="POST" action="login1.php">
			<input id="login" type="submit" name="login" value="login" />
		</form>
	</div>

</body>
</html>