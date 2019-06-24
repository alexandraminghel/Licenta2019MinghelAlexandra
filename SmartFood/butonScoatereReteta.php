<?php
session_start();

	$cautare="";

	 $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

  $cautareMeniuri="select id_meniu from meniu where id_user='".$_SESSION['rowIdUser']."'";
  $resultCautareMeniuri=mysqli_query($db,$cautareMeniuri);

  while ($rowCautareMeniuri=mysqli_fetch_assoc($resultCautareMeniuri))
  {

  	if(isset($_POST[$rowCautareMeniuri['id_meniu']]))
  	{
  		$cautare="delete from retetemeniu where id_meniu=".$rowCautareMeniuri['id_meniu']." and id_reteta=".$_SESSION['idReteta']." and id_user=".$_SESSION['rowIdUser'];
  		
  		$result=mysqli_query($db,$cautare);
  	}
  	
  }

  header('Location: reteta.php?id='.$_SESSION['idReteta']);


?>