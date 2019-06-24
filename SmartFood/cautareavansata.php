<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cauta o reteta</title>
  <link rel="stylesheet" type="text/css" href="style4.css">
  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<body>


<ul class="products">
    
     <?php
                    if(isset($_SESSION["afisare"])){
                        $afisare = $_SESSION["afisare"];
                        echo "$afisare";
                    }
                    else
                    {
                          $db=mysqli_connect("localhost","root","","smartfood");
                          if(!$db){
                                  die("Mort". mysqli_connect_error());
                                }
                          $cautare="select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete order by id desc limit 15";
                          $result=mysqli_query($db,$cautare);
                           $contor=0;
                           $afisare="";
                           while ($row=mysqli_fetch_assoc($result)) {
                                  $contor++;
                                  $afisare=$afisare."<li>
                                      <a href=\"reteta.php?id={$row['id']}\">
                                          <img src=\"pozeretete/{$row['Imagine']}.jpg\">
                                          <h4>{$row['Denumire']}</h4>
                                      </a>
                                          <p style=\" user-select: none\">{$row['Timp']} minute</p>
                                      
                                  </li>";}
                          $afisareInceput="<h5>Ultimele {$contor} retete adaugate<h5>".$afisare;
                          echo "$afisareInceput";
                    }
      ?> 
</ul>

<div class="navbar">
  

  <svg class="svg-icon4" viewBox="0 0 20 20">
              <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
            </svg>

    <div class="Logo">
      <a class="clasa1" href="paginaprincipala.php">Smart Food</a>
      <form action="cautaRetetaPagina3.php" method="POST">
        <input type="text" name="cautaReteta2" class="cautaReteta2" placeholder="Caută o rețetă" autocomplete="off">
      </form>
    </div>

    
</div>

<div class="ceva">

<form  method="POST" action="checksearch.php">
   <div class="bara-selectate">
  
      <?php
                    if(isset($_SESSION["afisares"])){
                        $afisares = $_SESSION["afisares"];
                        echo "$afisares";
                    }
                 
                    
      ?> 
  





  </div>
  

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">MESELE ZILEI</a>
    <div class="dropdown-content">
      
        <label class="container">

           <?php
                    if(isset($_SESSION["micdejun"])){
                        $afisare1 = $_SESSION["micdejun"];
                        echo "$afisare1";
                    }
                    else echo "<input type=\"checkbox\" name=\"micdejun\" value=\"micdejun\" onchange=\"this.form.submit()\"  id=\"micdejun\" >Mic dejun";
                ?> 


       
       <span class="checkmark"></span>
      <br>
     </label>

  <label class="container">
   <?php
                    if(isset($_SESSION["pranz"])){
                        $afisare2 = $_SESSION["pranz"];
                        echo "$afisare2";
                    }
                    else echo "<input type=\"checkbox\" name=\"pranz\" value=\"pranz\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Pranz";
                ?> <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["gustare"])){
                        $afisare3 = $_SESSION["gustare"];
                        echo "$afisare3";
                    }
                    else echo "<input type=\"checkbox\" name=\"gustare\" value=\"gustare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Gustare";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["aperitiv"])){
                        $afisare4 = $_SESSION["aperitiv"];
                        echo "$afisare4";
                    } else echo "<input type=\"checkbox\" name=\"aperitiv\" value=\"aperitiv\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Aperitiv";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
   <?php
                    if(isset($_SESSION["cina"])){
                        $afisare5 = $_SESSION["cina"];
                        echo "$afisare5";
                    } else echo "<input type=\"checkbox\" name=\"cina\" value=\"cina\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cina";
                ?><br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
   <?php
                    if(isset($_SESSION["desert"])){
                        $afisare6 = $_SESSION["desert"];
                        echo "$afisare6";
                    } else echo "<input type=\"checkbox\" name=\"desert\" value=\"desert\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Desert";
                ?><br>
  <span class="checkmark"></span>
  </label>
  <br>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">FELURI CULINARE</a>
    <div class="dropdown-content">
  
        <label class="container">
           <?php
                    if(isset($_SESSION["salate"])){
                        $afisare7 = $_SESSION["salate"];
                        echo "$afisare7";
                    } else echo "<input type=\"checkbox\" name=\"salate\" value=\"salate\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Salate";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

  <label class="container">
     <?php
                    if(isset($_SESSION["supe"])){
                        $afisare8 = $_SESSION["supe"];
                        echo "$afisare8";
                    } else echo "<input type=\"checkbox\" name=\"supe\" value=\"supe\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Supe";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["feluriprincipale"])){
                        $afisare9 = $_SESSION["feluriprincipale"];
                        echo "$afisare9";
                    } else echo "<input type=\"checkbox\" name=\"feluriprincipale\" value=\"feluriprincipale\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Feluri principale";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
     <?php
                    if(isset($_SESSION["patiserie"])){
                        $afisare10 = $_SESSION["patiserie"];
                        echo "$afisare10";
                    } else echo "<input type=\"checkbox\" name=\"patiserie\" value=\"patiserie\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Patiserie";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["prajituri"])){
                        $afisare11 = $_SESSION["prajituri"];
                        echo "$afisare11";
                    } else echo "<input type=\"checkbox\" name=\"prajituri\" value=\"prajituri\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Prajituri";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["torturi"])){
                        $afisare12 = $_SESSION["torturi"];
                        echo "$afisare12";
                    } else echo "<input type=\"checkbox\" name=\"torturi\" value=\"torturi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Torturi";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>
  <br>

    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">RETETE DIETETICE</a>
    <div class="dropdown-content">
       
        <label class="container">
          <?php
                    if(isset($_SESSION["vegetarian"])){
                        $afisare13 = $_SESSION["vegetarian"];
                        echo "$afisare13";
                    } else echo "<input type=\"checkbox\" name=\"vegetarian\" value=\"vegetarian\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vegetarian";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

  

  <label class="container">
      <?php
                    if(isset($_SESSION["dietadukan"])){
                        $afisare14 = $_SESSION["dietadukan"];
                        echo "$afisare14";
                    } else echo "<input type=\"checkbox\" name=\"dietadukan\" value=\"dietadukan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Dieta dukan";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["retetedepost"])){
                        $afisare15 = $_SESSION["retetedepost"];
                        echo "$afisare15";
                    } else echo "<input type=\"checkbox\" name=\"retetedepost\" value=\"retetedepost\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Retete de post";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["retetelowcarb"])){
                        $afisare16 = $_SESSION["retetelowcarb"];
                        echo "$afisare16";
                    } else echo "<input type=\"checkbox\" name=\"retetelowcarb\" value=\"retetelowcarb\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Retete LowCarb";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["vegan"])){
                        $afisare17 = $_SESSION["vegan"];
                        echo "$afisare17";
                    } else echo "<input type=\"checkbox\" name=\"vegan\" value=\"vegan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vegan";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>
  <br>
    </div>
  </li>


  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">SPECIFIC CUISINE</a>
    <div class="dropdown-content1">
       
        <label class="container">
          <?php
                    if(isset($_SESSION["america"])){
                        $afisare18 = $_SESSION["america"];
                        echo "$afisare18";
                    } else echo "<input type=\"checkbox\" name=\"america\" value=\"america\" onchange=\"this.form.submit()\"  id=\"myCheck\" >America";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["italia"])){
                        $afisare19 = $_SESSION["italia"];
                        echo "$afisare19";
                    } else echo "<input type=\"checkbox\" name=\"italia\" value=\"italia\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Italia";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["asia"])){
                        $afisare20 = $_SESSION["asia"];
                        echo "$afisare20";
                    } else echo "<input type=\"checkbox\" name=\"asia\" value=\"asia\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Asia";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>


  <label class="container">
     <?php
                    if(isset($_SESSION["india"])){
                        $afisare21 = $_SESSION["india"];
                        echo "$afisare21";
                    } else echo "<input type=\"checkbox\" name=\"india\" value=\"india\" onchange=\"this.form.submit()\"  id=\"myCheck\" >India";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["franta"])){
                        $afisare22 = $_SESSION["franta"];
                        echo "$afisare22";
                    } else echo "<input type=\"checkbox\" name=\"franta\" value=\"franta\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Franta";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

 <label class="container">
  <?php
                    if(isset($_SESSION["spania"])){
                        $afisare23 = $_SESSION["spania"];
                        echo "$afisare23";
                    } else echo "<input type=\"checkbox\" name=\"spania\" value=\"spania\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Spania";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <br>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">SĂRBĂTORI</a>
    <div class="dropdown-content">
        <label class="container">
           <?php
                    if(isset($_SESSION["paste"])){
                        $afisare24 = $_SESSION["paste"];
                        echo "$afisare24";
                    } else echo "<input type=\"checkbox\" name=\"paste\" value=\"paste\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Paste";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["craciun"])){
                        $afisare25 = $_SESSION["craciun"];
                        echo "$afisare25";
                    } else echo "<input type=\"checkbox\" name=\"craciun\" value=\"craciun\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Craciun";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["revelion"])){
                        $afisare26 = $_SESSION["revelion"];
                        echo "$afisare26";
                    } else echo "<input type=\"checkbox\" name=\"revelion\" value=\"revelion\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Revelion";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <label class="container">
    <?php
                    if(isset($_SESSION["traditional-romanesc"])){
                        $afisare27 = $_SESSION["traditional-romanesc"];
                        echo "$afisare27";
                    } else echo "<input type=\"checkbox\" name=\"traditional-romanesc\" value=\"traditional-romanesc\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Traditional romanesc";
                ?>
  <br>
  <span class="checkmark"></span>
  </label>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">INGREDIENTE</a>

<div class="dropdown-contentASCUNS" id="dropdown-contentASCUNS">
       
    <label class="containerIIIII" id="containerBtn">
    <span id="btn" class="btn" onclick="closeNav()">x</span>
    </label>

    <form method="POST" action="checksearch.php">
      <input type="text" name="ingredientAdaugat" class="Introducere" placeholder="Introdu ingredient" autocomplete="off">
      <button class="butonIntroducere" type="submit" id="butonIntroducere">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg>
      </button>

      <input type="text" name="ingredientEliminat" class="Elimina" placeholder="Elimina ingredient" autocomplete="off">
      <button class="butonIntroducere2" type="submit" id="butonIntroducere2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-12v-2h12v2z"/></svg>
      </button>
    </form>


    

        <label class="containerI" id="containerINIT1">
           <?php
                    if(isset($_SESSION["rata"])){
                        $afisare38 = $_SESSION["rata"];
                        echo "$afisare38";
                    } else echo "<input type=\"checkbox\" name=\"rata\" value=\"rata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Rata";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>


       <label class="containerI" id="containerINIT2">
          <?php
                    if(isset($_SESSION["oua"])){
                        $afisare39 = $_SESSION["oua"];
                        echo "$afisare39";
                    } else echo "<input type=\"checkbox\" name=\"oua\" value=\"oua\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Oua";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT3">
          <?php
                    if(isset($_SESSION["mazare"])){
                        $afisare40 = $_SESSION["mazare"];
                        echo "$afisare40";
                    } else echo "<input type=\"checkbox\" name=\"mazare\" value=\"mazare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Mazare";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

      <label class="containerI" id="containerINIT4">
          <?php
                    if(isset($_SESSION["broccoli"])){
                        $afisare41 = $_SESSION["broccoli"];
                        echo "$afisare41";
                    } else echo "<input type=\"checkbox\" name=\"broccoli\" value=\"broccoli\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Broccoli";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT5">
          <?php
                    if(isset($_SESSION["cartofi"])){
                        $afisare42 = $_SESSION["cartofi"];
                        echo "$afisare42";
                    } else echo "<input type=\"checkbox\" name=\"cartofi\" value=\"cartofi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cartofi";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT6">
          <?php
                    if(isset($_SESSION["morcovi"])){
                        $afisare43 = $_SESSION["morcovi"];
                        echo "$afisare43";
                    } else echo "<input type=\"checkbox\" name=\"morcovi\" value=\"morcovi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Morcovi";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT7">
          <?php
                    if(isset($_SESSION["rosii"])){
                        $afisare44 = $_SESSION["rosii"];
                        echo "$afisare44";
                    } else echo "<input type=\"checkbox\" name=\"rosii\" value=\"rosii\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Rosii";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>


      <label class="containerI" id="containerINIT8">
          <?php
                  
                    if(isset($_SESSION["lactate"])){
                        $afisare45 = $_SESSION["lactate"];
                        echo "$afisare45";
                    } else echo "<input type=\"checkbox\" name=\"lactate\" value=\"lactate\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lactate";
                ?>
              
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT9">
          <?php
                    
              if(isset($_SESSION["lapte"])){
                        $afisare46 = $_SESSION["lapte"];
                        echo "$afisare46";
                    } else echo "<input type=\"checkbox\" name=\"lapte\" value=\"lapte\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lapte";
                ?>
       
       <span class="checkmarkI"></span>
      <br>
     </label>

     <label class="containerI" id="containerINIT10">
        
       
       <span class="checkmarkI" style="visibility: hidden;"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT11">
          <?php
            if(isset($_SESSION["orez"])){
                        $afisare48 = $_SESSION["orez"];
                        echo "$afisare48";
                    } else echo "<input type=\"checkbox\" name=\"orez\" value=\"orez\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Orez";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>


      <label class="containerII" id="containerINIT12">
          <?php
                    if(isset($_SESSION["faina"])){
                        $afisare49 = $_SESSION["faina"];
                        echo "$afisare49";
                    } else echo "<input type=\"checkbox\" name=\"faina\" value=\"faina\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Faina";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>


     <label class="containerII" id="containerINIT13">
          <?php
                    if(isset($_SESSION["ceapa"])){
                        $afisare50 = $_SESSION["ceapa"];
                        echo "$afisare50";
                    } else echo "<input type=\"checkbox\" name=\"ceapa\" value=\"ceapa\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ceapa";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT14">
          <?php
                    if(isset($_SESSION["ciocolata"])){
                        $afisare52 = $_SESSION["ciocolata"];
                        echo "$afisare52";
                    } else echo "<input type=\"checkbox\" name=\"ciocolata\" value=\"ciocolata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ciocolata";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>


     <label class="containerII" id="containerINIT15">
          <?php
                    if(isset($_SESSION["cacao"])){
                        $afisare52 = $_SESSION["cacao"];
                        echo "$afisare52";
                    } else echo "<input type=\"checkbox\" name=\"cacao\" value=\"cacao\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cacao";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT16">
          <?php
                    if(isset($_SESSION["zahar"])){
                        $afisare53 = $_SESSION["zahar"];
                        echo "$afisare53";
                    } else echo "<input type=\"checkbox\" name=\"zahar\" value=\"zahar\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Zahar";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>


     <label class="containerII" id="containerINIT17">
          <?php
                    if(isset($_SESSION["sare"])){
                        $afisare54 = $_SESSION["sare"];
                        echo "$afisare54";
                    } else echo "<input type=\"checkbox\" name=\"sare\" value=\"sare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Sare";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT18">
          <?php
                    if(isset($_SESSION["piper"])){
                        $afisare55 = $_SESSION["piper"];
                        echo "$afisare55";
                    } else echo "<input type=\"checkbox\" name=\"piper\" value=\"piper\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Piper";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT19">
          <?php
                    if(isset($_SESSION["ulei"])){
                        $afisare56 = $_SESSION["ulei"];
                        echo "$afisare56";
                    } else echo "<input type=\"checkbox\" name=\"ulei\" value=\"ulei\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ulei";
                ?>
       
       <span class="checkmarkII"></span>
      <br>
     </label>

     <label class="containerII" id="containerINIT20">
         
       <span class="checkmarkII" style="visibility: hidden;"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT21">
          <?php
                    if(isset($_SESSION["otet"])){
                        $afisare57 = $_SESSION["otet"];
                        echo "$afisare57";
                    } else echo "<input type=\"checkbox\" name=\"otet\" value=\"otet\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Otet";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>

      <label class="containerIII" id="containerINIT22">
          <?php
                    if(isset($_SESSION["lamaie"])){
                        $afisare58 = $_SESSION["lamaie"];
                        echo "$afisare58";
                    } else echo "<input type=\"checkbox\" name=\"lamaie\" value=\"lamaie\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lamaie";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT23">
          <?php
                    if(isset($_SESSION["mar"])){
                        $afisare59 = $_SESSION["mar"];
                        echo "$afisare59";
                    } else echo "<input type=\"checkbox\" name=\"mar\" value=\"mar\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Mar";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT24">
          <?php
                    if(isset($_SESSION["portocala"])){
                        $afisare60 = $_SESSION["portocala"];
                        echo "$afisare60";
                    } else echo "<input type=\"checkbox\" name=\"portocala\" value=\"portocala\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Portocala";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT25">
          <?php
                    if(isset($_SESSION["fructe"])){
                        $afisare61 = $_SESSION["fructe"];
                        echo "$afisare61";
                    } else echo "<input type=\"checkbox\" name=\"fructe\" value=\"fructe\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Fructe";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT26">
          <?php
                    if(isset($_SESSION["avocado"])){
                        $afisare62 = $_SESSION["avocado"];
                        echo "$afisare62";
                    } else echo "<input type=\"checkbox\" name=\"avocado\" value=\"avocado\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Avocado";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT27">
          <?php
                    if(isset($_SESSION["vin"])){
                        $afisare63 = $_SESSION["vin"];
                        echo "$afisare63";
                    } else echo "<input type=\"checkbox\" name=\"vin\" value=\"vin\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vin";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>

     <label class="containerIII" id="containerINIT28">
          <?php
                    if(isset($_SESSION["usturoi"])){
                        $afisare64 = $_SESSION["usturoi"];
                        echo "$afisare64";
                    } else echo "<input type=\"checkbox\" name=\"usturoi\" value=\"usturoi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Usturoi";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT29">
          <?php
                    if(isset($_SESSION["ciuperci"])){
                        $afisare65 = $_SESSION["ciuperci"];
                        echo "$afisare65";
                    } else echo "<input type=\"checkbox\" name=\"ciuperci\" value=\"ciuperci\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ciuperci";
                ?>
       
       <span class="checkmarkIII"></span>
      <br>
     </label>


     <label class="containerIII" id="containerINIT30">
          <
       
       <span class="checkmarkIII" style="visibility: hidden;"></span>
      <br>
     </label>


     <label class="containerIIII" id="containerINIT31">
          <?php
                    if(isset($_SESSION["ardei"])){
                        $afisare67 = $_SESSION["ardei"];
                        echo "$afisare67";
                    } else echo "<input type=\"checkbox\" name=\"ardei\" value=\"ardei\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ardei";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


     <label class="containerIIII" id="containerINIT32">
          <?php
                    if(isset($_SESSION["sfecla"])){
                        $afisare68 = $_SESSION["sfecla"];
                        echo "$afisare68";
                    } else echo "<input type=\"checkbox\" name=\"sfecla\" value=\"sfecla\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Sfecla";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


      <label class="containerIIII" id="containerINIT33">
          <?php
                    if(isset($_SESSION["varza"])){
                        $afisare69 = $_SESSION["varza"];
                        echo "$afisare69";
                    } else echo "<input type=\"checkbox\" name=\"varza\" value=\"varza\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Varza";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>

      <label class="containerIIII" id="containerINIT34">
          <?php
                    if(isset($_SESSION["salata"])){
                        $afisare70 = $_SESSION["salata"];
                        echo "$afisare70";
                    } else echo "<input type=\"checkbox\" name=\"salata\" value=\"salata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Salata";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>

      <label class="containerIIII" id="containerINIT35">
          <?php
                    if(isset($_SESSION["gem"])){
                        $afisare71 = $_SESSION["gem"];
                        echo "$afisare71";
                    } else echo "<input type=\"checkbox\" name=\"gem\" value=\"gem\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Gem";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


      <label class="containerIIII" id="containerINIT36">
          <?php
                    if(isset($_SESSION["nuci"])){
                        $afisare72 = $_SESSION["nuci"];
                        echo "$afisare72";
                    } else echo "<input type=\"checkbox\" name=\"nuci\" value=\"nuci\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Nuci";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>

      <label class="containerIIII" id="containerINIT37">
          <?php
                    if(isset($_SESSION["branza"])){
                        $afisare73 = $_SESSION["branza"];
                        echo "$afisare73";
                    } else echo "<input type=\"checkbox\" name=\"branza\" value=\"branza\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Branza";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


      <label class="containerIIII" id="containerINIT38">
         <?php
                    if(isset($_SESSION["castravete"])){
                        $afisare74 = $_SESSION["castravete"];
                        echo "$afisare74";
                    } else echo "<input type=\"checkbox\" name=\"castravete\" value=\"castravete\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Castravete";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


      <label class="containerIIII" id="containerINIT39">
          <?php
                    if(isset($_SESSION["unt"])){
                        $afisare75 = $_SESSION["unt"];
                        echo "$afisare75";
                    } else echo "<input type=\"checkbox\" name=\"unt\" value=\"unt\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Unt";
                ?>
       
       <span class="checkmarkIIII"></span>
      <br>
     </label>


      <label class="containerIIII" id="containerINIT40">
        
       <span class="checkmarkIIII" style="visibility: hidden;"></span>
      <br>
     </label>

     
    

   </div>

    <div class="dropdown-content" id="dropdown-contentASCUNSinit">
       
        <label class="container">
           <?php
                    if(isset($_SESSION["pui"])){
                        $afisare28 = $_SESSION["pui"];
                        echo "$afisare28";
                    } else echo "<input type=\"checkbox\" name=\"pui\" value=\"pui\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Pui";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>


       <label class="container">
          <?php
                    if(isset($_SESSION["porc"])){
                        $afisare29 = $_SESSION["porc"];
                        echo "$afisare29";
                    } else echo "<input type=\"checkbox\" name=\"porc\" value=\"porc\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Porc";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

     <label class="container">
          <?php
                    if(isset($_SESSION["vita"])){
                        $afisare30 = $_SESSION["vita"];
                        echo "$afisare30";
                    } else echo "<input type=\"checkbox\" name=\"vita\" value=\"vita\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vita";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

      <label class="container">
          <?php
                    if(isset($_SESSION["peste"])){
                        $afisare31 = $_SESSION["peste"];
                        echo "$afisare31";
                    } else echo "<input type=\"checkbox\" name=\"peste\" value=\"peste\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Peste";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

     <label class="container">
          <?php
                    if(isset($_SESSION["curcan"])){
                        $afisare32 = $_SESSION["curcan"];
                        echo "$afisare32";
                    } else echo "<input type=\"checkbox\" name=\"curcan\" value=\"curcan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Curcan";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

    
    


     <span style="font-size:15px;cursor:pointer;padding-left: 32%;position: absolute; color: #787878;width: 50%;" onclick="openNav()">Mai multe</span>

    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">TIMP DE PREPARARE</a>
    <div class="dropdown-content">

       <label class="container">
           <?php
                    if(isset($_SESSION["timp15"])){
                        $afisare77 = $_SESSION["timp15"];
                        echo "$afisare77";
                    } else echo "<input type=\"checkbox\" name=\"timp15\" value=\"timp15\" onchange=\"this.form.submit()\"  id=\"myCheck\" > <15 min";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>


      <label class="container">
           <?php
                    if(isset($_SESSION["timp15-30"])){
                        $afisare78 = $_SESSION["timp15-30"];
                        echo "$afisare78";
                    } else echo "<input type=\"checkbox\" name=\"timp15-30\" value=\"timp15-30\" onchange=\"this.form.submit()\"  id=\"myCheck\" > 15-30 min";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>

     <label class="container">
           <?php
                    if(isset($_SESSION["timp30-60"])){
                        $afisare79 = $_SESSION["timp30-60"];
                        echo "$afisare79";
                    } else echo "<input type=\"checkbox\" name=\"timp30-60\" value=\"timp30-60\" onchange=\"this.form.submit()\"  id=\"myCheck\" > 30-60 min";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>


      <label class="container">
           <?php
                    if(isset($_SESSION["timp60"])){
                        $afisare80 = $_SESSION["timp60"];
                        echo "$afisare80";
                    } else echo "<input type=\"checkbox\" name=\"timp60\" value=\"timp60\" onchange=\"this.form.submit()\"  id=\"myCheck\" > >60 min";
                ?>
       
       <span class="checkmark"></span>
      <br>
     </label>



    </div>
  </li>

    </div>
  </li>

</ul>
</form>
</div>






</body>

<script>
 
 $(document).ready(function()
{

    var x=$("input[type=checkbox]").length;

    $('input[type=checkbox]').on('change', function(i)
      {
        if($(this).is(':checked'))
      {
          x-=1;
          
        if(x==0)
        {
        var val = [];
      
      $(':checkbox:checked').each(function(i)
      {
        val[i] = $(this).val();
      });
        
      var jsonString = JSON.stringify(val);
        
        $.ajax(
        {
          type: "POST",
         
          url: "checksearch.php",
        data: {checkbox_value:jsonString},
        cache: false,
        success: function(data)
      {
      
      }
    });
    }
    }
else
{
x+=1;
}
});
});
</script>

<script>
function openNav() {
  document.getElementById("dropdown-contentASCUNS").style.width = "80%";

  document.getElementById("dropdown-contentASCUNSinit").style.visibility= "hidden";
  document.getElementById("containerINIT1").style.visibility="visible";
  document.getElementById("containerINIT2").style.visibility="visible";
  document.getElementById("containerINIT3").style.visibility="visible";
  document.getElementById("containerINIT4").style.visibility="visible";
  document.getElementById("containerINIT5").style.visibility="visible";
  document.getElementById("containerINIT6").style.visibility="visible";
  document.getElementById("containerINIT7").style.visibility="visible";
  document.getElementById("containerINIT8").style.visibility="visible";
  document.getElementById("containerINIT9").style.visibility="visible";
  document.getElementById("containerINIT10").style.visibility="visible";
  document.getElementById("containerINIT11").style.visibility="visible";
  document.getElementById("containerINIT12").style.visibility="visible";
  document.getElementById("containerINIT13").style.visibility="visible";
  document.getElementById("containerINIT14").style.visibility="visible";
  document.getElementById("containerINIT15").style.visibility="visible";
  document.getElementById("containerINIT16").style.visibility="visible";
  document.getElementById("containerINIT17").style.visibility="visible";
  document.getElementById("containerINIT18").style.visibility="visible";
  document.getElementById("containerINIT19").style.visibility="visible";
  document.getElementById("containerINIT20").style.visibility="visible";
  document.getElementById("containerINIT21").style.visibility="visible";
  document.getElementById("containerINIT22").style.visibility="visible";
  document.getElementById("containerINIT23").style.visibility="visible";
  document.getElementById("containerINIT24").style.visibility="visible";
  document.getElementById("containerINIT25").style.visibility="visible";
  document.getElementById("containerINIT26").style.visibility="visible";
  document.getElementById("containerINIT27").style.visibility="visible";
  document.getElementById("containerINIT28").style.visibility="visible";
  document.getElementById("containerINIT29").style.visibility="visible";
  document.getElementById("containerINIT30").style.visibility="visible";
  document.getElementById("containerINIT31").style.visibility="visible";
  document.getElementById("containerINIT32").style.visibility="visible";
  document.getElementById("containerINIT33").style.visibility="visible";
  document.getElementById("containerINIT34").style.visibility="visible";
  document.getElementById("containerINIT35").style.visibility="visible";
  document.getElementById("containerINIT36").style.visibility="visible";
  document.getElementById("containerINIT37").style.visibility="visible";
  document.getElementById("containerINIT38").style.visibility="visible";
  document.getElementById("containerINIT39").style.visibility="visible";
  document.getElementById("containerINIT40").style.visibility="visible";
  document.getElementById("containerBtn").style.visibility="visible";
  document.getElementById("butonIntroducere").style.visibility="visible";
  document.getElementById("butonIntroducere2").style.visibility="visible";
  

}


</script>



<script>
  function closeNav() {
  document.getElementById("dropdown-contentASCUNS").style.width = "0";
   document.getElementById("dropdown-contentASCUNSinit").style.visibility= "visible";
   document.getElementById("containerINIT1").style.visibility="hidden";
  document.getElementById("containerINIT2").style.visibility="hidden";
  document.getElementById("containerINIT3").style.visibility="hidden";
  document.getElementById("containerINIT4").style.visibility="hidden";
  document.getElementById("containerINIT5").style.visibility="hidden";
  document.getElementById("containerINIT6").style.visibility="hidden";
  document.getElementById("containerINIT7").style.visibility="hidden";
  document.getElementById("containerINIT8").style.visibility="hidden";
  document.getElementById("containerINIT9").style.visibility="hidden";
  document.getElementById("containerINIT10").style.visibility="hidden";
  document.getElementById("containerINIT11").style.visibility="hidden";
  document.getElementById("containerINIT12").style.visibility="hidden";
  document.getElementById("containerINIT13").style.visibility="hidden";
  document.getElementById("containerINIT14").style.visibility="hidden";
  document.getElementById("containerINIT15").style.visibility="hidden";
  document.getElementById("containerINIT16").style.visibility="hidden";
  document.getElementById("containerINIT17").style.visibility="hidden";
  document.getElementById("containerINIT18").style.visibility="hidden";
  document.getElementById("containerINIT19").style.visibility="hidden";
  document.getElementById("containerINIT20").style.visibility="hidden";
  document.getElementById("containerINIT21").style.visibility="hidden";
  document.getElementById("containerINIT22").style.visibility="hidden";
  document.getElementById("containerINIT23").style.visibility="hidden";
  document.getElementById("containerINIT24").style.visibility="hidden";
  document.getElementById("containerINIT25").style.visibility="hidden";
  document.getElementById("containerINIT26").style.visibility="hidden";
  document.getElementById("containerINIT27").style.visibility="hidden";
  document.getElementById("containerINIT28").style.visibility="hidden";
  document.getElementById("containerINIT29").style.visibility="hidden";
  document.getElementById("containerINIT30").style.visibility="hidden";
  document.getElementById("containerINIT31").style.visibility="hidden";
  document.getElementById("containerINIT32").style.visibility="hidden";
  document.getElementById("containerINIT33").style.visibility="hidden";
  document.getElementById("containerINIT34").style.visibility="hidden";
  document.getElementById("containerINIT35").style.visibility="hidden";
  document.getElementById("containerINIT36").style.visibility="hidden";
  document.getElementById("containerINIT37").style.visibility="hidden";
  document.getElementById("containerINIT38").style.visibility="hidden";
  document.getElementById("containerINIT39").style.visibility="hidden";
  document.getElementById("containerINIT40").style.visibility="hidden";
  document.getElementById("containerBtn").style.visibility="hidden";
  document.getElementById("butonIntroducere").style.visibility="hidden";
  document.getElementById("butonIntroducere2").style.visibility="hidden";
}
</script>




</html>

