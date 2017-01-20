<?php

include '../include/chargerClasse.php'; 
$id_type_catg=$_GET['id_type_catg']; 
$id_categorie=$_GET['id_categorie']; 

 ?>
 <div class="container" style="
    margin-left: 199px;
    margin-top: -70px;
    ">
  <section style="    margin-left: 1px;">
	  <section id="produit" >
			<mark id="message" style="display: none;"></mark>
				<fieldset style="margin-top: -16px;margin-right: 12px;">
			
					<legend  style="margin-bottom: -100px;margin-bottom: -101px;">Participer maintenant- Ces enchéres vont bientôt se terminer</legend>
				
					
					<div class="row" style="height: 1px;    padding: 11px;">
				
						<?php 
						
					
						$cat = $ctgorie->getprod($id_type_catg,$id_categorie);
				
						
						foreach($cat as $res1){ 
						$i=1;
						?>
						<div  class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="image/<?= $res1['image'] ?>.jpg" alt=""  border="0" style="width: 120px;height:90px;">
									<div class="caption">
										<h5><?= $res1['nom_article'] ?> </h5>
										
							<a type="button" onclick="UpdateCountDownTime(<?= $i ?>,<?= $res1['delai'] ?>);" id="c<?= $i;$i++; ?>" class="delai"><?= $res1['delai'] ?> </a>
							
										 <div class="prod_price"><span class="prix"><?= number_format($res1['prix_article'],3,',',' '); ?> DT</span></div>
											<div class="liste">
	                                         <input name="sdf" type="hidden" class="delai"  value="<?= $res1['delai']; ?>"/>
											</div>
											<?php// echo $_SESSION['login'];?>
											
											
											<?php if (isset($_SESSION['login'])){?>
											<?php  echo "<p>";} ?>
			<input <?php  if (isset($_SESSION['login'])){?> onclick=show(<?php echo $res1['id_produit']; ?>)<?php }?> href="#"  id="showModal" name="popp"  class="btn btn-primary"  type="button" value="Enchère"style="padding: 7px 18px;background-color:#b20022"/>
											
											<?php if (isset($_SESSION['login'])){?>
											<?php  echo "</p>";} ?>
											
 							
									</div>
							</div>
						</div>		
						
						<?php  } //fin foreach?>
				</div>
		
			
				</fieldset>
			  <section>	
			
	  </section>
  </div>