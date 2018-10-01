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

	unset($reg,$name,$row,$numrows,$_SESSION['message'],$message,$_SESSION['reg']);

	if($_POST['login'])
	{
		

		$reg=$_POST['reg'];
		$name=$_POST['name'];

		if(isset($reg,$name))
		{

			$check='SELECT * FROM login WHERE registration = "'.$reg.'"';
			$r=mysqli_query($connect,$check);
			$logout=mysqli_fetch_assoc($r);
			$submition=$logout['over'];
			if($submition==0)
			{
				//database update
				
				//login update
				$over=1;  //cant login again with same registration number
				$sql="INSERT INTO login (registration,name,over) VALUES ('$reg','$name','$over')";
				$result=mysqli_query($connect,$sql);

				//user answer update
				$user_sql="INSERT INTO user(registration) VALUES ('$reg')";
				mysqli_query($connect,$user_sql);
			
				// head to rules and regulation page
				$_SESSION['rule']=0;
				$_SESSION['reg']=$reg;
				header("Location: rules.php");
			}
			else
			{
				
				$message="Paper already attempted";
				$_SESSION['message']=$message;
				header("Location: login.php");
			}
		}
		else
		{
			$_SESSION['message']="both the fields are required";
			header("Location: login.php");
		}
	}
?>