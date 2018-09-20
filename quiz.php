<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
	<link rel="stylesheet" type="text/css" href="quiz.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>

	<div class="top">
		<h1> Exam </h1>
	</div>

	<div class="container">

		<div class="left">
		<!-- no form action..will send it using inline php only -->
		<form action="paper_backend.php" method="POST">
			<div> 
				

				<input type="hidden" name="q_no" value="1">
				<p> ur name? </p>
				<input type="radio" name="ans" value="1" id="ans">
				<input type="radio" name="ans" value="2" id="ans">
				<input type="radio" name="ans" value="3" id="ans">
				<input type="radio" name="ans" value="4" id="ans">
				<input type="submit" name="submit" value="submit">	
				
			</div>

			<div> 
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="2">
				<input type="radio" name="ans" value="a">
				<input type="radio" name="ans" value="b">
				<input type="radio" name="ans" value="c">
				<input type="radio" name="ans" value="d">
				<input type="submit" name="submit" value="submit">
				
			</div>

			<div> 
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="3">
				<input type="radio" name="ans" value="a">
				<input type="radio" name="ans" value="b">
				<input type="radio" name="ans" value="c">
				<input type="radio" name="ans" value="d">
				<input type="submit" name="submit" value="submit">
				
			</div>

			<div> 
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="4">
				<input type="radio" name="ans" value="a">
				<input type="radio" name="ans" value="b">
				<input type="radio" name="ans" value="c">
				<input type="radio" name="ans" value="d">
				<input type="submit" name="submit" value="submit">

				
			</div>

		</form>

	</div>

	<div class="right">
		

	</div>
		
	</div>
	

</body>
</html>