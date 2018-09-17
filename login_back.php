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

	
	if($_POST['login'])
	{
		unset($reg,$delegate,$row,$numrows,$_SESSION['message'],$message);


		$reg=$_POST['reg'];
		$delegate=$_POST['delegate'];

		if(isset($reg,$delegate))
		{
			$sql='SELECT * FROM login WHERE registration = "'.$reg.'" AND delegate = "'.$delegate.'"';
			$row=mysqli_query($connect,$sql);
			$numrows = mysqli_num_rows($row);
			
			unset($sql,$row);//can be used later too

			if($numrows==1)
			{
				//head to rules and regulation page
				//header("Location: rules.php");
			}
			else
			{
				$sql='SELECT registration FROM login WHERE registration = "'.$reg.'"';
				$check_reg=mysqli_query($connect,$sql);
				
				if($check_reg==$reg)
				{
					$message = "Wrong Delegate ID";
					$_SESSION['reg'] = $reg; 
				}
				else
					$message = "Wrong Registration Number";

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