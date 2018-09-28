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
	if(isset($_POST['start']))
	{
		
		$_SESSION['flam']=$_SESSION['rules'];
		header("Location: quiz.php");
	}

	if(isset($_POST['submit'],$_POST['ans']))
	{
		$_SESSION['submit']=$_POST['submit'];
		unset($_POST['submit'],$_SESSION['message'],$_SESSION['q_no']);//need to check again after submit is clicked

		$choice=$_POST['ans'];
		unset($_POST['ans']);//after taking the value there should be no value in it;

		$q_no=$_POST['q_no'];
		unset($_POST['q_no']);


		$_SESSION['question']=array();
		$_SESSION['question']=$_SESSION['returnq'];
		// $_SESSION['question']->setSize(64);
		$_SESSION['question'][$q_no]=1;

		$sql='SELECT answer FROM quiz WHERE id="'.$q_no.'"';
		$result = mysqli_query($connect, $sql);
		$row=mysqli_fetch_assoc($result);
		
		$correct_ans=$row['answer'];

		if($choice==$correct_ans)
		{
			// $inc='UPDATE user SET c_ans=c_ans+1 WHERE delegate ="'.$_SESSION['delegate'].'" '; 
			// $check=mysqli_query($connect,$inc);
			// if($check)
			// {
			// 	$img_no=range(1,64);
			// 	shuffle($img_no);
			// 	$image='SELECT img FROM image WHERE id="'.$img_no'"';
			// 	//print the image
				
			// }
			
			$message="correct answer";
		}
		else
		{
			$message="wrong answer";
		}

		$message.="Option chosen ".$choice;
		$_SESSION['message']=$message;
		$_SESSION['q_no']=$q_no;
		header("Location: quiz.php");
	}

	if(isset($_POST['final_submit']))
	{

		$sql='UPDATE logout SET over=1 WHERE delegate ="'.$_SESSION['delegate'].'" ';
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
		
		$_SESSION['final_message']=$message;
		//header("Location: login.php");
	}
	header("Location: quiz.php");	
?>