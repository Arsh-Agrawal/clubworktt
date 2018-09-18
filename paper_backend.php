<?php

	session_start();

	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='bmesi';
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno())
	{
		die('database connection failed');
	}

	
	if(isset($_POST['submit']))
	{
		$user_ans=$_POST['ans'];
		$q_no=$_POST['q_no'];
		$sql='SELECT answer FROM exam WHERE id="'.$q_no.'"';
		$correct_ans=mysql_query($connect,$sql);
		if($user_ans==$correct_ans)
		{
			$inc='UPDATE user SET c_ans=c_ans+1 WHERE delegate ="'.$_SESSION['delegate'].'" '; 
			$check=mysql_query($connect,$inc);
			if($check)
			{
				$img_no=range(1,64);
				shuffle($img_no);
				$image='SELECT img FROM image WHERE id="'.$img_no'"';
				//print the image
				header("Location: exam.php");
			}
			
			$message="correct ans";
		}
		else
		{
			$message="wrong answer";
		}
		unset($_POST['submit']);
		$_SESSION['message']=$message;
	}
?>