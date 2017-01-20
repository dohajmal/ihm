<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  


</head>
<body style="background-image: url('image/background/11.jpg');background-repeat:no-repeat;">
 
		
			<div class="login" style="background-position: top;margin-top:155px;background-image: url('image/inscription-form.png');background-repeat:no-repeat;width:1300px;height:747px;">
			</div>
			<div class="form"  style="margin-left: 500px;margin-top:-726px;">
				
		 		 <form method="post" action="../controller/InscriptionConrolleur.php"  style="margin-top: 109px;">
         <section id="inscription" >
			
            
				
					<p class="Nom" style="margin-left: -86px;">
					
						<input type="text" name="nom" id="Nom" required=""  placeholder="Nom" style="margin-left: 51px;" />
               
				
					</p>
					
					<p class="Prenom" style="margin-left: 119px;margin-top: -41px">
						
						<input type="text" name="prenom" id="pass" required=""  placeholder="Prenom" style="margin-left:32px;"/>
               
					</p>
					<p class="Adresse">
						
						<input type="text" name="adresse" id="pass" placeholder="Adresse" style="margin-left:-33px;width: 364px;"/>
					</p>
						<p class="Email">
						
					<input type="text" name="mail" id="Email"  required="" placeholder="mail@example.com" style="        margin-left: -33px; width: 364px"/>
               
					</p>
					
					
					<p class="Telephone">
					
						<input type="text" name="telephone" id="Telephone"  required="" placeholder="Telephone" style="    margin-left: -33px;width: 364px;"/>
               
					</p>
				<div class="radio" style="margin-left: 70px;">
					<input id="male" type="radio" name="sexe" value="homme">
					<label for="male">Homme</label>
					<input id="female" type="radio" name="sexe" value="female">
					<label for="female">Femme</label>
				</div>
					<p class="Ville">
						
						<select name="ville" required  style="
    margin-left: 56px;
    width: 181px;
    box-shadow: rgb(170, 170, 170) 0px 0px 3px;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(238, 238, 238)), color-stop(0.2, rgb(255, 255, 255)), to(rgb(255, 255, 255)));
    border-width: 1px;
    border-style: solid;
    border-color: rgb(170, 170, 170);
    border-radius: 3px;
    padding: 5px;    margin-left: -33px;
    width: 364px;
">
							<option value="1" selected>Sfax</option>
							<option value="2">Tunis</option>
							<option value="3">Sousse</option>
							<option value="4">Monastir</option>
							<option value="5">Gabes</option>
						</select>	
					</p>
					<p class="Login" style="margin-left: -86px;">
						
					<input type="text" name="login" id="Login" required="" placeholder="Authentification" style="    margin-left:52px;"/>
					</p>
					<p class="Password" style="margin-left: 119px;margin-top: -41px">
						
							<input type="Password" name="password" id="Password" required="" placeholder="Mot de passe" style="margin-left:32px;"/>
               
					</p>
					<p class="confirmer_motpasse">
						
							<input type="password" name="verif_password" id="confirmer_motpasse" required="" placeholder="Confirmer mot de passe" style="margin-left: -33px;width: 364px;"/>
               
					</p>
            
		         </section>
				<input type="submit" name="connexion" value="S'identifier" />
					<input a href="index.php" onclick="location.href='index.php'" type="submit" name="annuler" value="Annuler" />
      
				</form>
				
			</div>	 
			

</body>
</html>

