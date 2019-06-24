<?php
	
	session_start();

	$db=mysqli_connect("localhost","root","","smartfood");
	if(!$db){
		die("Mort". mysqli_connect_error());
	}

	if(isset($_POST['adaugareMeniu']) && strcmp($_POST['adaugareMeniu'],"")!=0)
	{
		$cautare="INSERT INTO meniu (id_user, nume_meniu) VALUES (".$_SESSION["id_utilizator"].",'".$_POST['adaugareMeniu']."')";
		$result=mysqli_query($db,$cautare);
	}
	
	header('Location: meniuri.php');

?>