<?php
	session_start();
	$afisare="";
	

	$cautare=$_POST['cautaReteta2'];
	
	$cautare=stripcslashes($cautare);
	echo $cautare;

	$db=mysqli_connect("localhost","root","","smartfood");

	if(!$db){
		die("Mort". mysqli_connect_error());
	}
	
	$result=mysqli_query($db,"select * from retete where Denumire like '%$cautare%'") or die("Fail".mysql_errno());
	$contor=0;

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
			$_SESSION["afisare"]=$afisare2;
			header('Location: cautare.php');
		}
		else
			if($contor==1)
		{
			$afisare2="<h5>{$contor} rezultat<h5>".$afisare;
			$_SESSION["afisare"]=$afisare2;
			header('Location: cautare.php');
		}else{
			$afisare2="<h5>Nu s-a gasit nici o reteta<h5>";
			$_SESSION["afisare"]=$afisare2;
			header('Location: cautare.php');	
		}
		
?>