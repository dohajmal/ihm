 <?php
class ContactManager
{
 public function add($nom,$prenom,$telephone,$adresse,$email,$sex,$Message){
	
		$db =new Connexion();
		
	$req=$db->cnx->prepare("INSERT INTO contact(nom,prenom,telephone,adresse,email,sex,Message) VALUES('".$nom."','".$prenom."','".$telephone."','".$adresse."','".$email."','".$sex."','".$Message."')");
	
    $req->execute();
    return $req;
 }
}
 ?>
 
	