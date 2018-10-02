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

	if($_POST['register'])
	{
		

		$reg=$_POST['reg'];
		$name=$_POST['name'];
		$pass=$_POST['password'];

		if(isset($reg,$name,$pass))
		{

			$check='SELECT * FROM login WHERE registration = "'.$reg.'"';
			$r=mysqli_query($connect,$check);
			if($r)
			{
				$message="Already Registered";
				$_SESSION['message']=$message;
				header("Location: index.php");
			}
			
			//database update
				
			//login update
			$over=0;  //cant login again with same registration number
			$sql="INSERT INTO login (registration,name,over) VALUES ('$reg','$pass','$over')";
			$result=mysqli_query($connect,$sql);
			
			//head to the same page
			$message="Register Successfully";
			$_SESSION['message']=$message;
			header("Location: index.php");
		}
		else
		{
			$_SESSION['message']="both the fields are required";
			header("Location: index.php");
		}
	}
?>