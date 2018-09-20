<?php

	session_start();

	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='bmesi';
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$_SESSION['q_no']);
	if(mysqli_connect_errno())
	{
		die('database connection failed');
	}

	
	if(isset($_POST['submit'],$_POST['ans']))
	{
		unset($_POST['submit']);//need to check again after submit is clicked

		$choice=$_POST['ans'];
		unset($_POST['ans']);//after taking the value there should be no value in it;

		$q_no=$_SESSION['q_no'];
		unset($_SESSION['q_no']);

		$sql='SELECT answer FROM exam WHERE id="'.$q_no.'"';
		$correct_ans=mysqli_query($connect,$sql);
		if($choice==$correct_ans)
		{
			$inc='UPDATE user SET c_ans=c_ans+1 WHERE delegate ="'.$_SESSION['delegate'].'" '; 
			$check=mysqli_query($connect,$inc);
			if($check)
			{
				$img_no=range(1,64);
				shuffle($img_no);
				$image='SELECT img FROM image WHERE id="'.$img_no'"';
				//print the image
				
			}
			
			$message="correct answer";
		}
		else
		{
			$message="wrong answer";
		}
		$message.="\tOption chosen"
		$_SESSION['message']=$message;
		header("Location: exam.php");
	}
	if(isset($_POST['final_submit']))
	{
		$sql='UPDATE logout SET over='true' WHERE delegate ="'.$_SESSION['delegate'].'" ';
		$check=mysqli_query($connect,$sql);
		if($check)
		{
			$message="successfully submition done";
		}
		else
		{
			$message="error in submition";
		}

		echo $message;
		
		// $_SESSION['final_message']=$message;
		// header("Location: quiz.php");
	}
?>