<?php
		session_start();
		unset($_SESSION['utilizator']);
		unset($_SESSION['logat']);
		session_destroy();

		header('Location: paginaprincipala.php');

?>