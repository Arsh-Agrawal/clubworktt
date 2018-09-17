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

	unset($_SESSION['submit']);

	if(isset($_SESSION['submit']))
	{
		$user_ans=$_POST['ans'];
		$q_no=$_POST['q_no'];
		$sql='SELECT answer FROM exam WHERE id="'.$q_no.'"';
		$correct_ans=mysql_query($connect,$sql);
		if($user_ans==$correct_ans)
		{
			//show any one of the image
			//use random function
		}
		
	}

?>