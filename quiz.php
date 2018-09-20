<?php
	session_start();
	if(empty($_SESSION['q_no']))
		$_SESSION['q_no']=0;
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

		<form>
			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==1)
						echo $_SESSION['message'];
					$_SESSION['q_no']=1;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==2)
						echo $_SESSION['message'];
					$_SESSION['q_no']=2;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==3)
						echo $_SESSION['message'];
					$_SESSION['q_no']=3;
				?>
			</div>

			<div> 
				<p> ur name? </p>
				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==4)
						echo $_SESSION['message'];
					$_SESSION['q_no']=4;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==5)
						echo $_SESSION['message'];
					$_SESSION['q_no']=5;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==6)
						echo $_SESSION['message'];
					$_SESSION['q_no']=6;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==7)
						echo $_SESSION['message'];
					$_SESSION['q_no']=7;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==8)
						echo $_SESSION['message'];
					$_SESSION['q_no']=8;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==9)
						echo $_SESSION['message'];
					$_SESSION['q_no']=9;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==10)
						echo $_SESSION['message'];
					$_SESSION['q_no']=10;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==11)
						echo $_SESSION['message'];
					$_SESSION['q_no']=11;
				?>
			</div>

			<div> 
				<p> ur name? </p>

				<input type="radio" name="q1" value="a">
				<input type="radio" name="q1" value="b">
				<input type="radio" name="q1" value="c">
				<input type="radio" name="q1" value="d">
				<input type="submit" name="a1" value="submit">
				<?php 
					if($_SESSION['q_no']==12)
						echo $_SESSION['message'];
					$_SESSION['q_no']=12;
				?>
			</div>

		</form>

	</div>

	<div class="right">
		

	</div>
		
	</div>
	

</body>
</html>