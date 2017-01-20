<?php 
include ('../include/connexion.php');
include '../Manager/ContactManager.php';
if(isset($_POST['Envoyer']))
{
    $nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$telephone=$_POST['telephone'];
	$adresse=$_POST['adresse'];
	
	$email=$_POST['email'];
	$sex=$_POST['sex'];
	$Message=$_POST['Message'];
	
	$contManger = new ContactManager();
	$contManger->add($nom,$prenom,$telephone,$adresse,$email,$sex,$Message);
	
	
	 header("location:../view/contact.php");

}
	?>