<?php
class InscriptionManager
{

public function Inscription($nom,$prenom,$adresse,$ville,$sexe,$mail,$telephone,$login,$password,$verif_password){
	
		$db =new Connexion();
		
	$req=$db->cnx->prepare("INSERT INTO client(nom,prenom,adresse,ville,sexe,mail,telephone,login,password,verif_password) VALUES('".$nom."','".$prenom."','".$adresse."','".$ville."','".$sexe."','".$mail."','".$telephone."','".$login."','".$password."','".$verif_password."')");
	
    $req->execute();
    return $req;
 }
}