 <?php
class CategoriesManager
{ 
public function getListfemme()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM type_categorie WHERE id_categorie=1");
	
       return $req;
    
  }
  public function getListhomme()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM type_categorie WHERE id_categorie=2");
	
       return $req;
    
  }
    public function getListenfant()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM type_categorie WHERE id_categorie=3");
	
       return $req;
    
  }
  
  public function getprod($id,$id_categorie){
	  
		
		$db =new Connexion();
		
		$req=$db->cnx->query("SELECT * FROM produit  p ,type_categorie c   WHERE   p.id_type_catg = c.id AND c.id_categorie=".$id_categorie." AND p.id_type_catg=".$id);
		
	//var_dump($req);die;
		
		return $req;
	
  }
  
 
}
 $ctgorie = new CategoriesManager();
   
    
    
    
  
   ?>