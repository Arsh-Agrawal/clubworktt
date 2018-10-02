<?php
	session_start();
	
	
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
			Mobile users shall use the rotated vision i.e. landscape mode
		</p>

		<p class="rules">
			Every correct answer reveals a cube from the puzzles and the participant scores +1
		</p>

		<p class="rules">
			Every wrong answer will result in deduction of 0.25 points.
		</p>

		<p class="rules">
			The participant is allowed to access a question from the puzzle at any point of the quiz before submission of the answer. [The lesser clues required, the better]
		</p>

		<p class="rules">
			Once an answer is submitted [except the answer of the puzzle] it cannot be changed
		</p>

		<p class="rules">
			Once the puzzle answer is submitted, the quiz ends. If the answer is correct all unattempted questions will be awarded +1 each.
		</p>

		<p class="rules">
			Once the puzzle answer is submitted, the quiz ends. If the answer is correct all unattempted questions will be awarded +1 each.
		</p>

		<input type="submit" id="start" name="start" value="start test"
		<?php
			if(isset($_SESSION['rule']))
			{
				$_SESSION['flam1']=$_SESSION['rule'];
				$_SESSION['reg1']=$_SESSION['reg'];
				unset($_SESSION['rule'],$_SESSION['reg']);
			}
		?> >
	</form>
</body>
</html>