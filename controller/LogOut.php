<?php

	if(isset($_GET["déconnexion"])|| empty($_GET["déconnexion"])|| $_GET["déconnexion"]==1){        
			session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
			
			 //unset($_SESSION);
			echo 'doha';
			 header("location:../view/index.php?logoutt=1");
	}

?>