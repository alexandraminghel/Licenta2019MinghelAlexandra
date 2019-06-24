<?php
	
	session_start();

	$cautare="";
	 $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

  if(isset($_POST['buton1']))
  {
  		$cautare="insert into favorite values (NULL,'".$_SESSION['rowIdUser']."','".$_SESSION['idReteta']."')";
  		$result=mysqli_query($db,$cautare);

  }

  header('Location: reteta.php?id='.$_SESSION['idReteta']);

?>