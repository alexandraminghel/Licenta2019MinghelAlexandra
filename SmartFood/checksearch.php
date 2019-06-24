<?php
	session_start();
	$afisare="";
	$afisares="";

	$cautare="";
	$db=mysqli_connect("localhost","root","","smartfood");
	if(!$db){
		die("Mort". mysqli_connect_error());
	}
	$setat=0;
	$k1=0;
	$k2=0;
	$k3=0;
	$k4=0;
	$k5=0;
	$k6=0;
	$k7=0;
	
	$k71=0;
	$k72=0;
	$k73=0;

	$afisariPagina=12;


	
	
	

	if(isset($_POST['micdejun']) || isset($_POST['pranz']) || isset($_POST['gustare']) || isset($_POST['aperitiv']) ||isset($_POST['cina']) || isset($_POST['desert']) || isset($_POST['salate']) || isset($_POST['supe']) || isset($_POST['feluriprincipale']) || isset($_POST['patiserie']) || isset($_POST['prajituri']) || isset($_POST['torturi']) || isset($_POST['vegetarian']) || isset($_POST['dietadukan']) || isset($_POST['retetedepost']) ||isset($_POST['retetelowcarb']) || isset($_POST['vegan']) || isset($_POST['america']) || isset($_POST['italia']) ||isset($_POST['asia']) ||isset($_POST['india']) ||isset($_POST['franta']) ||isset($_POST['spania']) || isset($_POST['paste']) ||isset($_POST['craciun']) ||isset($_POST['revelion']) || isset($_POST['traditional-romanesc']) ||isset($_POST['pui']) ||isset($_POST['porc']) || isset($_POST['vita']) || isset($_POST['peste']) ||isset($_POST['curcan']) ||isset($_POST['rata']) ||isset($_POST['oua']) ||isset($_POST['mazare']) || isset($_POST['broccoli']) || isset($_POST['cartofi']) || isset($_POST['morcovi']) ||isset($_POST['rosii']) || isset($_POST['lapte']) ||isset($_POST['branza']) ||isset($_POST['lactate']) ||isset($_POST['orez']) || isset($_POST['faina']) ||isset($_POST['ceapa']) ||isset($_POST['ciocolata']) ||isset($_POST['cacao']) ||isset($_POST['zahar']) ||isset($_POST['sare']) ||isset($_POST['piper']) ||isset($_POST['ulei']) ||isset($_POST['castravete']) ||isset($_POST['otet']) ||isset($_POST['lamaie']) ||isset($_POST['mere']) ||isset($_POST['mar']) ||isset($_POST['portocala'])  ||isset($_POST['fructe']) ||isset($_POST['avocado']) || isset($_POST['vin']) ||isset($_POST['usturoi']) ||isset($_POST['ciuperci']) ||isset($_POST['unt']) || isset($_POST['ardei']) ||isset($_POST['sfecla']) || isset($_POST['varza']) ||isset($_POST['salata']) || isset($_POST['gem']) || isset($_POST['nuci']) ||isset($_POST['timp15']) || isset($_POST['timp15-30']) ||isset($_POST['timp30-60']) ||isset($_POST['timp60']) || isset($_POST['ingredientAdaugat']) ||isset($_POST['ingredientEliminat']) )
	{
		$cautare="select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete where";
		$setat=1;
	}

	


	if (isset($_POST['micdejun'])) {
		
		

		$_SESSION["micdejun"]="<input type=\"checkbox\" name=\"micdejun\" value=\"micdejun\" onchange=\"this.form.submit()\"  id=\"micdejun\" checked >Mic dejun";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"micdejunI\" name=\"micdejunI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mic dejun</label>
  </div>";
  		$kafisare++;


		if($k1==0)
		{
		$cautare=$cautare." (micdejun=1";
		$k1=1;
		
		}
		
		
	}

	
	
	if (isset($_POST['pranz'])) {

		
		$_SESSION["pranz"]="<input type=\"checkbox\" name=\"pranz\" value=\"pranz\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Pranz" ;

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pranzI\" name=\"pranzI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Pranz</label>
  </div>";
  		$kafisare++;
  		
		
		if($k1==0)
		{
		$cautare=$cautare." (pranz=1";
		$k1++;
		
		}
		else{
			$cautare=$cautare." or pranz=1";
			$k1=1;
		}
		
	}


	




	if (isset($_POST['gustare'])) {
		$_SESSION["gustare"]="<input type=\"checkbox\" name=\"gustare\" value=\"gustare\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Gustare" ;
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"gustareI\" name=\"gustareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Gustare</label>
  </div>";
  		$kafisare++;

		if($k1==0)
		{
		$cautare=$cautare." (gustare=1";
		$k1=1;
		
		}
		else{
			$cautare=$cautare." or gustare=1";
			$k1=1;
		}
		
	}

	

	if (isset($_POST['aperitiv'])) {
		$_SESSION["aperitiv"]="<input type=\"checkbox\" name=\"aperitiv\" value=\"aperitiv\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Aperitiv" ;
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"aperitivI\" name=\"aperitivI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Aperitiv</label>
  </div>";
  		$kafisare++;

		if($k1==0)
		{
		$cautare=$cautare." (aperitiv=1";
		$k1++;
		
		}
		else{
			$cautare=$cautare." or aperitiv=1";
			$k1++;
		}
		
	}

	

	if (isset($_POST['cina'])) {
		$_SESSION["cina"]="<input type=\"checkbox\" name=\"cina\" value=\"cina\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Cina" ;
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cinaI\" name=\"cinaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cina</label>
  </div>";

 		 $kafisare++;

		if($k1==0)
		{
		$cautare=$cautare." (cina=1";
		$k1++;
		
		}
		else{
			$cautare=$cautare." or cina=1";
			$k1++;
		}
		
	}

	

	if (isset($_POST['desert'])) {
		$_SESSION["desert"]="<input type=\"checkbox\" name=\"desert\" value=\"desert\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Deser" ;

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"desertI\" name=\"desertI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Desert</label>
  </div>";

 		 $kafisare++;

		
		if($k1==0)
		{
		$cautare=$cautare." (desert=1";
		$k1++;
		
		}
		else{
			$cautare=$cautare." or desert=1";
			$k1++;
		}
		
	}

	

	if($k1!=0)
		$cautare=$cautare.")";

	if(isset($_POST['salate']))
	{
		$_SESSION["salate"]="<input type=\"checkbox\" name=\"salate\" value=\"salate\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Salate" ;
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"salateI\" name=\"salateI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Salate</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (salate=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or salate=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (salate=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or salate=1";
			$k2++;
		}
	}

	

	if(isset($_POST['supe']))
	{
		$_SESSION["supe"]="<input type=\"checkbox\" name=\"supe\" value=\"supe\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Supe" ;
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"supeI\" name=\"supeI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Supe</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (supe=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or supe=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (supe=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or supe=1";
			$k2++;
		}
	}



	if(isset($_POST['feluriprincipale']))
	{
		$_SESSION["feluriprincipale"]="<input type=\"checkbox\" name=\"feluriprincipale\" value=\"feluriprincipale\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Feluri principale" ;

		$afisares=$afisares."<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"feluriprincipaleI\" name=\"feluriprincipaleI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Feluri principale</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (feluriprincipale=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or feluriprincipale=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (feluriprincipale=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or feluriprincipale=1";
			$k2++;
		}
	}

	

	if(isset($_POST['patiserie']))
	{
		$_SESSION["patiserie"]="<input type=\"checkbox\" name=\"patiserie\" value=\"patiserie\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Patiserie" ;

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"patiserieI\" name=\"patiserieI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Patiserie</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (patiserie=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or patiserie=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (patiserie=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or patiserie=1";
			$k2++;
		}
	}

	

	if(isset($_POST['prajituri']))
	{
		$_SESSION["prajituri"]="<input type=\"checkbox\" name=\"prajituri\" value=\"prajituri\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Prajituri" ;

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"prajituriI\" name=\"prajituriI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Prajituri</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (prajituri=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or prajituri=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (prajituri=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or prajituri=1";
			$k2++;
		}
	}

	

	if(isset($_POST['torturi']))
	{
		$_SESSION["torturi"]="<input type=\"checkbox\" name=\"torturi\" value=\"torturi\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Torturi" ;

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"torturiI\" name=\"torturiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Torturi</label>
  </div>";

 		 $kafisare++;

		if($k1!=0 && $k2==0)
		{
			$cautare=$cautare." and (torturi=1";
			$k2++;
		}else if ($k1!=0 && $k2!=0)
		{
			$cautare=$cautare." or torturi=1";
		}
		if($k1==0 && $k2==0)
		{
			$cautare=$cautare." (torturi=1";
			$k2++;
		}
		else if($k1==0 && $k2!=0)
		{
			$cautare=$cautare." or torturi=1";
			$k2++;
		}
	}



	if($k2!=0)
		$cautare=$cautare.")";

	if(isset($_POST['vegetarian']))
	{
		$_SESSION["vegetarian"]="<input type=\"checkbox\" name=\"vegetarian\" value=\"vegetarian\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Vegetarian" ;
		
		$afisares=$afisares."<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"vegetarianI\" name=\"vegetarianI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vegetarian</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." (vegetarian=1";
			$k3=1;
		}

		

		if($k1!=0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." and (vegetarian=1";
			$k3=1;
		}

		

		if($k1==0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (vegetarian=1";
			$k3=1;
		}

		

		if($k1!=0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (vegetarian=1";
			$k3=1;
		}


	}



		if(isset($_POST['dietadukan']))
	{
		$_SESSION["dietadukan"]="<input type=\"checkbox\" name=\"dietadukan\" value=\"dietadukan\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Dieta Dukan" ;
		$afisares=$afisares."<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"dietadukanI\" name=\"dietadukanI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Dieta Dukan</label>
  </div>";

 		 $kafisare++;
		
		if($k1==0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or dietadukan=1";
		}

		if($k1==0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." (dietadukan=1";
			$k3=1;
		}

		if($k1!=0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or dietadukan=1";
		}

		if($k1!=0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." and (dietadukan=1";
			$k3=1;
		}

		if($k1==0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or dietadukan=1";
		}

		if($k1==0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (dietadukan=1";
			$k3=1;
		}


		if($k1!=0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or dietadukan=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (dietadukan=1";
			$k3=1;
		}

		
	}

	
	if(isset($_POST['retetedepost']))
	{
		$_SESSION["retetedepost"]="<input type=\"checkbox\" name=\"retetedepost\" value=\"retetedepost\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Retete de post" ;
		$afisares=$afisares."<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"retetedepostI\" name=\"retetedepostI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Retete de post</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or retetedepost=1";
		}

		if($k1==0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." (retetedepost=1";
			$k3=1;
		}

		if($k1!=0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or retetedepost=1";
		}

		if($k1!=0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." and (retetedepost=1";
			$k3=1;
		}

		if($k1==0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or retetedepost=1";
		}

		if($k1==0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (retetedepost=1";
			$k3=1;
		}

		if($k1!=0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or retetedepost=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (retetedepost=1";
			$k3=1;
		}

	}

	if(isset($_POST['retetelowcarb']))
	{
		$_SESSION["retetelowcarb"]="<input type=\"checkbox\" name=\"retetelowcarb\" value=\"retetelowcarb\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Retete LowCarb" ;
		$afisares=$afisares."<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"retetelowcarbI\" name=\"retetelowcarbI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Retete LowCarb</label>
  </div>";

 		 $kafisare++;
		
		if($k1==0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or retetelowcarb=1";
		}

		if($k1==0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." (retetelowcarb=1";
			$k3=1;
		}

		if($k1!=0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or retetelowcarb=1";
		}

		if($k1!=0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." and (retetelowcarb=1";
			$k3=1;
		}

		if($k1==0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or retetelowcarb=1";
		}

		if($k1==0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (retetelowcarb=1";
			$k3=1;
		}

		if($k1!=0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or retetelowcarb=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (retetelowcarb=1";
			$k3=1;
		}
		
	}



	if(isset($_POST['vegan']))
	{
		$_SESSION["vegan"]="<input type=\"checkbox\" name=\"vegan\" value=\"vegan\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Vegan" ;
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"veganI\" name=\"veganI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vegan</label>
  </div>";

 		 $kafisare++;
		
		if($k1==0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or vegan=1";
		}

		if($k1==0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." (vegan=1";
			$k3=1;
		}

		if($k1!=0 && $k2==0 && $k3==1)
		{
			$cautare=$cautare." or vegan=1";
		}

		if($k1!=0 && $k2==0 && $k3==0)
		{
			$cautare=$cautare." and (vegan=1";
			$k3=1;
		}

		if($k1==0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or vegan=1";
		}

		if($k1==0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (vegan=1";
			$k3=1;
		}

		if($k1!=0 && $k2!=0 && $k3==1)
		{
			$cautare=$cautare." or vegan=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0)
		{
			$cautare=$cautare." and (vegan=1";
			$k3=1;
		}
		
	}

	

	if($k3==1)
		$cautare=$cautare.")";

	if(isset($_POST['america']))
	{
		$_SESSION["america"]="<input type=\"checkbox\" name=\"america\" value=\"america\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >America";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"americaI\" name=\"americaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">America</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (america=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (america=1";
			$k4=1;
		}

	}


	if(isset($_POST['italia']))
	{
		$_SESSION["italia"]="<input type=\"checkbox\" name=\"italia\" value=\"italia\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Italia";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"italiaI\" name=\"italiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Italia</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (italia=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or italia=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (italia=1";
			$k4=1;
		}
	}




	if(isset($_POST['asia']))
	{
		$_SESSION["asia"]="<input type=\"checkbox\" name=\"asia\" value=\"asia\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Asia";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"asiaI\" name=\"asiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Asia</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (asia=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or asia=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (asia=1";
			$k4=1;
		}
	}

	
	if(isset($_POST['india']))
	{
		$_SESSION["india"]="<input type=\"checkbox\" name=\"india\" value=\"india\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >India";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"indiaI\" name=\"indiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">India</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (india=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or india=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (india=1";
			$k4=1;
		}
	}



	if(isset($_POST['franta']))
	{
		$_SESSION["franta"]="<input type=\"checkbox\" name=\"franta\" value=\"franta\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Franta";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"frantaI\" name=\"frantaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Franta</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (franta=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or franta=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (franta=1";
			$k4=1;
		}
	}



	if(isset($_POST['spania']))
	{
		$_SESSION["spania"]="<input type=\"checkbox\" name=\"spania\" value=\"spania\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Spania";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"spaniaI\" name=\"spaniaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Spania</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." (spania=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==1)
		{
			$cautare=$cautare." or spania=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0)
		{
			$cautare=$cautare." and (spania=1";
			$k4=1;
		}
	}

	

	if($k4==1)
		$cautare=$cautare.")";

	if(isset($_POST['paste']))
	{
		$_SESSION["paste"]="<input type=\"checkbox\" name=\"paste\" value=\"paste\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Paste";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pasteI\" name=\"pasteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Paste</label>
  </div>";

 		 $kafisare++;

 		 if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or paste=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (paste=1";
			$k5=1;
		}
	}

	
	if(isset($_POST['craciun']))
	{
		$_SESSION["craciun"]="<input type=\"checkbox\" name=\"craciun\" value=\"craciun\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Craciun";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"craciunI\" name=\"craciunI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Craciun</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or craciun=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (craciun=1";
			$k5=1;
		}
	}

	

	if(isset($_POST['revelion']))
	{
		$_SESSION["revelion"]="<input type=\"checkbox\" name=\"revelion\" value=\"revelion\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Revelion";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"revelionI\" name=\"revelionI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Revelion</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or revelion=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (revelion=1";
			$k5=1;
		}
	}

	

	if(isset($_POST['traditional-romanesc']))
	{
		$_SESSION["traditional-romanesc"]="<input type=\"checkbox\" name=\"traditional-romanesc\" value=\"traditional-romanesc\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Traditional romanesc";
		$afisares=$afisares."<div class=\"selectate2\">
    <input type=\"submit\" class=\"buton-click\" id=\"traditional-romanescI\" name=\"traditional-romanescI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Traditional romanesc</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0)
		{
			$cautare=$cautare." or tradrom=1";
			$k5=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0)
		{
			$cautare=$cautare." and (tradrom=1";
			$k5=1;
		}

	}

	

	if($k5==1)
		$cautare=$cautare.")";


	if(isset($_POST['pui']))
	{
		$_SESSION["pui"]="<input type=\"checkbox\" name=\"pui\" value=\"pui\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Pui";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"puiI\" name=\"puiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Pui</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% pui %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% pui %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% pui %'";
			$k6=1;
		}
	}

	
	
	if(isset($_POST['porc']))
	{
		$_SESSION["porc"]="<input type=\"checkbox\" name=\"porc\" value=\"porc\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Porc";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"porcI\" name=\"porcI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Porc</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% porc %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% porc %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% porc %'";
			$k6=1;
		}
	}

	if(isset($_POST['porcI']))
	{
		$_SESSION["porc"]="<input type=\"checkbox\" name=\"porc\" value=\"porc\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Porc";
	}

	if(isset($_POST['vita']))
	{
		$_SESSION["vita"]="<input type=\"checkbox\" name=\"vita\" value=\"vita\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Vita";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"vitaI\" name=\"vitaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vita</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% vita %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vita %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vita %'";
			$k6=1;
		}
	}

	

	if(isset($_POST['peste']))
	{
		$_SESSION["peste"]="<input type=\"checkbox\" name=\"peste\" value=\"peste\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Peste";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pesteI\" name=\"pesteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Peste</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (peste=1";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or peste=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (peste=1";
			$k6=1;
		}
	}


	if(isset($_POST['curcan']))
	{
		$_SESSION["curcan"]="<input type=\"checkbox\" name=\"curcan\" value=\"curcan\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Curcan";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"curcanI\" name=\"curcanI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Curcan</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% curcan %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% curcan %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% curcan %'";
			$k6=1;
		}
	}



	if(isset($_POST['rata']))
	{
		$_SESSION["rata"]="<input type=\"checkbox\" name=\"rata\" value=\"rata\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Rata";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"rataI\" name=\"rataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Rata</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% rata %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% rata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% rata %'";
			$k6=1;
		}
	}

	
	if(isset($_POST['oua']))
	{
		$_SESSION["oua"]="<input type=\"checkbox\" name=\"oua\" value=\"oua\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Oua";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ouaI\" name=\"ouaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Oua</label>
  </div>";

  		$kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% oua %' or Ingrediente like '% ou %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% oua %' or Ingrediente like '% ou %')";
			$k6=1;
		}
	}
	

	if(isset($_POST['mazare']))
	{
		$_SESSION["mazare"]="<input type=\"checkbox\" name=\"mazare\" value=\"mazare\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Mazare";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"mazareI\" name=\"mazareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mazare</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% mazare %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% mazare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% mazare %'";
			$k6=1;
		}
	}

	if(isset($_POST['broccoli']))
	{
		$_SESSION["broccoli"]="<input type=\"checkbox\" name=\"broccoli\" value=\"broccoli\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Broccoli";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"broccoliI\" name=\"broccoliI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Broccoli</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% broccoli %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% broccoli %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% broccoli %'";
			$k6=1;
		}
	}


	if(isset($_POST['cartofi']))
	{
		$_SESSION["cartofi"]="<input type=\"checkbox\" name=\"cartofi\" value=\"cartofi\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Cartofi";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cartofiI\" name=\"cartofiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cartofi</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')";
			$k6=1;
		}
	}

	if(isset($_POST['morcovi']))
	{
		$_SESSION["morcovi"]="<input type=\"checkbox\" name=\"morcovi\" value=\"morcovi\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Morcovi";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"morcoviI\" name=\"morcoviI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Morcovi</label>
  </div>";

 		 $kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')";
			$k6=1;
		}
	}

	if(isset($_POST['rosii']))
	{
		$_SESSION["rosii"]="<input type=\"checkbox\" name=\"rosii\" value=\"rosii\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Rosii";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"rosiiI\" name=\"rosiiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Rosii</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')";
			$k6=1;
		}
	}


	if(isset($_POST['lapte']))
	{
		$_SESSION["lapte"]="<input type=\"checkbox\" name=\"lapte\" value=\"lapte\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Lapte";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lapteI\" name=\"lapteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lapte</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% lapte %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% lapte %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% lapte %'";
			$k6=1;
		}
	}


	if(isset($_POST['branza']))
	{
		$_SESSION["branza"]="<input type=\"checkbox\" name=\"branza\" value=\"branza\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Branza";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"branzaI\" name=\"branzaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Branza</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% branza %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% branza %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% branza %'";
			$k6=1;
		}
	}

	if(isset($_POST['lactate']))
	{
		$_SESSION["lactate"]="<input type=\"checkbox\" name=\"lactate\" value=\"lactate\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Lactate";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lactateI\" name=\"lactateI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lactate</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (lactate=1";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or lactate=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (lactate=1";
			$k6=1;
		}
	}
	
	if(isset($_POST['orez']))
	{
		$_SESSION["orez"]="<input type=\"checkbox\" name=\"orez\" value=\"orez\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Orez";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"orezI\" name=\"orezI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Orez</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% orez %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% orez %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% orez %'";
			$k6=1;
		}
	}

	if(isset($_POST['faina']))
	{
		$_SESSION["faina"]="<input type=\"checkbox\" name=\"faina\" value=\"faina\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Faina";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"fainaI\" name=\"fainaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Faina</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% faina %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% faina %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% faina %'";
			$k6=1;
		}
	}


	if(isset($_POST['ceapa']))
	{
		$_SESSION["ceapa"]="<input type=\"checkbox\" name=\"ceapa\" value=\"ceapa\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Ceapa";
	

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ceapaI\" name=\"ceapaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ceapa</label>
  </div>";

 		 $kafisare++;

if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')";
			$k6=1;
		}
	}

	if(isset($_POST['ciocolata']))
	{
		$_SESSION["ciocolata"]="<input type=\"checkbox\" name=\"ciocolata\" value=\"ciocolata\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Ciocolata";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ciocolataI\" name=\"ciocolataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ciocolata</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')";
			$k6=1;
		}
	}

	if(isset($_POST['cacao']))
	{
		$_SESSION["cacao"]="<input type=\"checkbox\" name=\"cacao\" value=\"cacao\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Cacao";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cacaoI\" name=\"cacaoI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cacao</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% cacao %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% cacao %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% cacao %'";
			$k6=1;
		}
	}

	if(isset($_POST['zahar']))
	{
		$_SESSION["zahar"]="<input type=\"checkbox\" name=\"zahar\" value=\"zahar\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Zahar";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"zaharI\" name=\"zaharI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Zahar</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% zahar %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% zahar %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% zahar %'";
			$k6=1;
		}
	}


	if(isset($_POST['sare']))
	{
		$_SESSION["sare"]="<input type=\"checkbox\" name=\"sare\" value=\"sare\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Sare";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"sareI\" name=\"sareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Sare</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% sare %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sare %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sare %'";
			$k6=1;
		}
	}

	if(isset($_POST['piper']))
	{
		$_SESSION["piper"]="<input type=\"checkbox\" name=\"piper\" value=\"piper\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Piper";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"piperI\" name=\"piperI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Piper</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% piper %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% piper %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% piper %'";
			$k6=1;
		}
	}

	if(isset($_POST['ulei']))
	{
		$_SESSION["ulei"]="<input type=\"checkbox\" name=\"ulei\" value=\"ulei\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Ulei";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"uleiI\" name=\"uleiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ulei</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% ulei %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ulei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ulei %'";
			$k6=1;
		}
	}

	if(isset($_POST['castravete']))
	{
		$_SESSION["castravete"]="<input type=\"checkbox\" name=\"castravete\" value=\"castravete\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Castravete";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"castraveteI\" name=\"castraveteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Castravete</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')";
			$k6=1;
		}
	}

	if(isset($_POST['otet']))
	{
		$_SESSION["otet"]="<input type=\"checkbox\" name=\"otet\" value=\"otet\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Otet";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"otetI\" name=\"otetI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Otet</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% otet %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% otet %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% otet %'";
			$k6=1;
		}
	}


	if(isset($_POST['lamaie']))
	{
		$_SESSION["lamaie"]="<input type=\"checkbox\" name=\"lamaie\" value=\"lamaie\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Lamaie";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lamaieI\" name=\"lamaieI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lamaie</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')";
			$k6=1;
		}
	}

	if(isset($_POST['mar']))
	{
		$_SESSION["mar"]="<input type=\"checkbox\" name=\"mar\" value=\"mar\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Mar";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"marI\" name=\"marI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mar</label>
  </div>";

 		 $kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% mere %' or Ingrediente like '% mar %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% mere %' or Ingrediente like '% mar %')";
			$k6=1;
		}
	}

	if(isset($_POST['portocala']))
	{
		$_SESSION["portocala"]="<input type=\"checkbox\" name=\"portocala\" value=\"portocala\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Portocala";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"portocalaI\" name=\"portocalaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Portocala</label>
  </div>";

 		 $kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')";
			$k6=1;
		}
	}

	if(isset($_POST['fructe']))
	{
		$_SESSION["fructe"]="<input type=\"checkbox\" name=\"fructe\" value=\"fructe\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Fructe";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"fructeI\" name=\"fructeI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Fructe</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (fructe=1";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or fructe=1";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (fructe=1";
			$k6=1;
		}
	}

	if(isset($_POST['avocado']))
	{
		$_SESSION["avocado"]="<input type=\"checkbox\" name=\"avocado\" value=\"avocado\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Avocado";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"avocadoI\" name=\"avocadoI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Avocado</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% avocado %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% avocado %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% avocado %'";
			$k6=1;
		}
	}

	if(isset($_POST['vin']))
	{
		$_SESSION["vin"]="<input type=\"checkbox\" name=\"vin\" value=\"vin\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Vin";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"vinI\" name=\"vinI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vin</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% vin %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% vin %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% vin %'";
			$k6=1;
		}
	}


	if(isset($_POST['usturoi']))
	{
		$_SESSION["usturoi"]="<input type=\"checkbox\" name=\"usturoi\" value=\"usturoi\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Usturoi";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"usturoiI\" name=\"usturoiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Usturoi</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% usturoi %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% usturoi %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% usturoi %'";
			$k6=1;
		}
	}

	if(isset($_POST['ciuperci']))
	{
		$_SESSION["ciuperci"]="<input type=\"checkbox\" name=\"ciuperci\" value=\"ciuperci\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Ciuperci";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ciuperciI\" name=\"ciuperciI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ciuperci</label>
  </div>";

 		 $kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')";
			$k6=1;
		}
	}

	if(isset($_POST['unt']))
	{
		$_SESSION["unt"]="<input type=\"checkbox\" name=\"unt\" value=\"unt\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Unt";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"untI\" name=\"untI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Unt</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% unt %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% unt %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% unt %'";
			$k6=1;
		}
	}


	if(isset($_POST['ardei']))
	{
		$_SESSION["ardei"]="<input type=\"checkbox\" name=\"ardei\" value=\"ardei\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Ardei";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ardeiI\" name=\"ardeiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ardei</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% ardei %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% ardei %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ardei %'";
			$k6=1;
		}
	}

	if(isset($_POST['sfecla']))
	{
		$_SESSION["sfecla"]="<input type=\"checkbox\" name=\"sfecla\" value=\"sfecla\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Sfecla";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"sfeclaI\" name=\"sfeclaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Sfecla</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% sfecla %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% sfecla %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% sfecla %'";
			$k6=1;
		}
	}


	if(isset($_POST['varza']))
	{
		$_SESSION["varza"]="<input type=\"checkbox\" name=\"varza\" value=\"varza\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Varza";

		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"varzaI\" name=\"varzaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Varza</label>
  </div>";

 		 $kafisare++;
	
if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or (Ingrediente like '% verze %' or Ingrediente like '% varza %')";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and ((Ingrediente like '% verze %' or Ingrediente like '% varza %')";
			$k6=1;
		}
	}

	if(isset($_POST['salata']))
	{
		$_SESSION["salata"]="<input type=\"checkbox\" name=\"salata\" value=\"salata\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Salata";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"salataI\" name=\"salataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Salata</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% salata %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% salata %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% salata %'";
			$k6=1;
		}
	}

	if(isset($_POST['gem']))
	{
		$_SESSION["gem"]="<input type=\"checkbox\" name=\"gem\" value=\"gem\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Gem";


		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"gemI\" name=\"gemI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Gem</label>
  </div>";

 		 $kafisare++;
	

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% gem %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% gem %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% gem %'";
			$k6=1;
		}
	}

	if(isset($_POST['nuci']))
	{
		$_SESSION["nuci"]="<input type=\"checkbox\" name=\"nuci\" value=\"nuci\"  onchange=\"this.form.submit()\" id=\"myCheck\"checked >Nuci";
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"nuciI\" name=\"nuciI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Nuci</label>
  </div>";

 		 $kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% nuci %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." or Ingrediente like '% nuci %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% nuci %'";
			$k6=1;
		}
	}

	
	if(isset($_POST['ingredientAdaugat']) && strcmp($_POST['ingredientAdaugat'],"")!=0)
	{
		$_SESSION['ingredientAdaugat']=$_SESSION['ingredientAdaugat'].",".$_POST['ingredientAdaugat'];

		

	}

	$array=explode(",",$_SESSION['ingredientAdaugat']);
	for($i=1;$i<count($array); $i++)
	{
		
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"".$i."I\" name=\"".$i."I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">".ucfirst($array[$i])."</label>
  </div>";
		$kafisare++;
		
		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente like '% ".$array[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente like '% ".$array[$i]." %'";
			$k6=1;
		}
	}

	

	if(isset($_POST['ingredientEliminat']) && strcmp($_POST['ingredientEliminat'],"")!=0)
	{
		$_SESSION['ingredientEliminat']=$_SESSION['ingredientEliminat'].",".$_POST['ingredientEliminat'];

		

	}

	$array1=explode(",",$_SESSION['ingredientEliminat']);


	for($i=1;$i<count($array1); $i++)
	{
		
		
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"".$i."E\" name=\"".$i."E\" value=\"x\"  onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\" style=\"text-decoration: line-through\">".ucfirst($array1[$i])."</label>
  </div>";
		$kafisare++;

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==1)
		{
			$cautare=$cautare." and Ingrediente not like '% ".$array1[$i]." %'";
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0)
		{
			$cautare=$cautare." and (Ingrediente not like '% ".$array1[$i]." %'";
			$k6=1;
		}

	}

	if($k6==1)
		$cautare=$cautare.")";


	if(isset($_POST['timp15-30']))
		$k71=1;

	if(isset($_POST['timp50-60']))
		$k72=1;

	if(isset($_POST['timp60']))
		$k73=1;


	if(isset($_POST['timp15']))
	{
		$_SESSION["timp15"]="<input type=\"checkbox\" name=\"timp15\" value=\"timp15\" onchange=\"this.form.submit()\"  id=\"myCheck\" checked > <15 min";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp15I\" name=\"timp15I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> <15 min</label>
  </div>";

 		 $kafisare++;

 		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}



		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp<=15";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp<=15";
			$k7=1;	
		}

	}






	if(isset($_POST['timp15-30']))
	{
		
		$_SESSION["timp15-30"]="<input type=\"checkbox\" name=\"timp15-30\" value=\"timp15-30\" onchange=\"this.form.submit()\"  id=\"myCheck\" checked > 15-30 min";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp15-30I\" name=\"timp15-30I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> 15-30 min</label>
  </div>";

 		 $kafisare++;

 		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}



		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=15 and Timp<=30)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=15 and Timp<=30";
			$k7=1;	
		}
	}



	if(isset($_POST['timp30-60']))
	{
		
		$_SESSION["timp30-60"]="<input type=\"checkbox\" name=\"timp30-60\" value=\"timp30-60\" onchange=\"this.form.submit()\"  id=\"myCheck\" checked > 30-60 min";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp30-60I\" name=\"timp30-60I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> 30-60 min</label>
  </div>";

 		 $kafisare++;

 		 if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}



		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or (Timp>=30 and Timp<=60)";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>=30 and Timp<=60";
			$k7=1;	
		}

	}

	if(isset($_POST['timp60']))
	{
		$_SESSION["timp60"]="<input type=\"checkbox\" name=\"timp60\" value=\"timp60\" onchange=\"this.form.submit()\"  id=\"myCheck\" checked > >60 min";
		$afisares=$afisares."<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp60I\" name=\"timp60I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> >60 min</label>
  </div>";

 		 $kafisare++;

 		 if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}



		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3==0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}


		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6==0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5==0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4==0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3==0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2==0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1==0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==1)
		{
			$cautare=$cautare." or Timp>60";	
		}

		if($k1!=0 && $k2!=0 && $k3!=0 && $k4!=0 && $k5!=0 && $k6!=0 && $k7==0)
		{
			$cautare=$cautare." and (Timp>60";
			$k7=1;	
		}

	}


	if(isset($_POST['timp15-30']) &&(isset($_POST['timp30-60']) || isset($_POST['timp60']) ) )
	{
		$cautare=str_replace("Timp>15 and Timp<30", "(Timp>15 and Timp<30)", $cautare);
	}


	if(isset($_POST['timp30-60']) &&(isset($_POST['timp60']) ))
	{
		$cautare=str_replace("Timp>30 and Timp<60", "(Timp>30 and Timp<60)", $cautare);
	}

	if($k7==1)
		$cautare=$cautare.")";

	if(isset($_POST['micdejunI']))
	{
		$_SESSION["micdejun"]="<input type=\"checkbox\" name=\"micdejun\" value=\"micdejun\" onchange=\"this.form.submit()\"  id=\"micdejun\" >Mic dejun";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"micdejunI\" name=\"micdejunI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mic dejun</label>
  </div>","",$afisares);

		if(strpos($cautare,"(micdejun=1 or " )!==false)
		{
			$cautare=str_replace("(micdejun=1 or ","(",$cautare);
		}

		if (strpos($cautare," (micdejun=1) and")!==false) {
			$cautare=str_replace(" (micdejun=1) and","",$cautare);
		}

		if(strpos($cautare,"(micdejun=1)")!==false)
		{
			$cautare=str_replace("(micdejun=1)","",$cautare);
		}

		
		
	}


	if(isset($_POST['pranzI']))
	{
		$_SESSION["pranz"]="<input type=\"checkbox\" name=\"pranz\" value=\"pranz\" onchange=\"this.form.submit()\"  id=\"pranz\" >Pranz";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pranzI\" name=\"pranzI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Pranz</label>
  </div>","",$afisares);

		if(strpos($cautare,"(pranz=1 or " )!==false)
		{
			$cautare=str_replace("(pranz=1 or ","(",$cautare);
		}

		if (strpos($cautare," (pranz=1) and")!==false) {
			$cautare=str_replace(" (pranz=1) and","",$cautare);
		}

		if(strpos($cautare,"(pranz=1)")!==false)
		{
			$cautare=str_replace("(pranz=1)","",$cautare);
		}
		
		if(strpos($cautare," or pranz=1)")!==false)
		{
			$cautare=str_replace(" or pranz=1)",")",$cautare);
		}

		if(strpos($cautare," or pranz=1")!==false)
		{
			$cautare=str_replace(" or pranz=1","",$cautare);
		}
	}


	if(isset($_POST['gustareI']))
	{
		$_SESSION["gustare"]="<input type=\"checkbox\" name=\"gustare\" value=\"gustare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Gustare";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"gustareI\" name=\"gustareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Gustare</label>
  </div>","",$afisares);

		if(strpos($cautare,"(gustare=1 or " )!==false)
		{
			$cautare=str_replace("(gustare=1 or ","(",$cautare);
		}

		if (strpos($cautare," (gustare=1) and ")!==false) {
			$cautare=str_replace(" (gustare=1) and ","",$cautare);
		}

		if(strpos($cautare,"(gustare=1)")!==false)
		{
			$cautare=str_replace("(gustare=1)","",$cautare);
		}
		
		if(strpos($cautare," or gustare=1)")!==false)
		{
			$cautare=str_replace(" or gustare=1)",")",$cautare);
		}

		if(strpos($cautare," or gustare=1")!==false)
		{
			$cautare=str_replace(" or gustare=1","",$cautare);
		}
	}

	if(isset($_POST['aperitivI']))
	{
		$_SESSION["aperitiv"]="<input type=\"checkbox\" name=\"aperitiv\" value=\"aperitiv\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Aperitiv";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"aperitivI\" name=\"aperitivI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Aperitiv</label>
  </div>","",$afisares);

		if(strpos($cautare,"(aperitiv=1 or " )!==false)
		{
			$cautare=str_replace("(aperitiv=1 or ","(",$cautare);
		}

		if (strpos($cautare," (aperitiv=1) and ")!==false) {
			$cautare=str_replace(" (aperitiv=1) and ","",$cautare);
		}

		if(strpos($cautare,"(aperitiv=1)")!==false)
		{
			$cautare=str_replace("(aperitiv=1)","",$cautare);
		}
		
		if(strpos($cautare," or aperitiv=1)")!==false)
		{
			$cautare=str_replace(" or aperitiv=1)",")",$cautare);
		}

		if(strpos($cautare," or aperitiv=1")!==false)
		{
			$cautare=str_replace(" or aperitiv=1","",$cautare);
		}
	}

	if(isset($_POST['cinaI']))
	{
		$_SESSION["cina"]="<input type=\"checkbox\" name=\"cina\" value=\"cina\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cina";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cinaI\" name=\"cinaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cina</label>
  </div>","",$afisares);

		if(strpos($cautare,"(cina=1 or " )!==false)
		{
			$cautare=str_replace("(cina=1 or ","(",$cautare);
		}

		if (strpos($cautare," (cina=1) and ")!==false) {
			$cautare=str_replace(" (cina=1) and ","",$cautare);
		}

		if(strpos($cautare,"(cina=1)")!==false)
		{
			$cautare=str_replace("(cina=1)","",$cautare);
		}
		
		if(strpos($cautare," or cina=1)")!==false)
		{
			$cautare=str_replace(" or cina=1)",")",$cautare);
		}

		if(strpos($cautare," or cina=1")!==false)
		{
			$cautare=str_replace(" or cina=1","",$cautare);
		}
	}

	if(isset($_POST['desertI']))
	{
		$_SESSION["desert"]="<input type=\"checkbox\" name=\"desert\" value=\"desert\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Desert";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"desertI\" name=\"desertI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Desert</label>
  </div>","",$afisares);

		if(strpos($cautare,"(desert=1 or " )!==false)
		{
			$cautare=str_replace("(desert=1 or ","(",$cautare);
		}

		if (strpos($cautare," (desert=1) and ")!==false) {
			$cautare=str_replace(" (desert=1) and ","",$cautare);
		}

		if(strpos($cautare,"(desert=1)")!==false)
		{
			$cautare=str_replace("(desert=1)","",$cautare);
		}
		
		if(strpos($cautare," or desert=1)")!==false)
		{
			$cautare=str_replace(" or desert=1)",")",$cautare);
		}

		if(strpos($cautare," or desert=1")!==false)
		{
			$cautare=str_replace(" or desert=1","",$cautare);
		}
	}

	if(isset($_POST['salateI']))
	{
		$_SESSION["salate"]="<input type=\"checkbox\" name=\"salate\" value=\"salate\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Salate";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"salateI\" name=\"salateI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Salate</label>
  </div>","",$afisares);

		if(strpos($cautare,"(salate=1 or " )!==false)
		{
			$cautare=str_replace("(salate=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (salate=1)")!==false)
		{
			$cautare=str_replace(" and (salate=1)","",$cautare);
		}

		if(strpos($cautare,"(salate=1) and ")!==false)
		{
			$cautare=str_replace("(salate=1) and ","",$cautare);
		}


		if(strpos($cautare,"(salate=1)")!==false)
		{
			$cautare=str_replace("(salate=1)","",$cautare);
		}
		
		if(strpos($cautare," or salate=1)")!==false)
		{
			$cautare=str_replace(" or salate=1)",")",$cautare);
		}

		if(strpos($cautare," or salate=1")!==false)
		{
			$cautare=str_replace(" or salate=1","",$cautare);
		}

		if(strpos($cautare,"and (salate=1 or")!==false)
		{
			$cautare=str_replace("and (salate=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['supeI']))
	{
		$_SESSION["supe"]="<input type=\"checkbox\" name=\"supe\" value=\"supe\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Supe";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"supeI\" name=\"supeI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Supe</label>
  </div>","",$afisares);

		if(strpos($cautare,"(supe=1 or " )!==false)
		{
			$cautare=str_replace("(supe=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (supe=1)")!==false)
		{
			$cautare=str_replace(" and (supe=1)","",$cautare);
		}

		if(strpos($cautare,"(supe=1) and ")!==false)
		{
			$cautare=str_replace("(supe=1) and ","",$cautare);
		}

		if(strpos($cautare,"(supe=1)")!==false)
		{
			$cautare=str_replace("(supe=1)","",$cautare);
		}
		
		if(strpos($cautare," or supe=1)")!==false)
		{
			$cautare=str_replace(" or supe=1)",")",$cautare);
		}

		if(strpos($cautare," or supe=1")!==false)
		{
			$cautare=str_replace(" or supe=1","",$cautare);
		}


		if(strpos($cautare,"and (supe=1 or")!==false)
		{
			$cautare=str_replace("and (supe=1 or ","(",$cautare);
		}

		if(strpos($cautare,"or supe=1 ")!==false)
		{
			$cautare=str_replace("or supe=1 ","",$cautare);
		}
	}


	if(isset($_POST['feluriprincipaleI']))
	{
		$_SESSION["feluriprincipale"]="<input type=\"checkbox\" name=\"feluriprincipale\" value=\"feluriprincipale\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Feluri principale";

		$afisares=str_replace("<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"feluriprincipaleI\" name=\"feluriprincipaleI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Feluri principale</label>
  </div>","",$afisares);

		if(strpos($cautare,"(feluriprincipale=1 or " )!==false)
		{
			$cautare=str_replace("(feluriprincipale=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (feluriprincipale=1)")!==false)
		{
			$cautare=str_replace(" and (feluriprincipale=1)","",$cautare);
		}

		if(strpos($cautare,"(feluriprincipale=1) and ")!==false)
		{
			$cautare=str_replace("(feluriprincipale=1) and ","",$cautare);
		}

		if(strpos($cautare,"(feluriprincipale=1)")!==false)
		{
			$cautare=str_replace("(feluriprincipale=1)","",$cautare);
		}
		
		if(strpos($cautare," or feluriprincipale=1)")!==false)
		{
			$cautare=str_replace(" or feluriprincipale=1)",")",$cautare);
		}

		if(strpos($cautare," or feluriprincipale=1")!==false)
		{
			$cautare=str_replace(" or feluriprincipale=1","",$cautare);
		}

		

		if(strpos($cautare,"and (feluriprincipale=1 or")!==false)
		{
			$cautare=str_replace("and (feluriprincipale=1 or ","(",$cautare);
		}

		if(strpos($cautare,"or feluriprincipale=1 ")!==false)
		{
			$cautare=str_replace("or feluriprincipale=1 ","",$cautare);
		}
	}

	if(isset($_POST['patiserieI']))
	{
		$_SESSION["patiserie"]="<input type=\"checkbox\" name=\"patiserie\" value=\"patiserie\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Patiserie";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"patiserieI\" name=\"patiserieI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Patiserie</label>
  </div>","",$afisares);

		if(strpos($cautare,"(patiserie=1 or " )!==false)
		{
			$cautare=str_replace("(patiserie=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (patiserie=1)")!==false)
		{
			$cautare=str_replace(" and (patiserie=1)","",$cautare);
		}

		if(strpos($cautare,"(patiserie=1) and ")!==false)
		{
			$cautare=str_replace("(patiserie=1) and ","",$cautare);
		}

		if(strpos($cautare,"(patiserie=1)")!==false)
		{
			$cautare=str_replace("(patiserie=1)","",$cautare);
		}
		
		if(strpos($cautare," or patiserie=1)")!==false)
		{
			$cautare=str_replace(" or patiserie=1)",")",$cautare);
		}

		if(strpos($cautare," or patiserie=1")!==false)
		{
			$cautare=str_replace(" or patiserie=1","",$cautare);
		}

		
		if(strpos($cautare,"and (patiserie=1 or")!==false)
		{
			$cautare=str_replace("and (patiserie=1 or ","(",$cautare);
		}

		if(strpos($cautare,"or patiserie=1 ")!==false)
		{
			$cautare=str_replace("or patiserie=1 ","",$cautare);
		}
	}

	if(isset($_POST['prajituriI']))
	{
		$_SESSION["prajituri"]="<input type=\"checkbox\" name=\"prajituri\" value=\"prajituri\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Prajituri";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"prajituriI\" name=\"prajituriI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Prajituri</label>
  </div>","",$afisares);

		if(strpos($cautare,"(prajituri=1 or " )!==false)
		{
			$cautare=str_replace("(prajituri=1 or ","(",$cautare);
		}


		if(strpos($cautare," and (prajituri=1)")!==false)
		{
			$cautare=str_replace(" and (prajituri=1)","",$cautare);
		}

		if(strpos($cautare,"(prajitur=1) and ")!==false)
		{
			$cautare=str_replace("(prajituri=1) and ","",$cautare);
		}

		if(strpos($cautare,"(prajituri=1)")!==false)
		{
			$cautare=str_replace("(prajituri=1)","",$cautare);
		}
		
		if(strpos($cautare," or prajituri=1)")!==false)
		{
			$cautare=str_replace(" or prajituri=1)",")",$cautare);
		}

		if(strpos($cautare," or prajituri=1")!==false)
		{
			$cautare=str_replace(" or prajituri=1","",$cautare);
		}


		if(strpos($cautare,"and (prajituri=1 or")!==false)
		{
			$cautare=str_replace("and (prajituri=1 or ","(",$cautare);
		}

		if(strpos($cautare,"or prajituri=1 ")!==false)
		{
			$cautare=str_replace("or prajituri=1 ","",$cautare);
		}
	}


	if(isset($_POST['torturiI']))
	{
		$_SESSION["torturi"]="<input type=\"checkbox\" name=\"torturi\" value=\"torturi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Torturi";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"torturiI\" name=\"torturiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Torturi</label>
  </div>","",$afisares);

		if(strpos($cautare,"(torturi=1 or " )!==false)
		{
			$cautare=str_replace("(torturi=1 or ","(",$cautare);
		}

		
		if(strpos($cautare," and (torturi=1)")!==false)
		{
			$cautare=str_replace(" and (torturi=1)","",$cautare);
		}

		if(strpos($cautare,"(torturi=1) and ")!==false)
		{
			$cautare=str_replace("(torturi=1) and ","",$cautare);
		}

		if(strpos($cautare,"(torturi=1)")!==false)
		{
			$cautare=str_replace("(torturi=1)","",$cautare);
		}
		
		if(strpos($cautare," or torturi=1)")!==false)
		{
			$cautare=str_replace(" or torturi=1)",")",$cautare);
		}

		if(strpos($cautare," or torturi=1")!==false)
		{
			$cautare=str_replace(" or torturi=1","",$cautare);
		}


		if(strpos($cautare,"and (torturi=1 or")!==false)
		{
			$cautare=str_replace("and (torturi=1 or ","(",$cautare);
		}

		if(strpos($cautare,"or torturi=1 ")!==false)
		{
			$cautare=str_replace("or torturi=1 ","",$cautare);
		}
	}


	if(isset($_POST['vegetarianI']))
	{
		$_SESSION["vegetarian"]="<input type=\"checkbox\" name=\"vegetarian\" value=\"vegetarian\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vegetarian";

		$afisares=str_replace("<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"vegetarianI\" name=\"vegetarianI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vegetarian</label>
  </div>","",$afisares);

		if(strpos($cautare,"(vegetarian=1 or " )!==false)
		{
			$cautare=str_replace("(vegetarian=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (vegetarian=1)")!==false)
		{
			$cautare=str_replace(" and (vegetarian=1)","",$cautare);
		}

		if(strpos($cautare,"(vegetarian=1) and ")!==false)
		{
			$cautare=str_replace("(vegetarian=1) and ","",$cautare);
		}

		if(strpos($cautare,"(vegetarian=1)")!==false)
		{
			$cautare=str_replace("(vegetarian=1)","",$cautare);
		}
		
		if(strpos($cautare," or vegetarian=1)")!==false)
		{
			$cautare=str_replace(" or vegetarian=1)",")",$cautare);
		}

		if(strpos($cautare," or vegetarian=1")!==false)
		{
			$cautare=str_replace(" or vegetarian=1","",$cautare);
		}

		if(strpos($cautare,"and (vegetarian=1 or")!==false)
		{
			$cautare=str_replace("and (vegetarian=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['dietadukanI']))
	{
		$_SESSION["dietadukan"]="<input type=\"checkbox\" name=\"dietadukan\" value=\"dietadukan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Dieta Dukan";

		$afisares=str_replace("<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"dietadukanI\" name=\"dietadukanI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Dieta Dukan</label>
  </div>","",$afisares);

		if(strpos($cautare,"(dietadukan=1 or " )!==false)
		{
			$cautare=str_replace("(dietadukan=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (dietadukan=1)")!==false)
		{
			$cautare=str_replace(" and (dietadukan=1)","",$cautare);
		}

		if(strpos($cautare,"(dietadukan=1) and ")!==false)
		{
			$cautare=str_replace("(dietadukan=1) and ","",$cautare);
		}

		if(strpos($cautare,"(dietadukan=1)")!==false)
		{
			$cautare=str_replace("(dietadukan=1)","",$cautare);
		}
		
		if(strpos($cautare," or dietadukan=1)")!==false)
		{
			$cautare=str_replace(" or dietadukan=1)",")",$cautare);
		}

		if(strpos($cautare," or dietadukan=1")!==false)
		{
			$cautare=str_replace(" or dietadukan=1","",$cautare);
		}

		if(strpos($cautare,"and (dietadukan=1 or")!==false)
		{
			$cautare=str_replace("and (dietadukan=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['retetedepostI']))
	{
		$_SESSION["retetedepost"]="<input type=\"checkbox\" name=\"retetedepost\" value=\"retetedepost\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Retete de post";

		$afisares=str_replace("<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"retetedepostI\" name=\"retetedepostI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Retete de post</label>
  </div>","",$afisares);

		if(strpos($cautare,"(retetedepost=1 or " )!==false)
		{
			$cautare=str_replace("(retetedepost=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (retetedepost=1)")!==false)
		{
			$cautare=str_replace(" and (retetedepost=1)","",$cautare);
		}

		if(strpos($cautare,"(retetedepost=1) and ")!==false)
		{
			$cautare=str_replace("(retetedepost=1) and ","",$cautare);
		}

		if(strpos($cautare,"(retetedepost=1)")!==false)
		{
			$cautare=str_replace("(retetedepost=1)","",$cautare);
		}
		
		if(strpos($cautare," or retetedepost=1)")!==false)
		{
			$cautare=str_replace(" or retetedepost=1)",")",$cautare);
		}

		if(strpos($cautare," or retetedepost=1")!==false)
		{
			$cautare=str_replace(" or retetedepost=1","",$cautare);
		}

		if(strpos($cautare,"and (retetedepost=1 or")!==false)
		{
			$cautare=str_replace("and (retetedepost=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['retetelowcarbI']))
	{
		$_SESSION["retetelowcarb"]="<input type=\"checkbox\" name=\"retetelowcarb\" value=\"retetelowcarb\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Retete LowCarb";

		$afisares=str_replace("<div class=\"selectate1\">
    <input type=\"submit\" class=\"buton-click\" id=\"retetelowcarbI\" name=\"retetelowcarbI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Retete LowCarb</label>
  </div>","",$afisares);

		if(strpos($cautare,"(retetelowcarb=1 or " )!==false)
		{
			$cautare=str_replace("(retetelowcarb=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (retetelowcarb=1)")!==false)
		{
			$cautare=str_replace(" and (retetelowcarb=1)","",$cautare);
		}

		if(strpos($cautare,"(retetelowcarb=1) and ")!==false)
		{
			$cautare=str_replace("(retetelowcarb=1) and ","",$cautare);
		}

		if(strpos($cautare,"(retetelowcarb=1)")!==false)
		{
			$cautare=str_replace("(retetelowcarb=1)","",$cautare);
		}
		
		if(strpos($cautare," or retetelowcarb=1)")!==false)
		{
			$cautare=str_replace(" or retetelowcarb=1)",")",$cautare);
		}

		if(strpos($cautare," or retetelowcarb=1")!==false)
		{
			$cautare=str_replace(" or retetelowcarb=1","",$cautare);
		}

		if(strpos($cautare,"and (retetelowcarb=1 or")!==false)
		{
			$cautare=str_replace("and (retetelowcarb=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['veganI']))
	{
		$_SESSION["vegan"]="<input type=\"checkbox\" name=\"vegan\" value=\"vegan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vegan";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"veganI\" name=\"veganI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vegan</label>
  </div>","",$afisares);

		if(strpos($cautare,"(vegan=1 or " )!==false)
		{
			$cautare=str_replace("(vegan=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (vegan=1)")!==false)
		{
			$cautare=str_replace(" and (vegan=1)","",$cautare);
		}

		if(strpos($cautare,"(vegan=1) and ")!==false)
		{
			$cautare=str_replace("(vegan=1) and ","",$cautare);
		}

		if(strpos($cautare,"(vegan=1)")!==false)
		{
			$cautare=str_replace("(vegan=1)","",$cautare);
		}
		
		if(strpos($cautare," or vegan=1)")!==false)
		{
			$cautare=str_replace(" or vegan=1)",")",$cautare);
		}

		if(strpos($cautare," or vegan=1")!==false)
		{
			$cautare=str_replace(" or vegan=1","",$cautare);
		}

		if(strpos($cautare,"and (vegan=1 or")!==false)
		{
			$cautare=str_replace("and (vegan=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['americaI']))
	{
		$_SESSION["america"]="<input type=\"checkbox\" name=\"america\" value=\"america\" onchange=\"this.form.submit()\"  id=\"myCheck\" >America";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"americaI\" name=\"americaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">America</label>
  </div>","",$afisares);

		if(strpos($cautare,"(america=1 or " )!==false)
		{
			$cautare=str_replace("(america=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (america=1)")!==false)
		{
			$cautare=str_replace(" and (america=1)","",$cautare);
		}

		if(strpos($cautare,"(america=1) and ")!==false)
		{
			$cautare=str_replace("(america=1) and ","",$cautare);
		}

		if(strpos($cautare,"(america=1)")!==false)
		{
			$cautare=str_replace("(america=1)","",$cautare);
		}
		
		if(strpos($cautare," or america=1)")!==false)
		{
			$cautare=str_replace(" or america=1)",")",$cautare);
		}

		if(strpos($cautare," or america=1")!==false)
		{
			$cautare=str_replace(" or america=1","",$cautare);
		}

		if(strpos($cautare,"and (america=1 or")!==false)
		{
			$cautare=str_replace("and (america=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['italiaI']))
	{
		$_SESSION["italia"]="<input type=\"checkbox\" name=\"italia\" value=\"italia\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Italia";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"italiaI\" name=\"italiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Italia</label>
  </div>","",$afisares);

		if(strpos($cautare,"(italia=1 or " )!==false)
		{
			$cautare=str_replace("(italia=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (italia=1)")!==false)
		{
			$cautare=str_replace(" and (italia=1)","",$cautare);
		}

		if(strpos($cautare,"(italia=1) and ")!==false)
		{
			$cautare=str_replace("(italia=1) and ","",$cautare);
		}

		if(strpos($cautare,"(italia=1)")!==false)
		{
			$cautare=str_replace("(italia=1)","",$cautare);
		}
		
		if(strpos($cautare," or italia=1)")!==false)
		{
			$cautare=str_replace(" or italia=1)",")",$cautare);
		}

		if(strpos($cautare," or italia=1")!==false)
		{
			$cautare=str_replace(" or italia=1","",$cautare);
		}

		if(strpos($cautare,"and (italia=1 or")!==false)
		{
			$cautare=str_replace("and (italia=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['asiaI']))
	{
		$_SESSION["asia"]="<input type=\"checkbox\" name=\"asia\" value=\"asia\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Asia";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"asiaI\" name=\"asiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Asia</label>
  </div>","",$afisares);

		if(strpos($cautare,"(asia=1 or " )!==false)
		{
			$cautare=str_replace("(asia=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (asia=1)")!==false)
		{
			$cautare=str_replace(" and (asia=1)","",$cautare);
		}

		if(strpos($cautare,"(asia=1) and ")!==false)
		{
			$cautare=str_replace("(asia=1) and ","",$cautare);
		}

		if(strpos($cautare,"(asia=1)")!==false)
		{
			$cautare=str_replace("(asia=1)","",$cautare);
		}
		
		if(strpos($cautare," or asia=1)")!==false)
		{
			$cautare=str_replace(" or asia=1)",")",$cautare);
		}

		if(strpos($cautare," or asia=1")!==false)
		{
			$cautare=str_replace(" or asia=1","",$cautare);
		}

		if(strpos($cautare,"and (asia=1 or")!==false)
		{
			$cautare=str_replace("and (asia=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['indiaI']))
	{
		$_SESSION["india"]="<input type=\"checkbox\" name=\"india\" value=\"india\" onchange=\"this.form.submit()\"  id=\"myCheck\" >India";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"indiaI\" name=\"indiaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">India</label>
  </div>","",$afisares);

		if(strpos($cautare,"(india=1 or " )!==false)
		{
			$cautare=str_replace("(india=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (india=1)")!==false)
		{
			$cautare=str_replace(" and (india=1)","",$cautare);
		}

		if(strpos($cautare,"(india=1) and ")!==false)
		{
			$cautare=str_replace("(india=1) and ","",$cautare);
		}

		if(strpos($cautare,"(india=1)")!==false)
		{
			$cautare=str_replace("(india=1)","",$cautare);
		}
		
		if(strpos($cautare," or india=1)")!==false)
		{
			$cautare=str_replace(" or india=1)",")",$cautare);
		}

		if(strpos($cautare," or india=1")!==false)
		{
			$cautare=str_replace(" or india=1","",$cautare);
		}

		if(strpos($cautare,"and (india=1 or")!==false)
		{
			$cautare=str_replace("and (india=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['frantaI']))
	{
		$_SESSION["franta"]="<input type=\"checkbox\" name=\"franta\" value=\"franta\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Franta";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"frantaI\" name=\"frantaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Franta</label>
  </div>","",$afisares);

		if(strpos($cautare,"(franta=1 or " )!==false)
		{
			$cautare=str_replace("(franta=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (franta=1)")!==false)
		{
			$cautare=str_replace(" and (franta=1)","",$cautare);
		}

		if(strpos($cautare,"(franta=1) and ")!==false)
		{
			$cautare=str_replace("(franta=1) and ","",$cautare);
		}

		if(strpos($cautare,"(franta=1)")!==false)
		{
			$cautare=str_replace("(franta=1)","",$cautare);
		}
		
		if(strpos($cautare," or franta=1)")!==false)
		{
			$cautare=str_replace(" or franta=1)",")",$cautare);
		}

		if(strpos($cautare," or franta=1")!==false)
		{
			$cautare=str_replace(" or franta=1","",$cautare);
		}

		if(strpos($cautare,"and (franta=1 or")!==false)
		{
			$cautare=str_replace("and (franta=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['spaniaI']))
	{
		$_SESSION["spania"]="<input type=\"checkbox\" name=\"spania\" value=\"spania\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Spania";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"spaniaI\" name=\"spaniaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Spania</label>
  </div>","",$afisares);

		if(strpos($cautare,"(spania=1 or " )!==false)
		{
			$cautare=str_replace("(spania=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (spania=1)")!==false)
		{
			$cautare=str_replace(" and (spania=1)","",$cautare);
		}

		if(strpos($cautare,"(spania=1) and ")!==false)
		{
			$cautare=str_replace("(spania=1) and ","",$cautare);
		}

		if(strpos($cautare,"(spania=1)")!==false)
		{
			$cautare=str_replace("(spania=1)","",$cautare);
		}
		
		if(strpos($cautare," or spania=1)")!==false)
		{
			$cautare=str_replace(" or spania=1)",")",$cautare);
		}

		if(strpos($cautare," or spania=1")!==false)
		{
			$cautare=str_replace(" or spania=1","",$cautare);
		}

		if(strpos($cautare,"and (spania=1 or")!==false)
		{
			$cautare=str_replace("and (spania=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['pasteI']))
	{
		$_SESSION["paste"]="<input type=\"checkbox\" name=\"paste\" value=\"paste\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Paste";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pasteI\" name=\"pasteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Paste</label>
  </div>","",$afisares);

		if(strpos($cautare,"(paste=1 or " )!==false)
		{
			$cautare=str_replace("(paste=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (paste=1)")!==false)
		{
			$cautare=str_replace(" and (paste=1)","",$cautare);
		}

		if(strpos($cautare,"(paste=1) and ")!==false)
		{
			$cautare=str_replace("(paste=1) and ","",$cautare);
		}

		if(strpos($cautare,"(paste=1)")!==false)
		{
			$cautare=str_replace("(paste=1)","",$cautare);
		}
		
		if(strpos($cautare," or paste=1)")!==false)
		{
			$cautare=str_replace(" or paste=1)",")",$cautare);
		}

		if(strpos($cautare," or paste=1")!==false)
		{
			$cautare=str_replace(" or paste=1","",$cautare);
		}

		if(strpos($cautare,"and (paste=1 or")!==false)
		{
			$cautare=str_replace("and (paste=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['craciunI']))
	{
		$_SESSION["craciun"]="<input type=\"checkbox\" name=\"craciun\" value=\"craciun\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Craciun";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"craciunI\" name=\"craciunI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Craciun</label>
  </div>","",$afisares);

		if(strpos($cautare,"(craciun=1 or " )!==false)
		{
			$cautare=str_replace("(craciun=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (craciun=1)")!==false)
		{
			$cautare=str_replace(" and (craciun=1)","",$cautare);
		}

		if(strpos($cautare,"(craciun=1) and ")!==false)
		{
			$cautare=str_replace("(craciun=1) and ","",$cautare);
		}

		if(strpos($cautare,"(craciun=1)")!==false)
		{
			$cautare=str_replace("(craciun=1)","",$cautare);
		}
		
		if(strpos($cautare," or craciun=1)")!==false)
		{
			$cautare=str_replace(" or craciun=1)",")",$cautare);
		}

		if(strpos($cautare," or craciun=1")!==false)
		{
			$cautare=str_replace(" or craciun=1","",$cautare);
		}

		if(strpos($cautare,"and (craciun=1 or")!==false)
		{
			$cautare=str_replace("and (craciun=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['revelionI']))
	{
		$_SESSION["revelion"]="<input type=\"checkbox\" name=\"revelion\" value=\"revelion\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Revelion";

		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"revelionI\" name=\"revelionI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Revelion</label>
  </div>","",$afisares);

		if(strpos($cautare,"(revelion=1 or " )!==false)
		{
			$cautare=str_replace("(revelion=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (revelion=1)")!==false)
		{
			$cautare=str_replace(" and (revelion=1)","",$cautare);
		}

		if(strpos($cautare,"(revelion=1) and ")!==false)
		{
			$cautare=str_replace("(revelion=1) and ","",$cautare);
		}

		if(strpos($cautare,"(revelion=1)")!==false)
		{
			$cautare=str_replace("(revelion=1)","",$cautare);
		}
		
		if(strpos($cautare," or revelion=1)")!==false)
		{
			$cautare=str_replace(" or revelion=1)",")",$cautare);
		}

		if(strpos($cautare," or revelion=1")!==false)
		{
			$cautare=str_replace(" or revelion=1","",$cautare);
		}

		if(strpos($cautare,"and (revelion=1 or")!==false)
		{
			$cautare=str_replace("and (revelion=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['traditional-romanescI']))
	{
		$_SESSION["traditional-romanesc"]="<input type=\"checkbox\" name=\"traditional-romanesc\" value=\"traditional-romanesc\"  onchange=\"this.form.submit()\" id=\"myCheck\">Traditional romanesc";

		$afisares=str_replace("<div class=\"selectate2\">
    <input type=\"submit\" class=\"buton-click\" id=\"traditional-romanescI\" name=\"traditional-romanescI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Traditional romanesc</label>
  </div>","",$afisares);

		if(strpos($cautare,"(tradrom=1 or " )!==false)
		{
			$cautare=str_replace("(tradrom=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (tradrom=1)")!==false)
		{
			$cautare=str_replace(" and (tradrom=1)","",$cautare);
		}

		if(strpos($cautare,"(tradrom=1) and ")!==false)
		{
			$cautare=str_replace("(tradrom=1) and ","",$cautare);
		}

		if(strpos($cautare,"(tradrom=1)")!==false)
		{
			$cautare=str_replace("(tradrom=1)","",$cautare);
		}
		
		if(strpos($cautare," or tradrom=1)")!==false)
		{
			$cautare=str_replace(" or tradrom=1)",")",$cautare);
		}

		if(strpos($cautare," or tradrom=1")!==false)
		{
			$cautare=str_replace(" or tradrom=1","",$cautare);
		}

		if(strpos($cautare,"and (tradrom=1 or")!==false)
		{
			$cautare=str_replace("and (tradrom=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['puiI']))
	{
		$_SESSION["pui"]="<input type=\"checkbox\" name=\"pui\" value=\"pui\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Pui";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"puiI\" name=\"puiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Pui</label>
  </div>","",$afisares);

		if(strpos($cautare,"Ingrediente like '% pui %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% pui %' and","",$cautare);
		}

		if(strpos($cautare,"or Ingrediente like '% pui %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% pui %' and","and",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% pui %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% pui %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% pui %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% pui %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% pui %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% pui %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% pui %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% pui %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% pui %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% pui %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% pui %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% pui %'",")",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% pui %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% pui %'","",$cautare);
		}


		
	}


	if(isset($_POST['porcI']))
	{
		$_SESSION["porc"]="<input type=\"checkbox\" name=\"porc\" value=\"porc\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Porc";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"porcI\" name=\"porcI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Porc</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% porc %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% porc %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% porc %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% porc %' and","",$cautare);
		}

		

		if (strpos($cautare,"and (Ingrediente like '% porc %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% porc %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% porc %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% porc %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% porc %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% porc %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% porc %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% porc %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% porc %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% porc %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% porc %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% porc %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% porc %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% porc %'","",$cautare);
		}


		
	}


	if(isset($_POST['vitaI']))
	{
		$_SESSION["vita"]="<input type=\"checkbox\" name=\"vita\" value=\"vita\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vita";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"vitaI\" name=\"vitaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vita</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% vita %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% vita %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% vita %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% vita %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% vita %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% vita %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% vita %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% vita %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% vita %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% vita %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% vita %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% vita %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% vita %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% vita %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% vita %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% vita %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% vita %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% vita %'","",$cautare);
		}
		
	}

	if(isset($_POST['pesteI']))
	{
		$_SESSION["peste"]="<input type=\"checkbox\" name=\"peste\" value=\"peste\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Peste";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"pesteI\" name=\"pesteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Peste</label>
  </div>","",$afisares);


		if(strpos($cautare,"or peste=1 and")!=false)
		{
			$cautare=str_replace("or peste=1 and","and",$cautare);
		}

		if(strpos($cautare,"peste=1 and")!=false)
		{
			$cautare=str_replace("peste=1 and","",$cautare);
		}

		if(strpos($cautare,"(peste=1 or " )!==false)
		{
			$cautare=str_replace("(peste=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (peste=1)")!==false)
		{
			$cautare=str_replace(" and (peste=1)","",$cautare);
		}

		if(strpos($cautare,"(peste=1) and ")!==false)
		{
			$cautare=str_replace("(peste=1) and ","",$cautare);
		}

		if(strpos($cautare,"(peste=1)")!==false)
		{
			$cautare=str_replace("(peste=1)","",$cautare);
		}
		
		if(strpos($cautare," or peste=1)")!==false)
		{
			$cautare=str_replace(" or peste=1)",")",$cautare);
		}

		if(strpos($cautare," or peste=1")!==false)
		{
			$cautare=str_replace(" or peste=1","",$cautare);
		}

		if(strpos($cautare,"and (peste=1 or")!==false)
		{
			$cautare=str_replace("and (peste=1 or ","(",$cautare);
		}
	}

	if(isset($_POST['curcanI']))
	{
		$_SESSION["curcan"]="<input type=\"checkbox\" name=\"curcan\" value=\"curcan\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Curcan";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"curcanI\" name=\"curcanI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Curcan</label>
  </div>","",$afisares);


		if(strpos($cautare,"or Ingrediente like '% curcan %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% curcan %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% curcan %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% curcan %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% curcan %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% curcan %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% curcan %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% curcan %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% curcan %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% curcan %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% curcan %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% curcan %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% curcan %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% curcan %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% curcan %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% curcan %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% curcan %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% curcan %'","",$cautare);
		}
		
	}

	if(isset($_POST['rataI']))
	{
		$_SESSION["rata"]="<input type=\"checkbox\" name=\"rata\" value=\"rata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Rata";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"rataI\" name=\"rataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Rata</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% rata %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% rata %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% rata %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% rata %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% rata %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% rata %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% rata %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% rata %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% rata %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% rata %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% rata %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% rata %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% rata %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% rata %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% rata %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% rata %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% rata %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% rata %'","",$cautare);
		}
		
	}

	if(isset($_POST['ouaI']))
	{
		$_SESSION["oua"]="<input type=\"checkbox\" name=\"oua\" value=\"oua\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Oua";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ouaI\" name=\"ouaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Oua</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% oua %' or Ingrediente like '% ou %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% oua %' or Ingrediente like '% ou %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% oua %' or Ingrediente like '% ou %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% oua %' or Ingrediente like '% ou %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% oua %' or Ingrediente like '% ou %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% oua %' or Ingrediente like '% ou %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% oua %' or Ingrediente like '% ou %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% oua %' or Ingrediente like '% ou %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% oua %' or Ingrediente like '% ou %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% oua %' or Ingrediente like '% ou %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% oua %' or Ingrediente like '% ou %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% oua %' or Ingrediente like '% ou %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% oua %' or Ingrediente like '% ou %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% oua %' or Ingrediente like '% ou %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% oua %' or Ingrediente like '% ou %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% oua %' or Ingrediente like '% ou %')","",$cautare);
		}
		
	}


	if(isset($_POST['mazareI']))
	{
		$_SESSION["mazare"]="<input type=\"checkbox\" name=\"mazare\" value=\"mazare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Mazare";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"mazareI\" name=\"mazareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mazare</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% mazare %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% mazare %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% mazare %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% mazare %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% mazare %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% mazare %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% mazare %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% mazare %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% mazare %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% mazare %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% mazare %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% mazare %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% mazare %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% mazare %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% mazare %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% mazare %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% mazare %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% mazare %'","",$cautare);
		}
		
	}

	if(isset($_POST['broccoliI']))
	{
		$_SESSION["broccoli"]="<input type=\"checkbox\" name=\"broccoli\" value=\"broccoli\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Broccoli";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"broccoliI\" name=\"broccoliI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Broccoli</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% broccoli %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% broccoli %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% broccoli %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% broccoli %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% broccoli %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% broccoli %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% broccoli %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% broccoli %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% broccoli %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% broccoli %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% broccoli %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% broccoli %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% broccoli %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% broccoli %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% broccoli %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% broccoli %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% broccoli %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% broccoli %'","",$cautare);
		}
		
	}

	if(isset($_POST['cartofiI']))
	{
		$_SESSION["cartofi"]="<input type=\"checkbox\" name=\"cartofi\" value=\"cartofi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cartofi";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cartofiI\" name=\"cartofiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cartofi</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% cartofi %' or Ingrediente like '% cartof %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% cartofi %' or Ingrediente like '% cartof %')","",$cautare);
		}
		
	}

	if(isset($_POST['morcoviI']))
	{
		$_SESSION["morcovi"]="<input type=\"checkbox\" name=\"morcovi\" value=\"morcovi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Morcovi";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"morcoviI\" name=\"morcoviI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Morcovi</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% morcovi %' or Ingrediente like '% morcov %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% morcovi %' or Ingrediente like '% morcov %')","",$cautare);
		}
	}

	if(isset($_POST['rosiiI']))
	{
		$_SESSION["rosii"]="<input type=\"checkbox\" name=\"rosii\" value=\"rosii\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Rosii";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"rosiiI\" name=\"rosiiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Rosii</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% rosii %' or Ingrediente like '% rosie %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% rosii %' or Ingrediente like '% rosie %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% rosii %' or Ingrediente like '% rosie %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% rosii %' or Ingrediente like '% rosie %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% rosii %' or Ingrediente like '% rosie %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% rosii %' or Ingrediente like '% rosie %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% rosii %' or Ingrediente like '% rosie %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% rosii %' or Ingrediente like '% rosie %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% rosii %' or Ingrediente like '% rosie %')","",$cautare);
		}
		
	}

	if(isset($_POST['lactateI']))
	{
		$_SESSION["lactate"]="<input type=\"checkbox\" name=\"lactate\" value=\"lactate\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lactate";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lactateI\" name=\"lactateI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lactate</label>
  </div>","",$afisares);


		if(strpos($cautare,"or lactate=1 and")!=false)
		{
			$cautare=str_replace("or lactate=1 and","and",$cautare);
		}

		if(strpos($cautare,"lactate=1 and")!=false)
		{
			$cautare=str_replace("lactate=1 and","",$cautare);
		}

		if(strpos($cautare,"(lactate=1 or " )!==false)
		{
			$cautare=str_replace("(lactate=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (lactate=1)")!==false)
		{
			$cautare=str_replace(" and (lactate=1)","",$cautare);
		}

		if(strpos($cautare,"(lactate=1) and ")!==false)
		{
			$cautare=str_replace("(lactate=1) and ","",$cautare);
		}

		if(strpos($cautare,"(lactate=1)")!==false)
		{
			$cautare=str_replace("(lactate=1)","",$cautare);
		}
		
		if(strpos($cautare," or lactate=1)")!==false)
		{
			$cautare=str_replace(" or lactate=1)",")",$cautare);
		}

		if(strpos($cautare," or lactate=1")!==false)
		{
			$cautare=str_replace(" or lactate=1","",$cautare);
		}

		if(strpos($cautare,"and (lactate=1 or")!==false)
		{
			$cautare=str_replace("and (lactate=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['lapteI']))
	{
		$_SESSION["lapte"]="<input type=\"checkbox\" name=\"lapte\" value=\"lapte\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lapte";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lapteI\" name=\"lapteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lapte</label>
  </div>","",$afisares);


		if(strpos($cautare,"or Ingrediente like '% lapte %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% lapte %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% lapte %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% lapte %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% lapte %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% lapte %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% lapte %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% lapte %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% lapte %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% lapte %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% lapte %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% lapte %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% lapte %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% lapte %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% lapte %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% lapte %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% lapte %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% lapte %'","",$cautare);
		}
		
	}


	if(isset($_POST['branzaI']))
	{
		$_SESSION["branza"]="<input type=\"checkbox\" name=\"branza\" value=\"branza\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Branza";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"branzaI\" name=\"branzaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Branza</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% branza %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% branza %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% branza %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% branza %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% branza %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% branza %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% branza %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% branza %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% branza %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% branza %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% branza %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% branza %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% branza %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% branza %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% branza %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% branza %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% branza %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% branza %'","",$cautare);
		}
		
	}


	if(isset($_POST['orezI']))
	{
		$_SESSION["orez"]="<input type=\"checkbox\" name=\"orez\" value=\"orez\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Orez";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"orezI\" name=\"orezI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Orez</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% orez %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% orez %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% orez %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% orez %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% orez %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% orez %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% orez %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% orez %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% orez %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% orez %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% orez %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% orez %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% orez %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% orez %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% orez %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% orez %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% orez %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% orez %'","",$cautare);
		}
		
	}


	if(isset($_POST['fainaI']))
	{
		$_SESSION["faina"]="<input type=\"checkbox\" name=\"faina\" value=\"faina\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Faina";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"fainaI\" name=\"fainaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Faina</label>
  </div>","",$afisares);


		if(strpos($cautare,"or Ingrediente like '% faina %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% faina %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% faina %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% faina %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% faina %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% faina %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% faina %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% faina %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% faina %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% faina %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% faina %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% faina %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% faina %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% faina %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% faina %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% faina %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% faina %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% faina %'","",$cautare);
		}
		
	}

	if(isset($_POST['ceapaI']))
	{
		$_SESSION["ceapa"]="<input type=\"checkbox\" name=\"ceapa\" value=\"ceapa\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ceapa";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ceapaI\" name=\"ceapaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ceapa</label>
  </div>","",$afisares);
if(strpos($cautare,"((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% cepe %' or Ingrediente like '% ceapa %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% cepe %' or Ingrediente like '% ceapa %')","",$cautare);
		}
	}


	if(isset($_POST['ciocolataI']))
	{
		$_SESSION["ciocolata"]="<input type=\"checkbox\" name=\"ciocolata\" value=\"ciocolata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ciocolata";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ciocolataI\" name=\"ciocolataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ciocolata</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ciocolate %' or Ingrediente like '% ciocolata %')","",$cautare);
		}
	}

	if(isset($_POST['cacaoI']))
	{
		$_SESSION["cacao"]="<input type=\"checkbox\" name=\"cacao\" value=\"cacao\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Cacao";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"cacaoI\" name=\"cacaoI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Cacao</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% cacao %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% cacao %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% cacao %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% cacao %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% cacao %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% cacao %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% cacao %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% cacao %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% cacao %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% cacao %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% cacao %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% cacao %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% cacao %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% cacao %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% cacao %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% cacao %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% cacao %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% cacao %'","",$cautare);
		}
		
	}

	if(isset($_POST['zaharI']))
	{
		$_SESSION["zahar"]="<input type=\"checkbox\" name=\"zahar\" value=\"zahar\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Zahar";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"zaharI\" name=\"zaharI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Zahar</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% zahar %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% zahar %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% zahar %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% zahar %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% zahar %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% zahar %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% zahar %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% zahar %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% zahar %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% zahar %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% zahar %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% zahar %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% zahar %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% zahar %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% zahar %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% zahar %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% zahar %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% zahar %'","",$cautare);
		}
		
	}

	if(isset($_POST['sareI']))
	{
		$_SESSION["sare"]="<input type=\"checkbox\" name=\"sare\" value=\"sare\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Sare";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"sareI\" name=\"sareI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Sare</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% sare %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% sare %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% sare %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% sare %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% sare %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% sare %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% sare %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% sare %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% sare %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% sare %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% sare %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% sare %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% sare %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% sare %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% sare %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% sare %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% sare %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% sare %'","",$cautare);
		}
		
	}

	if(isset($_POST['piperI']))
	{
		$_SESSION["piper"]="<input type=\"checkbox\" name=\"piper\" value=\"piper\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Piper";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"piperI\" name=\"piperI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Piper</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% piper %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% piper %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% piper %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% piper %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% piper %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% piper %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% piper %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% piper %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% piper %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% piper %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% piper %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% piper %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% piper %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% piper %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% piper %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% piper %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% piper %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% piper %'","",$cautare);
		}
		
	}


	if(isset($_POST['uleiI']))
	{
		$_SESSION["ulei"]="<input type=\"checkbox\" name=\"ulei\" value=\"ulei\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ulei";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"uleiI\" name=\"uleiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ulei</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% ulei %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% ulei %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% ulei %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% ulei %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% ulei %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% ulei %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% ulei %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ulei %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% ulei %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% ulei %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% ulei %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% ulei %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% ulei %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ulei %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% ulei %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ulei %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% ulei %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ulei %'","",$cautare);
		}
		
	}


	if(isset($_POST['castraveteI']))
	{
		$_SESSION["castravete"]="<input type=\"checkbox\" name=\"castravete\" value=\"castravete\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Castravete";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"castraveteI\" name=\"castraveteI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Castravete</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% castraveti %' or Ingrediente like '% castravete %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% castraveti %' or Ingrediente like '% castravete %')","",$cautare);
		}
		
	}

	if(isset($_POST['otetI']))
	{
		$_SESSION["otet"]="<input type=\"checkbox\" name=\"otet\" value=\"otet\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Otet";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"otetI\" name=\"otetI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Otet</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% otet %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% otet %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% otet %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% otet %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% otet %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% otet %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% otet %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% otet %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% otet %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% otet %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% otet %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% otet %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% otet %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% otet %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% otet %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% otet %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% otet %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% otet %'","",$cautare);
		}
		
	}


	if(isset($_POST['lamaieI']))
	{
		$_SESSION["lamaie"]="<input type=\"checkbox\" name=\"lamaie\" value=\"lamaie\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Lamaie";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"lamaieI\" name=\"lamaieI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Lamaie</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% lamai %' or Ingrediente like '% lamaie %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% lamai %' or Ingrediente like '% lamaie %')","",$cautare);
		}
	}

	if(isset($_POST['marI']))
	{
		$_SESSION["mar"]="<input type=\"checkbox\" name=\"mar\" value=\"mar\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Mar";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"marI\" name=\"marI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Mar</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% mere %' or Ingrediente like '% mar %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% mere %' or Ingrediente like '% mar %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% mere %' or Ingrediente like '% mar %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% mere %' or Ingrediente like '% mar %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% mere %' or Ingrediente like '% mar %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% mere %' or Ingrediente like '% mar %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% mere %' or Ingrediente like '% mar %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% mere %' or Ingrediente like '% mar %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% mere %' or Ingrediente like '% mar %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% mere %' or Ingrediente like '% mar %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% mere %' or Ingrediente like '% mar %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% mere %' or Ingrediente like '% mar %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% mere %' or Ingrediente like '% mar %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% mere %' or Ingrediente like '% mar %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% mere %' or Ingrediente like '% mar %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% mere %' or Ingrediente like '% mar %')","",$cautare);
		}
		
	}

	if(isset($_POST['portocalaI']))
	{
		$_SESSION["portocala"]="<input type=\"checkbox\" name=\"portocala\" value=\"portocala\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Portocala";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"portocalaI\" name=\"portocalaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Portocala</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% portocale %' or Ingrediente like '% portocala %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% portocale %' or Ingrediente like '% portocala %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% portocale %' or Ingrediente like '% portocala %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% portocale %' or Ingrediente like '% portocala %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% portocale %' or Ingrediente like '% portocala %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% portocale %' or Ingrediente like '% portocala %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% portocale %' or Ingrediente like '% portocala %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% portocale %' or Ingrediente like '% portocala %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% portocale %' or Ingrediente like '% portocala %')","",$cautare);
		}
	}


	if(isset($_POST['fructeI']))
	{
		$_SESSION["fructe"]="<input type=\"checkbox\" name=\"fructe\" value=\"fructe\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Fructe";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"fructeI\" name=\"fructeI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Fructe</label>
  </div>","",$afisares);

		if(strpos($cautare,"or fructe=1 and")!=false)
		{
			$cautare=str_replace("or fructe=1 and","and",$cautare);
		}

		if(strpos($cautare,"fructe=1 and")!=false)
		{
			$cautare=str_replace("fructe=1 and","",$cautare);
		}

		if(strpos($cautare,"(fructe=1 or " )!==false)
		{
			$cautare=str_replace("(fructe=1 or ","(",$cautare);
		}

		if(strpos($cautare," and (fructe=1)")!==false)
		{
			$cautare=str_replace(" and (fructe=1)","",$cautare);
		}

		if(strpos($cautare,"(fructe=1) and ")!==false)
		{
			$cautare=str_replace("(fructe=1) and ","",$cautare);
		}

		if(strpos($cautare,"(fructe=1)")!==false)
		{
			$cautare=str_replace("(fructe=1)","",$cautare);
		}
		
		if(strpos($cautare," or fructe=1)")!==false)
		{
			$cautare=str_replace(" or fructe=1)",")",$cautare);
		}

		if(strpos($cautare," or fructe=1")!==false)
		{
			$cautare=str_replace(" or fructe=1","",$cautare);
		}

		if(strpos($cautare,"and (fructe=1 or")!==false)
		{
			$cautare=str_replace("and (fructe=1 or ","(",$cautare);
		}
	}


	if(isset($_POST['avocadoI']))
	{
		$_SESSION["avocado"]="<input type=\"checkbox\" name=\"avocado\" value=\"avocado\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Avocado";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"avocadoI\" name=\"avocadoI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Avocado</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% avocado %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% avocado %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% avocado %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% avocado %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% avocado %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% avocado %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% avocado %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% avocado %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% avocado %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% avocado %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% avocado %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% avocado %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% avocado %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% avocado %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% avocado %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% avocado %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% avocado %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% avocado %'","",$cautare);
		}
		
	}


	if(isset($_POST['vinI']))
	{
		$_SESSION["vin"]="<input type=\"checkbox\" name=\"vin\" value=\"vin\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Vin";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"vinI\" name=\"vinI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Vin</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% vin %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% vin %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% vin %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% vin %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% vin %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% vin %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% vin %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% vin %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% vin %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% vin %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% vin %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% vin %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% vin %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% vin %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% vin %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% vin %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% vin %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% vin %'","",$cautare);
		}
		
	}


	if(isset($_POST['usturoiI']))
	{
		$_SESSION["usturoi"]="<input type=\"checkbox\" name=\"usturoi\" value=\"usturoi\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Usturoi";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"usturoiI\" name=\"usturoiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Usturoi</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% usturoi %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% usturoi %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% usturoi %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% usturoi %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% usturoi %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% usturoi %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% usturoi %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% usturoi %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% usturoi %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% usturoi %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% usturoi %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% usturoi %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% usturoi %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% usturoi %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% usturoi %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% usturoi %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% usturoi %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% usturoi %'","",$cautare);
		}
		
	}


	if(isset($_POST['ciuperciI']))
	{
		$_SESSION["ciuperci"]="<input type=\"checkbox\" name=\"ciuperci\" value=\"ciuperci\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ciuperci";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ciuperciI\" name=\"ciuperciI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ciuperci</label>
  </div>","",$afisares);

		if(strpos($cautare,"((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ciuperci %' or Ingrediente like '% ciuperca %')","",$cautare);
		}
		
	}


	if(isset($_POST['untI']))
	{
		$_SESSION["unt"]="<input type=\"checkbox\" name=\"unt\" value=\"unt\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Unt";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"untI\" name=\"untI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Unt</label>
  </div>","",$afisares);


		if(strpos($cautare,"or Ingrediente like '% unt %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% unt %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% unt %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% unt %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% unt %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% unt %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% unt %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% unt %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% unt %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% unt %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% unt %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% unt %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% unt %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% unt %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% unt %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% unt %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% unt %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% unt %'","",$cautare);
		}
		
	}


	if(isset($_POST['ardeiI']))
	{
		$_SESSION["ardei"]="<input type=\"checkbox\" name=\"ardei\" value=\"ardei\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Ardei";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"ardeiI\" name=\"ardeiI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Ardei</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% ardei %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% ardei %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% ardei %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% ardei %' and","",$cautare);
		}


		if (strpos($cautare,"and (Ingrediente like '% ardei %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% ardei %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% ardei %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ardei %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% ardei %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% ardei %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% ardei %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% ardei %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% ardei %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% ardei %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% ardei %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ardei %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% ardei %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% ardei %'","",$cautare);
		}
		
	}


	if(isset($_POST['sfeclaI']))
	{
		$_SESSION["sfecla"]="<input type=\"checkbox\" name=\"sfecla\" value=\"sfecla\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Sfecla";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"sfeclaI\" name=\"sfeclaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Sfecla</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% sfecla %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% sfecla %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% sfecla %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% sfecla %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% sfecla %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% sfecla %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% sfecla %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% sfecla %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% sfecla %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% sfecla %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% sfecla %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% sfecla %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% sfecla %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% sfecla %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% sfecla %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% sfecla %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% sfecla %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% sfecla %'","",$cautare);
		}
		
	}


	if(isset($_POST['varzaI']))
	{
		$_SESSION["varza"]="<input type=\"checkbox\" name=\"varza\" value=\"varza\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Varza";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"varzaI\" name=\"varzaI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Varza</label>
  </div>","",$afisares);

	if(strpos($cautare,"((Ingrediente like '% verze %' or Ingrediente like '% varza %') and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% verze %' or Ingrediente like '% varza %') and ","(",$cautare);
		}

		if (strpos($cautare,"and ((Ingrediente like '% verze %' or Ingrediente like '% varza %') or ")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% verze %' or Ingrediente like '% varza %') or"," and (",$cautare);
		}

		if(strpos($cautare,"((Ingrediente like '% verze %' or Ingrediente like '% varza %')) and ")!==false)
		{
			$cautare=str_replace("((Ingrediente like '% verze %' or Ingrediente like '% varza %')) and ","",$cautare);
		}


		if (strpos($cautare," and ((Ingrediente like '% verze %' or Ingrediente like '% varza %'))")!==false) {
			$cautare=str_replace(" and ((Ingrediente like '% verze %' or Ingrediente like '% varza %'))","",$cautare);
		}

		if (strpos($cautare,"((Ingrediente like '% verze %' or Ingrediente like '% varza %'))")!==false) {
			$cautare=str_replace("((Ingrediente like '% verze %' or Ingrediente like '% varza %'))","", $cautare);
		}

		if(strpos($cautare," ((Ingrediente like '% verze %' or Ingrediente like '% varza %') or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% verze %' or Ingrediente like '% varza %') or ","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% verze %' or Ingrediente like '% varza %')")!==false) {
			$cautare=str_replace(" or (Ingrediente like '% verze %' or Ingrediente like '% varza %')","",$cautare);
		}

		if (strpos($cautare," or (Ingrediente like '% verze %' or Ingrediente like '% varza %') or")!==false) {
			$cautare=str_replace(" or Ingrediente like '% verze %' or Ingrediente like '% varza %')","",$cautare);
		}
		
	}


	if(isset($_POST['salataI']))
	{
		$_SESSION["salata"]="<input type=\"checkbox\" name=\"salata\" value=\"salata\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Salata";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"salataI\" name=\"salataI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Salata</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% salata %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% salata %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% salata %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% salata %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% salata %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% salata %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% salata %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% salata %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% salata %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% salata %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% salata %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% salata %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% salata %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% salata %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% salata %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% salata %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% salata %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% salata %'","",$cautare);
		}
		
	}


	if(isset($_POST['gemI']))
	{
		$_SESSION["gem"]="<input type=\"checkbox\" name=\"gem\" value=\"gem\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Gem";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"gemI\" name=\"gemI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Gem</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% gem %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% gem %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% gem %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% gem %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% gem %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% gem %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% gem %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% gem %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% gem %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% gem %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% gem %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% gem %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% gem %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% gem %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% gem %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% gem %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% gem %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% gem %'","",$cautare);
		}
		
	}


	if(isset($_POST['nuciI']))
	{
		$_SESSION["nuci"]="<input type=\"checkbox\" name=\"nuci\" value=\"nuci\" onchange=\"this.form.submit()\"  id=\"myCheck\" >Nuci";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"nuciI\" name=\"nuciI\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">Nuci</label>
  </div>","",$afisares);

		if(strpos($cautare,"or Ingrediente like '% nuci %' and")!=false)
		{
			$cautare=str_replace("or Ingrediente like '% nuci %' and","and",$cautare);
		}

		if(strpos($cautare,"Ingrediente like '% nuci %' and")!=false)
		{
			$cautare=str_replace("Ingrediente like '% nuci %' and","",$cautare);
		}

		if (strpos($cautare,"and (Ingrediente like '% nuci %' or ")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% nuci %')","(",$cautare);
		}

		if(strpos($cautare,"(Ingrediente like '% nuci %') and ")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% nuci %') and ","",$cautare);
		}


		if (strpos($cautare," and (Ingrediente like '% nuci %')")!==false) {
			$cautare=str_replace(" and (Ingrediente like '% nuci %')","",$cautare);
		}

		if (strpos($cautare,"(Ingrediente like '% nuci %')")!==false) {
			$cautare=str_replace("(Ingrediente like '% nuci %')","", $cautare);
		}

		if(strpos($cautare," (Ingrediente like '% nuci %' or")!==false)
		{
			$cautare=str_replace("(Ingrediente like '% nuci %' or ","(",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% nuci %')")!==false) {
			$cautare=str_replace(" or Ingrediente like '% nuci %'","",$cautare);
		}

		if (strpos($cautare," or Ingrediente like '% nuci %'")!==false) {
			$cautare=str_replace(" or Ingrediente like '% nuci %'","",$cautare);
		}
		
	}


		for($i=1;$i<count($array); $i++)
	{
			if(isset($_POST[''.$i.'I']))
			{
				$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"".$i."I\" name=\"".$i."I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\">".ucfirst($array[$i])."</label>
  </div>","",$afisares);

				
				if (strpos($cautare,"and (Ingrediente like '% ".$array[$i]." %' and")!==false) {
							$cautare=str_replace("and (Ingrediente like '% ".$array[$i]." %' and"," and (",$cautare);
						}


				if(strpos($cautare,"(Ingrediente like '% ".$array[$i]." %') and ")!==false)
						{
							$cautare=str_replace("(Ingrediente like '% ".$array[$i]." %') and ","",$cautare);
						}


				if (strpos($cautare," and (Ingrediente like '% ".$array[$i]." %')")!==false) {
							$cautare=str_replace(" and (Ingrediente like '% ".$array[$i]." %')","",$cautare);
						}

				if (strpos($cautare,"(Ingrediente like '% ".$array[$i]." %')")!==false) {
							$cautare=str_replace("(Ingrediente like '% ".$array[$i]." %')","", $cautare);
						}

				if(strpos($cautare,"(Ingrediente like '% ".$array[$i]." %' and")!==false)
						{
							$cautare=str_replace("(Ingrediente like '% ".$array[$i]." %' and","(",$cautare);
						}

				if (strpos($cautare,"and Ingrediente like '% ".$array[$i]." %')")!==false) {
							$cautare=str_replace("and Ingrediente like '% ".$array[$i]." %')",")",$cautare);
						}

						if (strpos($cautare,"and Ingrediente like '% ".$array[$i]." %'")!==false) {
							$cautare=str_replace("and Ingrediente like '% ".$array[$i]." %'","",$cautare);}
						

				$_SESSION['ingredientAdaugat']=str_replace(",".$array[$i],"",$_SESSION['ingredientAdaugat']);
			}
		


	}


		for($i=1;$i<count($array1); $i++)
	{
			if(isset($_POST[''.$i.'E']))
			{
				$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"".$i."E\" name=\"".$i."E\" value=\"x\"  onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\" style=\"text-decoration: line-through\">".ucfirst($array1[$i])."</label>
  </div>","",$afisares);

				if (strpos($cautare,"and (Ingrediente not like '% ".$array1[$i]." %' and ")!==false) {
							$cautare=str_replace(" and (Ingrediente not like '% ".$array1[$i]." %')","(",$cautare);
						}

						if(strpos($cautare,"(Ingrediente not like '% ".$array1[$i]." %') and ")!==false)
						{
							$cautare=str_replace("(Ingrediente not like '% ".$array1[$i]." %') and ","",$cautare);
						}


						if (strpos($cautare," and (Ingrediente not like '% ".$array1[$i]." %')")!==false) {
							$cautare=str_replace(" and (Ingrediente not like '% ".$array1[$i]." %')","",$cautare);
						}

						if (strpos($cautare,"(Ingrediente not like '% ".$array1[$i]." %')")!==false) {
							$cautare=str_replace("(Ingrediente not like '% ".$array1[$i]." %')","", $cautare);
						}

						if(strpos($cautare," (Ingrediente not like '% ".$array1[$i]." %' and")!==false)
						{
							$cautare=str_replace("(Ingrediente not like '% ".$array1[$i]." %' and ","(",$cautare);
						}

						if (strpos($cautare," and Ingrediente not like '% ".$array1[$i]." %')")!==false) {
							$cautare=str_replace(" and Ingrediente not like '% ".$array1[$i]." %'","",$cautare);
						}

						if (strpos($cautare," and Ingrediente not like '% ".$array1[$i]." %'")!==false) {
							$cautare=str_replace(" and Ingrediente not like '% ".$array1[$i]." %'","",$cautare);}

							$_SESSION['ingredientEliminat']=str_replace(",".$array1[$i],"",$_SESSION['ingredientEliminat']);
							
			}
		


	}

	

	if(isset($_POST['timp15I']))
	{
		$_SESSION["timp15"]="<input type=\"checkbox\" name=\"timp15\" value=\"timp15\" onchange=\"this.form.submit()\"  id=\"myCheck\" ><15 min";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp15I\" name=\"timp15I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> <15 min</label>
  </div>","",$afisares);

		if (strpos($cautare,"and (Timp<=15 or ")!==false) {
			$cautare=str_replace(" and (Timp<=15)","(",$cautare);
		}

		if(strpos($cautare,"(Timp<=15) and ")!==false)
		{
			$cautare=str_replace("(Timp<=15) and ","",$cautare);
		}


		if (strpos($cautare," and (Timp<=15)")!==false) {
			$cautare=str_replace(" and (Timp<=15)","",$cautare);
		}

		if (strpos($cautare,"(Timp<=15)")!==false) {
			$cautare=str_replace("(Timp<=15)","", $cautare);
		}

		if(strpos($cautare," (Timp<=15 or")!==false)
		{
			$cautare=str_replace("(Timp<=15 or ","(",$cautare);
		}

		if (strpos($cautare," or Timp<=15)")!==false) {
			$cautare=str_replace(" or Timp<=15","",$cautare);
		}

		if (strpos($cautare," or Timp<=15")!==false) {
			$cautare=str_replace(" or Timp<=15","",$cautare);
		}
		
	}

	if(isset($_POST['timp15-30I']))
	{
		$_SESSION["timp15-30"]="<input type=\"checkbox\" name=\"timp15-30\" value=\"timp15-30\" onchange=\"this.form.submit()\"  id=\"myCheck\" >15-30 min";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp15-30I\" name=\"timp15-30I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> 15-30 min</label>
  </div>","",$afisares);

		if(stripos($cautare,"or ((Timp>=15 and Timp<=30)) ")!==false)
		{
			$cautare=str_replace("or ((Timp>=15 and Timp<=30)) ","", $cautare);
		}

		if (strpos($cautare,"and (Timp>=15 and Timp<=30 or ")!==false) {
			$cautare=str_replace(" and (Timp>=15 and Timp<=30)","(",$cautare);
		}

		if(strpos($cautare,"(Timp>=15 and Timp<=30) and ")!==false)
		{
			$cautare=str_replace("(Timp>=15 and Timp<=30) and ","",$cautare);
		}

		if (strpos($cautare,"(Timp>=15 and Timp<=30) or ")!==false) {
			$cautare=str_replace("(Timp>=15 and Timp<=30) or ","", $cautare);
		}

		if (strpos($cautare," and (Timp>=15 and Timp<=30)")!==false) {
			$cautare=str_replace(" and (Timp>=15 and Timp<=30)","",$cautare);
		}

		if (strpos($cautare,"or (Timp>=15 and Timp<=30)")!==false) {
			$cautare=str_replace("or (Timp>=15 and Timp<=30)","", $cautare);
		}

		if (strpos($cautare,"(Timp>=15 and Timp<=30)")!==false) {
			$cautare=str_replace("(Timp>=15 and Timp<=30)","", $cautare);
		}

		if(strpos($cautare," (Timp>=15 and Timp<=30 or")!==false)
		{
			$cautare=str_replace("(Timp>=15 and Timp<=30 or ","(",$cautare);
		}

		if (strpos($cautare," or Timp>=15 and Timp<=30)")!==false) {
			$cautare=str_replace(" or Timp>=15 and Timp<=30","",$cautare);
		}

		if (strpos($cautare," or Timp>=15 and Timp<=30")!==false) {
			$cautare=str_replace(" or Timp>=15 and Timp<=30","",$cautare);
		}
		
	}


	if(isset($_POST['timp30-60I']))
	{
		$_SESSION["timp30-60"]="<input type=\"checkbox\" name=\"timp30-60\" value=\"timp30-60\" onchange=\"this.form.submit()\"  id=\"myCheck\" >30-60 min";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp30-60I\" name=\"timp30-60I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> 30-60 min</label>
  </div>","",$afisares);

		if(stripos($cautare,"or ((Timp>=30 and Timp<=60)) ")!==false)
		{
			$cautare=str_replace("or ((Timp>=30 and Timp<=60)) ","", $cautare);
		}

		if (strpos($cautare,"and (Timp>=30 and Timp<=60 or ")!==false) {
			$cautare=str_replace(" and (Timp>=30 and Timp<=60)","(",$cautare);
		}

		if(strpos($cautare,"(Timp>=30 and Timp<=60) and ")!==false)
		{
			$cautare=str_replace("(Timp>=30 and Timp<=60) and ","",$cautare);
		}

		if (strpos($cautare,"(Timp>=30 and Timp<=60) or ")!==false) {
			$cautare=str_replace("(Timp>=30 and Timp<=60) or ","", $cautare);
		}

		if (strpos($cautare," and (Timp>=30 and Timp<=60)")!==false) {
			$cautare=str_replace(" and (Timp>=30 and Timp<=60)","",$cautare);
		}

		if (strpos($cautare,"or (Timp>=30 and Timp<=60)")!==false) {
			$cautare=str_replace("or (Timp>=30 and Timp<=60)","", $cautare);
		}

		if (strpos($cautare,"(Timp>=30 and Timp<=60)")!==false) {
			$cautare=str_replace("(Timp>=30 and Timp<=60)","", $cautare);
		}

		if(strpos($cautare," (Timp>=30 and Timp<=60 or")!==false)
		{
			$cautare=str_replace("(Timp>=30 and Timp<=60 or ","(",$cautare);
		}

		if (strpos($cautare," or Timp>=30 and Timp<=60)")!==false) {
			$cautare=str_replace(" or Timp>=30 and Timp<=60","",$cautare);
		}

		if (strpos($cautare," or Timp>=30 and Timp<=60")!==false) {
			$cautare=str_replace(" or Timp>=30 and Timp<=60","",$cautare);
		}
		
	}

	if(isset($_POST['timp60I']))
	{
		$_SESSION["timp60"]="<input type=\"checkbox\" name=\"timp60\" value=\"timp60\" onchange=\"this.form.submit()\"  id=\"myCheck\" >>60 min";
		
		$afisares=str_replace("<div class=\"selectate\">
    <input type=\"submit\" class=\"buton-click\" id=\"timp60I\" name=\"timp60I\" value=\"x\" onchange=\"this.form.submit()\"> 

    <label class=\"buton-label\"> >60 min</label>
  </div>","",$afisares);

		if (strpos($cautare,"and (Timp>60 or ")!==false) {
			$cautare=str_replace(" and (Timp>60)","(",$cautare);
		}

		if(strpos($cautare,"(Timp>60) and ")!==false)
		{
			$cautare=str_replace("(Timp>60) and ","",$cautare);
		}


		if (strpos($cautare," and (Timp>60)")!==false) {
			$cautare=str_replace(" and (Timp>60)","",$cautare);
		}

		if (strpos($cautare,"(Timp>60)")!==false) {
			$cautare=str_replace("(Timp>60)","", $cautare);
		}

		if(strpos($cautare," (Timp>60 or")!==false)
		{
			$cautare=str_replace("(Timp>60 or ","(",$cautare);
		}

		if (strpos($cautare," or Timp>60)")!==false) {
			$cautare=str_replace(" or Timp>60","",$cautare);
		}

		if (strpos($cautare," or Timp>60")!==false) {
			$cautare=str_replace(" or Timp>60","",$cautare);
		}
		
	}

    if($kafisare>0)
    {
    	$_SESSION["afisares"]=$afisares;
    }

    
    
	$result=mysqli_query($db,$cautare);
	$contor=0;
	if($setat==1 && strcmp($cautare,"select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete where ")!=0 && strcmp($cautare,"select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete where")!=0) 
	{
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
				
				
				header('Location: cautareavansata.php');
			}
			else
				if($contor==1)
			{
				$afisare2="<h5>{$contor} rezultat<h5>".$afisare;
				$_SESSION["afisare"]=$afisare2;
				
				
				header('Location: cautareavansata.php');
			}else
				if($contor==0)
			{
				$afisare=$afisare."<li style=\"visibility:hidden\">
	        <a href=\" \">
	            <img src=\"\">
	            <h4></h4>
	            
	        </a>
	        <p style=\" user-select: none\"></p>
	    </li>";
				$afisare2="<h5>Nu s-a gasit nici o reteta<h5>".$afisare;
				
				$_SESSION["afisare"]=$afisare2;
				
				header('Location: cautareavansata.php');	
			}
			
	}
	else
	{
		$cautareInceput="select id,Denumire,Ingrediente,Preparare,Timp,Imagine from retete order by id desc limit 15";
		$resultInceput=mysqli_query($db,$cautareInceput);
		$contorInceput=0;
        $afisareInceput="";



        while ($row=mysqli_fetch_assoc($resultInceput)) {
                   $contorInceput++;
                   $afisareInceput=$afisareInceput."<li>
                   <a href=\"reteta.php?id={$row['id']}\">
                   <img src=\"pozeretete/{$row['Imagine']}.jpg\">
                   <h4>{$row['Denumire']}</h4>
                   </a>
                   <p>{$row['Timp']} minute</p>
                   </li>";
               }

         $afisareInceput2="<h5>Ultimele {$contorInceput} retete adaugate<h5>".$afisareInceput;

		$_SESSION["afisare"]=$afisareInceput2;
		header('Location: cautareavansata.php');
	}
	
	
	
?>
