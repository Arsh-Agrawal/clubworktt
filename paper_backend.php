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
		
		$_SESSION['flam']=$_SESSION['flam1'];
		$_SESSION['registration']=$_SESSION['reg1'];
		unset($_SESSION['flam1'],$_SESSION['del1']);
		header("Location: quiz.php");
	}

	if(isset($_POST['submit'],$_POST['ans']))
	{
		$_SESSION['submit']=$_POST['submit'];
		unset($_POST['submit'],$_SESSION['message'],$_SESSION['q_no']);//need to check again after submit is clicked
		$_SESSION['delegate']=$_SESSION['return_reg'];
		$choice=$_POST['ans'];
		unset($_POST['ans']);//after taking the value there should be no value in it;

		$q_no=$_POST['q_no'];
		unset($_POST['q_no']);

		$_SESSION['correct_q']=array();
		$_SESSION['correct_q']=$_SESSION['return_correct_q'];//returning correct answers

		$_SESSION['question']=array();
		$_SESSION['question']=$_SESSION['returnq'];//return answered questions
		
		$_SESSION['image']=array();
		$_SESSION['image']=$_SESSION['return_img'];//return image file path

		$_SESSION['question'][$q_no]=1;

		$sql='SELECT answer FROM quiz WHERE id="'.$q_no.'"';
		$result = mysqli_query($connect, $sql);
		$row=mysqli_fetch_assoc($result);
		
		$correct_ans=$row['answer'];

		if($choice==$correct_ans)
		{
			
			$inc='UPDATE user SET c_ans=c_ans+1 WHERE registration ="'.$_SESSION['registration'].'" '; 
			$got=mysqli_query($connect,$inc);
			
			if($got)
			{
				$img='SELECT * from img WHERE id = "'.$q_no.'"';
				$sql_result=mysqli_query($connect,$img);
				$img_row=mysqli_fetch_assoc($sql_result);
				
				$_SESSION['image'][$q_no]=$img_row['image'];
				// print the image
				
				$_SESSION['correct_q'][$q_no]=1;
			}
			
			$message="correct answer";
		}
		else
		{
			$wrong_sql='UPDATE user SET w_ans=w_ans+1 WHERE registration ="'.$_SESSION['registration'].'" ';
			$wrong=mysqli_query($connect,$wrong_sql);
			if($wrong)
				$message="wrong answer";
		}

		$message.="Option chosen ".$choice;
		$_SESSION['message']=$message;
		$_SESSION['q_no']=$q_no;
		header("Location: quiz.php");
	}
	else
	{
		header("Location: quiz.php");	
	}
	if(isset($_POST['final_sub']))
	{
		$reg=$_SESSION['return_reg'];
		$final_answer=$_POST['final_ans'];
		$over=1;
		$sql="INSERT INTO logout (registration,over,final_answer) VALUES ('$reg','$over','$final_answer')";
		$check1=mysqli_query($connect,$sql);
		
		if($check1)
		{
			$message="successfully submition done";
		}
		else
		{
			$message="error in submition";
		}
		unset($_SESSION['returnq'],$_SESSION['return_correct_q'],$_SESSION['return_reg'],$_SESSION['q_no'],$_SESSION['image'],$_SESSION['correct_ans']);
		
		$_SESSION['final_message']=$message;
		header("Location: login.php");
	}
	else
	{
		header("Location: quiz.php");	
	}

	
?>