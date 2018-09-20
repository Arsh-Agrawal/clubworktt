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

		<form action="paper_backend.php" method="POST">
			<div> 
				

				<input type="hidden" name="q_no" value="1">
				<p> ur name? </p>
				<input type="radio" name="ans" value="1" id="ans">
				<input type="radio" name="ans" value="2" id="ans">
				<input type="radio" name="ans" value="3" id="ans">
				<input type="radio" name="ans" value="4" id="ans">
				<input type="submit" name="submit" value="submit">
				<?php
					if(isset($_SESSION['message']) && $_SESSION['q_no']==1)
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					}
				?>
				
			</div>
		</form>

		<form action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value="2">
				<input type="submit" name="bla" value="2" disabled>
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="2">
				<input type="radio" name="ans" value="1">
				<input type="radio" name="ans" value="2">
				<input type="radio" name="ans" value="3">
				<input type="radio" name="ans" value="4">
				<input type="submit" name="submit" value="submit">
				<?php
					if(isset($_SESSION['message']) && $_SESSION['q_no']==2)
						echo $_SESSION['message'];
				?>
				
			</div>
		</form>
			<div> 
				<input type="hidden" name="q_no" value="3">
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="3">
				<input type="radio" name="ans" value="1">
				<input type="radio" name="ans" value="2">
				<input type="radio" name="ans" value="3">
				<input type="radio" name="ans" value="4">
				<input type="submit" name="submit" value="submit">
				
			</div>
		<form action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value="4">
				<p> ur name? </p>
				<input type="hidden" name="q_no" value="4">
				<input type="radio" name="ans" value="1" >
				<input type="radio" name="ans" value="2">
				<input type="radio" name="ans" value="3">
				<input type="radio" name="ans" value="4">
				<input type="submit" name="submit" value="submit">

				
			</div>

		</form>

	</div>

	<div class="right">

	</div>
		
	</div>
	

</body>
</html>