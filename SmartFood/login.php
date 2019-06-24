<?php
	session_start();
	$error="Nume/parola incorecte";
	$username=$_POST['user'];
	$pass=$_POST['pass'];

	$username=stripcslashes($username);
	$pass=stripcslashes($pass);
	

	$db=mysqli_connect("localhost","root","","smartfood");

	if(!$db){
		die("Mort". mysqli_connect_error());
	}
	echo "Da";



	$result=mysqli_query($db,"select * from users where utilizator='$username' and parola='$pass'") or die("Fail".mysql_errno());

	$row=mysqli_fetch_array($result);

	if($row['utilizator']==$username && $row['parola']==$pass)
	{	
		$_SESSION["utilizator"]=$username;
		$_SESSION["id_utilizator"]=$row['id'];
		$_SESSION["logat"]=true;
		header('Location: utilizator.php');
	}else
	{
		$_SESSION["error"]=$error;
		header('Location: logare.php');
	}

?>