<?php
class UserManager
{
   //methode login
    public function login($login,$password){
	
	$db =new Connexion();
	return $db->cnx->query('SELECT COUNT(*) FROM client WHERE login='.$db->cnx->quote($login).' and password = '.$db->cnx->quote($password))->fetchColumn();
	}
	
	
 

}