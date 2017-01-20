<?php
if(!isset($_SESSION)){ 
  echo'Pas de session <br/>'; 

session_start();

}
include ('../include/connexion.php');
include '../Manager/UserManager.php';

if (isset($_POST['login']) && !empty($_POST['login']))
{
	$login=$_POST['login'];
 
	$password=$_POST['password'];
	
	$useManger = new UserManager();
	$isLogged=$useManger->login($login,$password);
	
	if($isLogged ==1)
		{
		//succressdukk redirection
			   $_SESSION['login']=$login;
			  
			   header("location:../view/index.php?authentification=1");
		}
	else
		{
				header("location:../view/index.php?error=1");
		
			
		}
}
?>