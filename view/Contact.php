
			<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Conatct</title>

  <meta name="author" content="aravind buddha">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


</head>

<body>
 <div id="main_container" style="    margin-left: 16px;">
            <div class="header">
                <a href="#">
                    <img src="image/logo2.png" alt="fantasy html5 template" class="templatemo-logo" style="margin-bottom: -4%;margin-left: 90px;">
                </a>
               
            </div>
            <hr style="color:#b20022;width: 1043px;margin-top: 19px;height: 2px;background-color:#b20022;margin-left:112px;">

        <div class="menu_prin">       
            <ul style="    margin-right: 162px;">
				<li><a href="index.php">Acceuil</a></li>
				<li><a href="Encheres_terminees.php">Enchéres terminées</a></li>
				<li><a href="inscription.php">Inscrivez-vous</a></li>
				<li><a href="Contact.php">Contact</a></li>
			</ul>
		</div>

        <div class="logo_bar" id="slides" style="width: 1043px;margin-top: -20px;overflow: hidden;margin-left: 112px;display: block;">
				<img src="image/42.jpg" >	
				<img src="image/53.jpg"  >
				<img src="image/62.jpg" >
				<img src="image/57.jpg"  >
				<img src="image/64.jpg" >
				<img src="image/65.jpg" >
				<img src="image/50.jpg" >
				<img src="image/45.jpg" >   
				<img src="image/55.jpg"  >
				<img src="image/34.jpg" >
				<img src="image/35.jpg" >
				
		</div>

	</div>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.slides.min.js"></script>
    <script>
    $(function(){
      $("#slides").slidesjs({
        navigation: false,
       start: 3,
        play: {
         auto: true
       }
      });
    });
  </script>
<hr style="color:#b20022;width: 1043px;margin-top:-51px;height: 2px;background-color:#b20022;margin-left: 128px;
">


<?php include('slidebarG.php');?>
  <div class="container" style="    margin-left: 232px;
    margin-top: -50px;">
  
	 
	  
	  <section id="contact" >
	  
	  		
			<mark id="message" style="display: none;"></mark>
			
			<form method="post" action="../controller/ContactConrolleur.php" name="cform" id="cform" autocomplete="on">
				<fieldset style="height: 729px;margin-right: 19px;">
			
					<legend>Contact </legend>
				<section style="background-image: url('image/contact_form.png');background-repeat:no-repeat;    margin-left: -14px;    margin-top: 33px;">
				
					<div>
				
					<input type="text" name="nom"  required=""  placeholder="Nom" style=" width: 282px;margin-top:127px;
    margin-left: 32px;" />
					</div>
					<div style="padding-top: 8px;">
						
						<input type="text" name="prenom" required=""  placeholder="Prenom" style="margin-left:32px; width: 282px;"/>
               		</div>
					<div style="padding-top: 8px;">
						
						<input type="text" name="adresse"  placeholder="Adresse" style="    margin-left: 32px;
    width: 282px;"/>
               		</div>
					<div style="padding-top: 8px;">
						<input type="text" name="telephone"   required="" placeholder="Telephone" style="margin-left: 31px;width:282px;"/>
               		</div>
					<div style="padding-top: 8px;">
						
						<input type="text" name="email"   required="" placeholder="mail@example.com" style="margin-left: 31px;
    width: 282px;"/>
               		</div>
					
				<div class="radio" style="margin-left: 70px;">
					<input id="male" type="radio" name="sex" value="male">
					<label for="male">Homme</label>
					<input id="female" type="radio" name="sex" value="female">
					<label for="female">Femme</label>
				</div>
					
					
					
					<div style="height: 441px;padding-top: 8px;">
						
						<textarea name="Message" cols="40" rows="7"  placeholder="Entrez Votre Message" spellcheck="true" required="required" style="width:282px;margin-left:31px;background-image: url('image/textarea-bg.jpg');background-repeat:no-repeat;">
						</textarea>
							
					</div>
				
					
				</section>
					<section id="map-outer" style="margin-left:12px;">
				<div id="map_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26233.49244538964!2d10.715443755264124!3d34.72569169816123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301d179b20acfe7%3A0x7a82ded557c84c94!2sUniversit%C3%A9+Nord+Am%C3%A9ricaine+Priv%C3%A9e%3A+Institut+International+de+Technologie!5e0!3m2!1sfr!2sfr!4v1462992738643" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</section>
				</fieldset>
				<div style="margin-top: -213px; margin-left: 124px;">	<input type="submit" class="submit" id="Envoyer" name="Envoyer" value="Envoyer" style="width: 149px;"></div>
			</form>
	  </section>
  </div>
  <?php include('footer.php')?>
</body>
</html>

