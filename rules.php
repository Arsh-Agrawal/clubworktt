<?php
	session_start();
	if(isset($_SESSION['rules']))
	{
		$_SESSION['flam']=$_SESSION['rules'];	
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rules</title>
	<link rel="stylesheet" type="text/css" href="rules.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>

	<h1> RULES AND REGULATIONS </h1>

	<form class="main" action="paper_backend.php" method="POST">
		<p class="rules">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
		</p>

		<p class="rules">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
		</p>

		<p class="rules">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
		</p>
		<input type="submit" id="start" name="start" value="start test">
	</form>
</body>
</html>