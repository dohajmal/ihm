   <?php  
session_start();
include '../include/chargerClasse.php';
	
?>

	<div class="menu_principale" style="float: left;">
			<div class="login" style="    margin-left: 113px;
    margin-top: -29px;
    background-image: url('image/login_form.png');
    background-repeat: no-repeat;
    width: 350px;
    height: 350px;">
			</div>
				   <?php if(isset($_SESSION['login'])&& !empty($_SESSION['login'])) {?>
   <div class="déconnexion" style="
    margin-top: -259px;
    margin-left: 46px;
">
	  <span style="margin-left:-114px;font-family: cursive;font-size: 20px;color:#6f6566;">Bonjour<b style="color:#b20022"> <?php echo $_SESSION['login']; ?></b> </span>
	  <a href="../controller/LogOut.php?déconnexion=1">		
	  <input type="submit" name="connexion" value="déconnexion" /></a>
	
	  </div>
	 <?php } else {
		 if(isset($_GET["error"]) && $_GET["error"]==1){
			 ?>
			 <span color="red">veerify your cred</span>
			 <?php	 }?>
			<div class="form"  style=" margin-left: 149px;margin-top: -311px;">
		 		 <form action="../controller/LoginControlleur.php" method="post" style="margin-left: 19px;margin-top:53px;" >
          <section id="authentification" >
			
					<table>
            
						<tr>
               
							<td><input type="text" name="login" id="login"  placeholder="Authentification" /></td>
               
						</tr>
            
						<tr>
               
							<td><input type="text" name="password" id="pass" placeholder="Mot de passe"/></td>
               
						</tr>
            
					</table>
         </section>
					<input type="submit" name="connexion" value="Se connecter" />
      
				</form>
				
			</div>	
 <?php }?>			
			<div id="cssmenu" style="margin-left: 111px; margin-top: 103px;">
		
				<div class="list-group" style="width: 268px;    margin-left: 15px;">
					<a href="#" class="list-group-item active" style=" padding: 8px 15px;
					font-size: 14px;
					font-weight: bold;
					font-family: cursive;
					width: 269px;
					text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
					background-image: -webkit-linear-gradient(#b20022, #b20022);
					border-radius: 5px;
					box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
					color: white;" >
					Vêtement de femme
					</a>
					<?php  
		   foreach($Categoo = $ctgorie->getListfemme()->fetchall(PDO::FETCH_ASSOC) as $res){
			   
			   ?>
			   <a href="type_catg.php?id_type_catg=<?php echo $res['id'] ?>&& id_categorie=<?php echo $res['id_categorie'] ?> " class='list-group-item'><?= $res['nom'] ?></a>
					 <?php } ?>

				<div class="list-group" style="    width: 100%;">
					<a href="#" class="list-group-item active" style=" padding: 8px 15px;
					font-family: cursive;
					width: 269px;
					text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
					background-image: -webkit-linear-gradient(#b20022, #b20022);
					border-radius: 5px;
					box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
					color: white;" >
					Vêtement d'homme
					</a>
					<?php  
		   foreach($Categoo = $ctgorie->getListhomme()->fetchall(PDO::FETCH_ASSOC) as $res){
			   
			   ?>
			   <a href="type_catg.php?id_type_catg=<?php echo $res['id'] ?>&& id_categorie=<?php echo $res['id_categorie'] ?> " class='list-group-item'><?= $res['nom'] ?></a>
					 <?php } ?>

				<div class="list-group" style="    width: 100%;">
					<a href="#" class="list-group-item active" style=" padding: 8px 15px;
					font-family: cursive;
					width: 269px;
					text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
					background-image: -webkit-linear-gradient(#b20022, #b20022);
					border-radius: 5px;
					box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
					color: white;" >
					Vêtement d'enfant
					</a>
					<?php  
		   foreach($Categoo = $ctgorie->getListenfant()->fetchall(PDO::FETCH_ASSOC) as $res){
			   
			   ?>
			   <a href="type_catg.php?id_type_catg=<?php echo $res['id'] ?>&& id_categorie=<?php echo $res['id_categorie'] ?> " class='list-group-item'><?= $res['nom'] ?></a>
					 <?php } ?>

					
					</div>
				</div>
			</div>
		</div>
	</div>