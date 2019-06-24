<?php

session_start();

	$cautare="";

	 $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

  $cautareMeniuri="select id_meniu from meniu where id_user='".$_SESSION['id_utilizator']."'";
  $resultCautareMeniuri=mysqli_query($db,$cautareMeniuri);



   while ($row=mysqli_fetch_assoc($resultCautareMeniuri))
   {

   		if(isset($_POST[$row['id_meniu']]))
   		{
   			$eliminareReteteDinMeniu="delete from retetemeniu where id_meniu=".$row['id_meniu'];
   			$resultEliminaReteteDinMeniu=mysqli_query($db,$eliminareReteteDinMeniu);

   			$eliminaMeniu="delete from meniu where id_meniu=".$row['id_meniu'];
   			$resultEliminaMeniu=mysqli_query($db,$eliminaMeniu);
   		}

   }

   header('Location: meniuri.php');


?>