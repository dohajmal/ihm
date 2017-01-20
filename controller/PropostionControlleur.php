<?php 
include ('../include/connexion.php');
include '../Manager/PropositionManager.php';
echo '<script type="text/javascript">alert("kariiim")</script>';
//if(isset($_POST['save']))
//{
    $prix = $_GET['prix'];
    //$id_article = $_POST['id_produit'];
	$id_article = $_GET['id_produit'];
	echo $prix;
	echo $id_article;
	$propositionManger = new PropositionManager();
	$propositionManger->echere($id_article,$prix);
	
	
	 header("location:../view/index.php");
/*}*/
?>