<?php
session_start();

  if(!isset($_SESSION["logat"]))
  {
    header('Location: logare.php');
    exit();
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Utilizator</title>
	<link rel="stylesheet" type="text/css" href="utilizator.css">
</head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<body>



<div class="static-bar">

	<div class="Gaseste">Găsește o rețetă</div>
	<form action="cautaRetetaPagina1.php" method="POST" autocomplete="off">
		<input type="text" name="cautaReteta" class="cautaReteta">
	</form>
	<svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
						</svg>

	<svg class="svg-icon2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 12l-20 12 7.289-12-7.289-12z"/></svg>
	<div class="cautareAvansata">
		<a href="cautareavansata.php">
			CAUTARE AVANSATĂ
		</a>
	</div>


	<div class="log-out">
		<form action="logout.php">
			<input type="submit" class="btn" value="Log-out">
		</form>
	</div>




	<div class=clasa2>
	<a href="favorite.php">	Retete favorite</a>
		<svg class="svg-icon3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M22 12l-20 12 7.289-12-7.289-12z"/></svg>
	</div>
	<div class=clasa2>
		<a href="meniuri.php">Meniurile tale</a>
		<svg class="svg-icon3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M22 12l-20 12 7.289-12-7.289-12z"/></svg>
	</div>
	<div class=clasa2>
		<a href="recomandari.php">Recomandari</a>
		<svg class="svg-icon3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M22 12l-20 12 7.289-12-7.289-12z"/></svg>
	</div>
  <div class=clasa2>
    <a href="utilizator.php">Ultimele retete</a>
    <svg class="svg-icon3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M22 12l-20 12 7.289-12-7.289-12z"/></svg>
  </div>

</div>


<div class="moving-bar">
	       
         <?php

              $afisare="";
               $db=mysqli_connect("localhost","root","","smartfood");
                          if(!$db){
                                  die("Mort". mysqli_connect_error());
                                }

                

                $cautareMeniuri="select id_meniu, nume_meniu from meniu where id_user='".$_SESSION['id_utilizator']."' order by id_meniu desc";
                $resultCautareMeniuri=mysqli_query($db,$cautareMeniuri);

               $afisare=$afisare."<form method=\"POST\" action=\"adugareMeniuUtilizator.php\"><input autocomplete=\"off\" type=\"text\" name=\"adaugareMeniu\" class=\"Introducere\" placeholder=\"Creaza un meniu\">
      <button class=\"butonIntroducere\" type=\"submit\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z\"/></svg>
      </button></form>";

                if($resultCautareMeniuri->num_rows==0)
                {
                  $afisare=$afisare."<h1>Nu exista meniuri</h1>";
                }
                else
                {

                  while ($row=mysqli_fetch_assoc($resultCautareMeniuri))
                  {
                      $afisare=$afisare."<form method=\"POST\" action=\"butoneliminare.php\"><h1>".ucfirst($row['nume_meniu'])."<button type=\"submit\" name=\"".$row['id_meniu']."\" class=\"butone\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-12v-2h12v2z\"/></svg></button></h1></form>";

                      $cautareReteteMeniuri="select id_reteta from retetemeniu where id_meniu=".$row['id_meniu']." and id_user=".$_SESSION['id_utilizator'];
                      $resultCautareReteteMeniuri=mysqli_query($db,$cautareReteteMeniuri);

                                  if($resultCautareReteteMeniuri->num_rows==0)
                                  {
                                       $afisare=$afisare."<h2>Nu exista retete in acest meniu</h2>";
                                  }
                                  else
                                  {
                                    $afisare=$afisare."<div class=\"row\">";
                                      while($row1=mysqli_fetch_assoc($resultCautareReteteMeniuri))
                                      {

                                        $cautareDescriere="select Denumire,Ingrediente,Preparare,Timp,Imagine from retete where id=".$row1['id_reteta'];
                                        $resultCautareDescriere=mysqli_query($db,$cautareDescriere);


                                                                while ($row2=mysqli_fetch_assoc($resultCautareDescriere)) {
                                                      
                                                      $afisare=$afisare."<div class=\"column\">
                        <div class=\"content\">
                        <img src=\"pozeretete/{$row2['Imagine']}.jpg\" alt=\"Lights\" style=\"width:100%\">
                        <a href=\"reteta.php?id={$row1['id_reteta']}\">
                          <h3>{$row2['Denumire']}</h3> </a>
                          <p style=\" user-select: none\" class=\"clasap\">{$row2['Timp']} minute</p>
                          <form method=\"POST\" action=\"utilizatorEliminareMeniu.php\" class=\"clasaform\"><button type=\"submit\" name=\"".$row['id_meniu'].$row1['id_reteta']."\" class=\"butone\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-12v-2h12v2z\"/></svg></button></form>
                        </div>
                      </div>";

                              }



                                      }

                                      $afisare=$afisare."</div>";
                                  }


                  }

                }



            echo $afisare;
         ?>

	
	

</div>

<div class="navbar">
	
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="svg-icon5"><path d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/></svg></a>

	<svg class="svg-icon4" viewBox="0 0 20 20">
							<path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
						</svg>

		<div class="Logo">
			<a class="clasa1" href="paginaprincipala.php">Smart Food</a>
			<form action="cautaRetetaPagina3.php" method="POST">
				<input type="text" name="cautaReteta2" class="cautaReteta2" placeholder="Caută o rețetă" autocomplete="off">
			</form>
		</div>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div class="container-meniu">
  		<div class="poza-logo2">
			<img src="poze/logo4.png">
		</div>

  		<a href="paginaprincipala.php" class="meniu-scris1">Smart Food</a>
   </div>
  <a href="favorite.php"  class="meniu-scris2">Retete favorite</a>
  <a href="meniuri.php"  class="meniu-scris3">Meniurile tale</a>
   <a href="recomandari.php"  class="meniu-scris3">Recomandari</a>
  <a href="cautareavansata.php"  class="meniu-scris4">Cauta o reteta</a>
  

</div>


<span style="font-size:33px;cursor:pointer;padding-left: 1%;padding-top: 1%;position: absolute; color: #787878;width: 5%;" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



</body>
</html>