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
	<h1>Retete favorite</h1>

	  <?php
                    
                          $db=mysqli_connect("localhost","root","","smartfood");
                          if(!$db){
                                  die("Mort". mysqli_connect_error());
                                }
                          $afisare="<div class=\"row\">";
                          $cautareIdUser="select id from users where utilizator='".$_SESSION['utilizator']."'";
                          $resultIdUser=mysqli_query($db,$cautareIdUser);
                          $rowIdUser=mysqli_fetch_array($resultIdUser);



                          $cautareReteteFavorite="select idReteta from favorite where idUser=".$rowIdUser['id']." order by id desc";
                          $resultReteteFavorite=mysqli_query($db,$cautareReteteFavorite);

                          while($row1=mysqli_fetch_assoc($resultReteteFavorite))
                          {
                             $cautare="select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete where id={$row1['idReteta']}";
                             $result=mysqli_query($db,$cautare);

                             while ($row=mysqli_fetch_assoc($result)) {
                                  
                                  $afisare=$afisare."<div class=\"column\">
    <div class=\"content\">
    <img src=\"pozeretete/{$row['Imagine']}.jpg\" alt=\"Lights\" style=\"width:100%\">
    <a href=\"reteta.php?id={$row['id']}\">
      <h3>{$row['Denumire']}</h3></a>
      <p style=\" user-select: none\" class=\"clasap\">{$row['Timp']} minute</p>
      <form method=\"POST\" action=\"utilizatorEliminareFavorit.php\" class=\"clasaform\"><button type=\"submit\" name=\"".$row['id']."\" class=\"butone\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-12v-2h12v2z\"/></svg></button></form>
    </div>
  </div>";

                              }

                          }


                          if(strcmp($afisare,"<div class=\"row\">")!=0)
                          {
                              $afisare=$afisare."</div>";
                          }
                          else
                          {
                            $afisare="Nu exista retete favorite";
                          }
                          
                          echo "$afisare";
                    
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