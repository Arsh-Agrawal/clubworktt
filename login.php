<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>

	<h1> Infodesk Portal </h1>

	<div class="main">
		<form method="POST" action="login_back.php">
			<div>
				<h2>Log In</h2>
				<input type="text" placeholder="Registration Number" name="reg" id="reg" required />
				<input type="text" placeholder="Delegate ID" name="delegate" id="delegate" required />
			</div>
			<input id="login" type="submit" name="login" value="login" />
		</form>
	</div>

</body>
</html>