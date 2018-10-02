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
		unset($reg,$delegate,$row,$numrows,$_SESSION['message'],$message,$pass);
		$reg=$_POST['reg'];
		$pass=$_POST['password'];
		if(isset($reg,$pass))
		{
			$sql='SELECT * FROM login WHERE registration = "'.$reg.'" AND name = "'.$pass.'"';
			$row=mysqli_query($connect,$sql);
			$numrows = mysqli_num_rows($row);
			
			unset($sql,$row);//can be used later too
			if($numrows==1)
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
					$sql='UPDATE login SET over=1 WHERE registration ="'.$reg.'" ';
					$result=mysqli_query($connect,$sql);

					//user answer update
					$user_sql="INSERT INTO user(registration) VALUES ('$reg')";
					mysqli_query($connect,$user_sql);
			
					// head to rules and regulation page
					$_SESSION['rule']=0;
					$_SESSION['reg']=$reg;
					header("Location: rules1.php");
				}
				else
				{
				
					$message="Paper already attempted";
					$_SESSION['message']=$message;
					header("Location: login1.php");
				}
			}
			else
			{
				$sql='SELECT * FROM login WHERE registration = "'.$reg.'"';
				$connect_reg=mysqli_query($connect,$sql);
				$chreg=mysqli_fetch_assoc($connect_reg);
				$check_reg=$chreg['registration'];
				
				if($check_reg==$reg)
				{
					$message = "Wrong Password";
					$_SESSION['reg'] = $reg; 
				}
				else
					$message = "Wrong Registration Number";

				$_SESSION['message']=$message;
				header("Location: login1.php");
			}
		}
		else
		{
			$_SESSION['message']="both the fields are required";
			header("Location: login1.php");
		}
	}
?>