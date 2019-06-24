<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Preferinte</title>
	<link rel="stylesheet" type="text/css" href="stylepreferinte.css">
</head>
<body>

	<h1 class="container1">Selecteaza preferintele tale</h1>

<form action="adaugarePreferinte.php" method="POST">
<div class="container">
<ul>
  <li><input type="checkbox" id="cb1" name="preferintaDesert" />
    <label for="cb1"><div class="container2">Desert</div><img src="poze/preferinta1.jpg" /></label>
    
  </li>

  <li><input type="checkbox" id="cb2"  name="preferintaFeluriPrincipale"/>
    <label for="cb2"><div class="container3">Feluri principale</div><img src="poze/preferinta2.jpg" /></label>
  </li>

  <li><input type="checkbox" id="cb3" name="preferintaGatireRapida" />
    <label for="cb3"><div class="container4">Gatire rapida</div><img src="poze/preferinta3.jpg" /></label>
  </li>
  <li><input type="checkbox" id="cb4" name="preferintaFructe" name="preferintaDesert"" />
    <label for="cb4"><div class="container5">Fructe</div><img src="poze/preferinta4.jpg" /></label>
  </li>

  <li><input type="checkbox" id="cb5" name="preferintaLegume"/>
    <label for="cb5"><div class="container6">Legume</div><img src="poze/preferinta5.jpg" /></label>
   
  </li>

  <li><input type="checkbox" id="cb6" name="preferintaVegan"/>
    <label for="cb6"><div class="container7">Vegan</div><img src="poze/preferinta6.jpg" /></label>
    
  </li>

  <li><input type="checkbox" id="cb7" name="preferintaMicDejun" />
      <label for="cb7"><div class="container8">Mic dejun</div><img src="poze/preferinta7.jpg" /></label>
      
    </li>
  
    <li><input type="checkbox" id="cb8" name="preferintaCina"" />
    <label for="cb8"><div class="container9">Cina</div><img src="poze/preferinta9.jpg" /></label>
    
  </li>



</ul>
</div>
<button type="submit" value="Submit" class="buton">Intra in cont

</button>
</form>

</body>
</html>