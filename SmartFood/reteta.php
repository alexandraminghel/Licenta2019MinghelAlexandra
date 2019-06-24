<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Reteta</title>
  <link rel="stylesheet" type="text/css" href="stylereteta.css">
</head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<body>


<div class="continut">

      <?php

      $afisare="";
      $cautare="";
      $cautareReteteFavorite="";
      $cautareIdUser="";

  $db=mysqli_connect("localhost","root","","smartfood");
  if(!$db){
    die("Mort". mysqli_connect_error());
  }

      if(isset($_GET['id']) && !empty($_GET['id']))
      {
                $idReteta = $_GET['id'];
                $_SESSION['idReteta']=$idReteta;
                $cautare="select Denumire,Ingrediente,Preparare,Timp,Imagine from retete where id=".$idReteta;
                $result=mysqli_query($db,$cautare);

                 while ($row=mysqli_fetch_assoc($result))
                  {
                              $afisare=$afisare."<div class=\"retetaTitlu\">
                      <div class=\"titlu\">
                        <h1>{$row['Denumire']}</h1>
                        <h4>{$row['Timp']} minute</h4>
                      </div>

                      <div class=\"favorit\">";

                      if(isset($_SESSION['utilizator']))
                      {

                          $cautareIdUser="select id from users where utilizator='".$_SESSION['utilizator']."'";
                          $resultIdUser=mysqli_query($db,$cautareIdUser);
                          $rowIdUser=mysqli_fetch_array($resultIdUser);

                          $cautareReteteFavorite="select idReteta from favorite where idUser='".$rowIdUser['id']."'";
                          $_SESSION['rowIdUser']=$rowIdUser['id'];

                          $resultReteteFavorite=mysqli_query($db,$cautareReteteFavorite);
                          $gasireFavorita=0;
                          while($rowFavorit=mysqli_fetch_assoc($resultReteteFavorite))
                          {

                              if($rowFavorit['idReteta']==$idReteta)

                                $gasireFavorita=1;
                          }

                        if($gasireFavorita==0)
                          {
                              $afisare=$afisare."<div class=\"butonFav\">Adauga la favorite</div><form action=\"buton1.php\" method=\"POST\"><button type=\"submit\" name=\"buton1\" class=\"buton1\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" viewBox=\"0 0 24 24\"><path d=\"M19.5 10c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-6.527 4.593c-1.108 1.086-2.275 2.219-3.473 3.407-6.43-6.381-12-11.147-12-15.808 0-6.769 8.852-8.346 12-2.944 3.125-5.362 12-3.848 12 2.944 0 .746-.156 1.496-.423 2.253-1.116-.902-2.534-1.445-4.077-1.445-3.584 0-6.5 2.916-6.5 6.5 0 2.063.97 3.901 2.473 5.093z\"/></svg></button></form>
                          </div>";
                          }
                      else
                      if($gasireFavorita==1)
                          {
                            $afisare=$afisare."<div class=\"butonFav\">Elimina din favorite</div><form action=\"buton2.php\" method=\"POST\"><button type=\"submit\" class=\"buton2\" name=\"buton2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" viewBox=\"0 0 24 24\"><path d=\"M19.5 10c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-5v-1h5v1zm-6.527 4.593c-1.108 1.086-2.275 2.219-3.473 3.407-6.43-6.381-12-11.147-12-15.808 0-6.769 8.852-8.346 12-2.944 3.125-5.362 12-3.848 12 2.944 0 .746-.156 1.496-.423 2.253-1.116-.902-2.534-1.445-4.077-1.445-3.584 0-6.5 2.916-6.5 6.5 0 2.063.97 3.901 2.473 5.093z\"/></svg> </button></form>
                      </div>";
                          }
                        $afisare=$afisare."<div class=\"meniu\">
                              <div class=\"butonMeniuri\">Meniuri</div>
                              <button class=\"butonMeniu\" onclick=\"openNav()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z\"/></svg></button>

                              <div class=\"dropdown-contentASCUNS\" id=\"dropdown-contentASCUNS\">
                              <label class=\"containerBtn\" id=\"containerBtn\">
                              <span id=\"btn\" class=\"btn\" onclick=\"closeNav()\">x</span>
                            </label>";

                           $afisare=$afisare."<form method=\"POST\" action=\"adugareMeniu.php\"><input autocomplete=\"off\" type=\"text\" name=\"adaugareMeniu\" class=\"Introducere\" placeholder=\"Creaza un meniu\">
                  <button class=\"butonIntroducere\" type=\"submit\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z\"/></svg>
                  </button></form>
                  ";
      
   


                    $cautareMeniuri="select id_meniu,nume_meniu from meniu where id_user='".$rowIdUser['id']."' order by id_meniu desc";
                    $resultCautareMeniuri=mysqli_query($db,$cautareMeniuri);

                    while ($rowCautareMeniuri=mysqli_fetch_assoc($resultCautareMeniuri))
                    {

                      $cautareValidare="select * from retetemeniu where id_meniu=".$rowCautareMeniuri['id_meniu']." and id_reteta=".$idReteta." and id_user=".$rowIdUser['id'];
                      $resultCautareValidare=mysqli_query($db,$cautareValidare);

                      if($resultCautareValidare->num_rows!=0)
                      {

                        $afisare=$afisare."<form method=\"POST\" action=\"butonScoatereReteta.php\"><button type=\"submit\" name=\"".$rowCautareMeniuri['id_meniu']."\" class=\"butonAdaugare\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M0 10h24v4h-24z\"/></svg></button><div class=\"denumireMeniu\">".ucfirst($rowCautareMeniuri['nume_meniu'])."</div></form>";

                      }else
                        {
                       $afisare=$afisare."<form method=\"POST\" action=\"butonAdaugareReteta.php\"><button type=\"submit\" name=\"".$rowCautareMeniuri['id_meniu']."\" class=\"butonAdaugare\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z\"/></svg></button><div class=\"denumireMeniu\">".ucfirst($rowCautareMeniuri['nume_meniu'])."</div></form>";
                        }
                    }


                      $afisare=$afisare."<div class=\"invizibil\">a </div></div>";
                
                }



      
              $afisare=$afisare."</div>

                </div>

  
            <div class=\"boxReteta\">
            <div class=\"boxRetetaContinut\">
            <div class=\"ingredienteInfo\">
              <h2>Ingrediente</h2>
              <div class=\"listaIngrediente\">
              <div class=\"imagine1\"><img class=\"imagine\" src=\"pozeretete/{$row['Imagine']}.jpg\"></div>
                         <ul>";

          $bucatiIngrediente=explode(" ".PHP_EOL." ", $row['Ingrediente']);

          $bucatiPreparare=explode(".", $row['Preparare']);

          

          for($i=0;$i<count($bucatiIngrediente);$i++)
          {
            $afisare=$afisare."<li>".$bucatiIngrediente[$i]."</li>";
          }
          


          $afisare=$afisare."</ul>  
              
              

      </div>
      

      <div class=\"modPreparare\">
        <h2>Reteta</h2>
        <div>";

        $contorPreparare=0;

        for($i=0;$i<count($bucatiPreparare);$i++)
          {

            if($i==count($bucatiPreparare)-1)
            {
              $afisare=$afisare.$bucatiPreparare[$i];
              $contorPreparare++;
            }
          else
            if($contorPreparare==5)
            {
              $afisare=$afisare.$bucatiPreparare[$i].".<br>";
              $contorPreparare=0;
            }
            else
            {
              $afisare=$afisare.$bucatiPreparare[$i].".";
              $contorPreparare++;
            }
          }
          
       $afisare=$afisare."</div>
      </div>

    </div>


  </div>";
          }
          echo $afisare;
        }
      ?>

  

</div>

<div class="navbar">
  

  <svg class="svg-icon4" viewBox="0 0 20 20">
              <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
            </svg>

    <div class="Logo">
      <a class="clasa1" href="utilizator.php">Smart Food</a>
      <form action="cautaRetetaPagina3.php" method="POST">
        <input type="text" name="cautaReteta2" class="cautaReteta2" placeholder="Caută o rețetă" autocomplete="off">
      </form>
    </div>

    
    
</div>



</body>

<script>
function openNav() {
  document.getElementById("dropdown-contentASCUNS").style.visibility = "visible";
}
</script>

<script>
function closeNav() {
  document.getElementById("dropdown-contentASCUNS").style.visibility = "hidden";
}
</script>

</html>


