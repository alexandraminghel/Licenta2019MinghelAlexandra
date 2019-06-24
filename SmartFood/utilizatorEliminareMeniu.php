<?php
	
	session_start();

	$cautare="";
	 $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

  
  $cautareMeniuri="select id_meniu, nume_meniu from meniu where id_user='".$_SESSION['id_utilizator']."' order by id_meniu desc";
  $resultCautareMeniuri=mysqli_query($db,$cautareMeniuri);

  while ($row=mysqli_fetch_assoc($resultCautareMeniuri))
  {
      $cautareReteteMeniuri="select id_reteta from retetemeniu where id_meniu=".$row['id_meniu']." and id_user=".$_SESSION['id_utilizator'];
      $resultCautareReteteMeniuri=mysqli_query($db,$cautareReteteMeniuri);

      

      while($row1=mysqli_fetch_assoc($resultCautareReteteMeniuri))
      {
        

        if ( isset($_POST[$row['id_meniu'].$row1['id_reteta']]))
        {
          $cautare="delete from retetemeniu where id_meniu=".$row['id_meniu']." and id_reteta=".$row1['id_reteta'];
          $result=mysqli_query($db,$cautare);
          header('Location: meniuri.php');
        }
        
      }

      
  }



?>