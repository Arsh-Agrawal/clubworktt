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

	unset($reg,$delegate,$row,$numrows,$_SESSION['message'],$message,$_SESSION['reg']);

	if($_POST['login'])
	{
		

		$reg=$_POST['reg'];
		$delegate=$_POST['delegate'];

		if(isset($reg,$delegate))
		{
			$sql='SELECT * FROM login WHERE registration = "'.$reg.'" AND delegate = "'.$delegate.'"';
			$row=mysqli_query($connect,$sql);
			$numrows = mysqli_num_rows($row);

			if($numrows==1)
			{
				// head to rules and regulation page
				header("Location: quiz.php");
			}
			else
			{
				$sql2='SELECT registration FROM login WHERE registration="'.$reg.'"';
				$R1 = mysqli_query($connect, $sql2);
				// if($R1)
				// {
				// 	echo "1";
				// }
				// else
				// {
				// 	echo "2";
				// }
				 $row=mysqli_fetch_assoc($R1);
				
				
				if($result)
				{
					$_SESSION['reg']=$reg;
					$message = "Wrong Delegate ID";
				}
				else
				{
					$message = "Wrong Registration Number";
				}
				// echo "\t\t\t\t".$_SESSION['reg'];
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