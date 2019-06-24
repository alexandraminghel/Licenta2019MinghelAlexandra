<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logare/Creare cont</title>
	<link rel="stylesheet" type="text/css" href="style3creare.css">
</head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<body>

<div class="login-box">
  <div class="afisaremesaj">
  <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?> 
  </div> 
  <h1>Înregistrare</h1>
  <div class="textbox">

<form  action="inregistrare.php" method="POST" autocomplete="off">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26" version="1.1" width="26px" height="26px"class="sgv1">
<g id="surface1">
<path style=" " d="M 13 0.15625 C 9.824219 0.15625 7.09375 2.296875 7.09375 6.40625 C 7.09375 9.089844 8.351563 11.816406 10 13.5 C 10.265625 14.199219 10.21875 14.722656 10.0625 15.09375 C 10.277344 15.382813 11.113281 16.226563 12.5 16.40625 C 11.988281 16.984375 11.320313 18.179688 10.78125 19.375 C 9.742188 17.902344 9 16 9 16 C 5.730469 17.21875 2.03125 19.359375 2.03125 21.46875 L 2.03125 22.28125 C 2.03125 25.226563 7.742188 25.875 13.03125 25.875 C 18.328125 25.875 23.96875 25.226563 23.96875 22.28125 L 23.96875 21.46875 C 23.96875 19.328125 20.34375 17.214844 16.96875 16.03125 C 16.96875 16.03125 16.25 17.914063 15.21875 19.375 C 14.679688 18.175781 14.015625 16.984375 13.5 16.40625 C 14.835938 16.242188 15.648438 15.457031 15.90625 15.125 C 15.796875 14.761719 15.78125 14.257813 16.03125 13.5 C 17.667969 11.8125 18.90625 9.078125 18.90625 6.40625 C 18.90625 2.300781 16.175781 0.15625 13 0.15625 Z "/>
</g>
</svg>


    <input type="text" id="user" name="user" placeholder="Nume de utilizator" autocomplete="off">
  </div>

  <div class="textbox">
    
    <input type="password" id="pass1" name="pass1" placeholder="Parola" autocomplete="off">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1" width="26px" height="26px" class="sgv2">
<g id="surface1">
<path style=" " d="M 25 3 C 18.363281 3 13 8.363281 13 15 L 13 20 L 9 20 C 7.300781 20 6 21.300781 6 23 L 6 47 C 6 48.699219 7.300781 50 9 50 L 41 50 C 42.699219 50 44 48.699219 44 47 L 44 23 C 44 21.300781 42.699219 20 41 20 L 37 20 L 37 15 C 37 8.363281 31.636719 3 25 3 Z M 25 5 C 30.566406 5 35 9.433594 35 15 L 35 20 L 15 20 L 15 15 C 15 9.433594 19.433594 5 25 5 Z M 25 30 C 26.699219 30 28 31.300781 28 33 C 28 33.898438 27.601563 34.6875 27 35.1875 L 27 38 C 27 39.101563 26.101563 40 25 40 C 23.898438 40 23 39.101563 23 38 L 23 35.1875 C 22.398438 34.6875 22 33.898438 22 33 C 22 31.300781 23.300781 30 25 30 Z "/>
</g>
</svg>
  </div>


   <div class="textbox">
    
    <input type="password" id="pass2" name="pass2" placeholder="Confirmați parola" autocomplete="off">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1" width="26px" height="26px" class="sgv2">
<g id="surface1">
<path style=" " d="M 25 3 C 18.363281 3 13 8.363281 13 15 L 13 20 L 9 20 C 7.300781 20 6 21.300781 6 23 L 6 47 C 6 48.699219 7.300781 50 9 50 L 41 50 C 42.699219 50 44 48.699219 44 47 L 44 23 C 44 21.300781 42.699219 20 41 20 L 37 20 L 37 15 C 37 8.363281 31.636719 3 25 3 Z M 25 5 C 30.566406 5 35 9.433594 35 15 L 35 20 L 15 20 L 15 15 C 15 9.433594 19.433594 5 25 5 Z M 25 30 C 26.699219 30 28 31.300781 28 33 C 28 33.898438 27.601563 34.6875 27 35.1875 L 27 38 C 27 39.101563 26.101563 40 25 40 C 23.898438 40 23 39.101563 23 38 L 23 35.1875 C 22.398438 34.6875 22 33.898438 22 33 C 22 31.300781 23.300781 30 25 30 Z "/>
</g>
</svg>
  </div>

  <div class="textbox">
    
    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off">

    <svg class="email-sgv"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
  </div>

  <input type="submit" id="register_btn" name="register_btn" class="btn" value="Înregistrare">
</div>
</form>

<div class="creaza-cont">
<a href="logare.php" class="creaza-cont">Ai deja un cont? Logează-te</a>
</div>


<div class="navbar">
	<a href="logare.php" title="Log in" class="log-in">Logează-te/Crează un cont
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="svg-icon3"><path d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/></svg></a>

	<svg class="svg-icon4" viewBox="0 0 20 20">
							<path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
						</svg>

		<div class="Logo">
			<a class="clasa1" href="paginaprincipala.php">Smart Food</a>
			<form  action="cautaRetetaPagina3.php" method="POST">
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
  <a href="logare.php"  class="meniu-scris2">Logheaza-te</a>
  <a href="crearecont.php"  class="meniu-scris3">Creaza un cont</a>
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


<?php
    unset($_SESSION["error"]);
?>