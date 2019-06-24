<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cauta o reteta</title>
	<link rel="stylesheet" type="text/css" href="style4a.css">
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
                      if(isset($_SESSION['CAUTAREsimpla']))
                      {
                        $cautare=stripcslashes($_SESSION['CAUTAREsimpla']);

  $db=mysqli_connect("localhost","root","","smartfood");

  if(!$db){
    die("Mort". mysqli_connect_error());
  }
  
  $result=mysqli_query($db,"select * from retete where Denumire like '%$cautare%'") or die("Fail".mysql_errno());
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
                                      
                                  </li>";
  }

  if($contor>1)
    {
      $afisare2="<h5>{$contor} rezultate<h5>".$afisare;
      echo $afisare2;
    }
    else
      if($contor==1)
    {
      $afisare2="<h5>{$contor} rezultat<h5>".$afisare;
      echo $afisare2;
    }
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




</body>
</html>


<?php
    unset($_SESSION["afisare"]);
?>