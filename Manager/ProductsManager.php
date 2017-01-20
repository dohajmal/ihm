 <?php
class ProductsManager
{ 
public function getListprotuct()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query('SELECT * FROM produit where vendue=0' );
	
       return $req;
  
 
  }
  
}
 $ptMa = new ProductsManager();