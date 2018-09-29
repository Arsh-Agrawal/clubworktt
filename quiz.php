<?php
	session_start();

	error_reporting(E_ERROR | E_PARSE);

	if(isset($_SESSION['flam']))
	{
		unset($_SESSION['image'],$_SESSION['correct_q']);
		$_SESSION['flag']=$_SESSION['flam'];
		$_SESSION['img_flag']=$_SESSION['flam'];

	}

	unset($_SESSION['flam']);
	
	if($_SESSION['flag']==0)
	{
		unset($_SESSION['returnq'],$_SESSION['question']);
		$_SESSION['returnq']=array();	
	}
	$_SESSION['flag']=1;
	$_SESSION['question'][0]=0;
	if($_SESSION['flag']==1)
	{
		$_SESSION['returnq']=$_SESSION['question'];	
	}

	$_SESSION['return_del']=$_SESSION['delegate'];
	
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
		<h1> PICTOMATCH </h1>
	</div>

	<div class="container">

		<div class="left"> <!-- for the left hand side page  -->
			<p class="ques"> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

		<form  id="q1" action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value= 1>
				<p class="ques"> 
					1. What age bracket do you lie in? 
				</p>
				<p> 
					<input type="radio" name="ans" value="1" id="ans">
					Less than 15
				</p>
				<p> 
					<input type="radio" name="ans" value="2" id="ans">
					15-20
				</p>
				<p> 
					<input type="radio" name="ans" value="3" id="ans">
					20-25
				</p>
				<p> 
					<input type="radio" name="ans" value="4" id="ans">
					More than 25
				</p>

				<input type="submit" id="submit" name="submit" value="submit" <?php if ($_SESSION['question'][1] == 1){ ?> disabled <?php   } ?> >
				
				<?php
					if(isset($_SESSION['message']) && $_SESSION['q_no']==1)
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
						unset($_SESSION['q_no']);
					}
				?>
				
			</div>
		</form>
		
				<form  id="q2" action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value=2>
				<p class="ques"> 
					2. Who do you like more? 
				</p>
				<p> 
					<input type="radio" name="ans" value="1" id="ans">
					Less than 15
				</p>
				<p> 
					<input type="radio" name="ans" value="2" id="ans">
					15-20
				</p>
				<p> 
					<input type="radio" name="ans" value="3" id="ans">
					20-25
				</p>
				<p> 
					<input type="radio" name="ans" value="4" id="ans">
					More than 25
				</p>

				<input type="submit" id="submit" name="submit" value="submit" <?php if ($_SESSION['question'][2] == 1){ ?> disabled <?php   } ?> >

				
				<?php
					if(isset($_SESSION['message']) && $_SESSION['q_no']==2)
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
						unset($_SESSION['q_no']);
					}
				?>
				
			</div>
		</form>
		<form action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value="3">
				<p class="ques"> 
					3. Which word you like more? 
				</p>
				<p> 
					<input type="radio" name="ans" value="1" id="ans">
					Pandemonium
				</p>
				<p> 
					<input type="radio" name="ans" value="2" id="ans">
					Unprecedented
				</p>
				<p> 
					<input type="radio" name="ans" value="3" id="ans">
					Serendipity
				</p>
				<p> 
					<input type="radio" name="ans" value="4" id="ans">
					Shambles
				</p>
				<input type="submit" name="submit" value="submit">
				
			</div>
		</form>
		<form action="paper_backend.php" method="POST">
			<div> 
				<input type="hidden" name="q_no" value="4">
				<p class="ques"> 
					4. Do you have friends?
				</p>
				<p> 
					<input type="radio" name="ans" value="1" id="ans">
					Yes
				</p>
				<p> 
					<input type="radio" name="ans" value="2" id="ans">
					No
				</p>
				<p> 
					<input type="radio" name="ans" value="3" id="ans">
					I don't know
				</p>
				<p> 
					<input type="radio" name="ans" value="4" id="ans">
					I don't care
				</p>
				<input type="submit" name="submit" value="submit">
			</div>
		</form>

	</div>
	


	<div class="right">

	<div class="container">
			<div id="photos">
				<!-- <img src="upload/cube1.png">
				<img src="upload/cube3.png">
				<img src="upload/cube1.png">

				<img src="upload/cube1.png">
				<img src="upload/cube3.png">
				<img src="upload/cube1.png">

				<img src="upload/cube1.png">
				<img src="upload/cube3.png">
				<img src="upload/cube1.png"> -->
			<?php
				$_SESSION['return_img']=array();
				$_SESSION['return_img']=$_SESSION['image'];

				$_SESSION['return_correct_q']=array();
				$_SESSION['return_correct_q']=$_SESSION['correct_q'];

				if($_SESSION['correct_q'][1]==1)
				{
					?><img src="<?php echo $_SESSION['image'][1]; ?>"><?php

				}
			?>
			<?php
				if($_SESSION['correct_q'][2]==1)
				{
					?><img src="<?php echo $_SESSION['image'][2]; ?>"><?php
				}
			?>
		</div> 

		<div id="final_submit">
			<form action="paper_backend.php" method="POST">
				<input type="text" name="final_answer" id="final_ans">
				<input id="final_submit" type="submit" name="final_sub">
			</form>
		</div>
	</div>
</body>
</html>