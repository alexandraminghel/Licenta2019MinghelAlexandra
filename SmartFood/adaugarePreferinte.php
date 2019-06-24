<?php

session_start();
$sql="";

$db=mysqli_connect("localhost","root","","smartfood");
	if(!$db){
		die("Mort". mysqli_connect_error());
	}

	if(isset($_POST['preferintaDesert']))
	{
		$sql="UPDATE users SET preferintaDesert=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);

	
	if(isset($_POST['preferintaFeluriPrincipale']))
	{
		$sql="UPDATE users SET preferintaFeluriPrincipale=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaGatireRapida']))
	{
		$sql="UPDATE users SET preferintaGatireRapida=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaFructe']))
	{
		$sql="UPDATE users SET preferintaFructe=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaLegume']))
	{
		$sql="UPDATE users SET preferintaLegume=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaVegan']))
	{
		$sql="UPDATE users SET preferintaVegan=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaMicDejun']))
	{
		$sql="UPDATE users SET preferintaMicDejun=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);


	if(isset($_POST['preferintaCina']))
	{
		$sql="UPDATE users SET preferintaCina=1 where utilizator='".$_SESSION['utilizator']."'";
	}

	mysqli_query($db, $sql);
    

	header('Location: utilizator.php');
  


?>