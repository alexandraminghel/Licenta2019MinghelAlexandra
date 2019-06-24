<?php
	
	session_start();

	$cautare="";
	 $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

 $cautareReteteFavorite="select idReteta from favorite where idUser=".$_SESSION["id_utilizator"]." order by id desc";
 $resultReteteFavorite=mysqli_query($db,$cautareReteteFavorite);

 while($row1=mysqli_fetch_assoc($resultReteteFavorite))
    {

      if(isset($_POST[$row1['idReteta']]))
      {
        $cautare="delete from favorite where idUser=".$_SESSION['id_utilizator']." and idReteta=".$row1['idReteta'];
      $result=mysqli_query($db,$cautare);
      }

    }

  header('Location: favorite.php');

?>