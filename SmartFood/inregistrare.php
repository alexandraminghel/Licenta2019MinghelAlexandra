<?php
	session_start();

	$db=mysqli_connect("localhost","root","","smartfood");

	

	if(!$db){
		die("Mort". mysqli_connect_error());
	}
	

	if(isset($_POST['register_btn']))
	{
		
		$username=$_POST['user'];
		$password1=$_POST['pass1'];
		$password2=$_POST['pass2'];
		$email=$_POST['email'];
	}

	 $cautareUtilizatoriIdentici="select * from users where utilizator='$username'";
     $resultCautareUtilizatoriIdentici=mysqli_query($db,$cautareUtilizatoriIdentici);

	$cautareUtilizatoriIdenticiMail="select * from users where email='$email'";
	$resultCautareUtilizatoriIdenticiMail=mysqli_query($db,$cautareUtilizatoriIdenticiMail);


	if($password1!=$password2)
	{
		$error="Parole diferite introduse";
		$_SESSION["error"]=$error;
		header('Location: crearecont.php');
	}
	else
	{
		if($resultCautareUtilizatoriIdentici->num_rows!=0)
		{
			$error="Nume de utilizator existent";
			$_SESSION["error"]=$error;
			header('Location: crearecont.php');
		}
		else
			if($resultCautareUtilizatoriIdenticiMail->num_rows!=0)
			{
				$error="Email existent in baza de date";
			$_SESSION["error"]=$error;
			header('Location: crearecont.php');
			}
	
		else
		{
		$result=mysqli_query($db,"INSERT INTO users (utilizator,parola,email) VALUES ('$username','$password1','$email')");
		
		$_SESSION["utilizator"]=$username;
		$_SESSION["logat"]=true;

		$result=mysqli_query($db,"select * from users where utilizator='$username' and parola='$passowrd1'") or die("Fail".mysql_errno());

		$row=mysqli_fetch_array($result);
		$_SESSION["id_utilizator"]=$row['id'];


		header('Location: preferinte.php');
		}
	}

	

?>