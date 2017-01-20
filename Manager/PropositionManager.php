<?php
class PropositionManager
{

public function echere($id_article,$prix){
	
		$db =new Connexion();
		
	$req=$db->cnx->query("SELECT * FROM produit where id_produit='".$id_article."' ");
		
	foreach($prod = $req->fetchall(PDO::FETCH_ASSOC) as $res1){
		if ($res1['prix_achat'] < $prix){
			$db->cnx->query("UPDATE produit SET prix_achat='".$prix."' WHERE id_produit='".$res1['id_produit']."' ");
			
		}
	}
	
    $req->execute();
    return $req;
 }
}
 //$prop = new PropositionManager();
 ?>