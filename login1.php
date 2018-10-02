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

	<h1> PICTOMATCH LOGIN</h1>

	<div class="main">
		<form method="POST" action="login_back.php">
			<div>
				<h2>Log In</h2>
				<input type="text" placeholder="Registration Number" name="reg" id="reg" pattern="[0-9]{9}" value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']; 
				?>"required />
				<input type="password" placeholder="Password" name="password" id="password" pattern="[A-Za-z0-9]{8,}" required />
			</div>
			<input id="login" type="submit" name="login" value="login" />
			<input id="back" type="button" name="back" onclick="location.href='index.php'" value="back" />

			<div class="error">
				<?php
					unset($_SESSION['reg']);
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
	</div>

</body>
</html>l