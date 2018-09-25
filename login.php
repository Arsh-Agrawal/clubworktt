<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>

	<h1> PICTOMATCH </h1>

	<div class="main">
		<form method="POST" action="login_back.php">
			<div>
				<h2>Log In</h2>
				<input type="text" placeholder="Registration Number" name="reg" id="reg" pattern="[0-9]{9}" value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']; ?>" required />
				<input type="text" placeholder="Delegate ID" name="delegate" id="delegate" pattern="[0-9]{3}" required />
			</div>
			<input id="login" type="submit" name="login" value="login" />
		</form>
	</div>
	<div>
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>

</body>
</html>