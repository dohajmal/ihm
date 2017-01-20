<?php 
include ('../include/connexion.php');
include '../Manager/InscriptionManager.php';
if(isset($_POST['connexion']))
{
    $nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$adresse=$_POST['adresse'];
	$ville=$_POST['ville'];
	$sexe=$_POST['sexe'];
	$mail=$_POST['mail'];
   
	$telephone=$_POST['telephone'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$verif_password=$_POST['verif_password'];
	if($password==$verif_password){
	
	$inscManger = new InscriptionManager();
	$inscManger->Inscription($nom,$prenom,$adresse,$ville,$sexe,$mail,$telephone,$login,$password,$verif_password);
	
	
	 header("location:../view/index.php");

}
else
{
	header("location:../view/inscription.php?erreur=1");
}
}
	?>