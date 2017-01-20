<?php

include '../include/chargerClasse.php'; 
 ?>
 <div class="container" style="    margin-left: 184px;
    margin-top: -69px;">
  <section style="    margin-left: 29px;
    margin-top: -1px;">
	  <section id="produit" >
			<mark id="message" style="display: none;"></mark>
				<fieldset style="margin-top: -16px;margin-right: 12px;">
			
					<legend  style="    margin-bottom: -101px;
    font-size: 17px;
    font-weight: bold;
    font-family: cursive;">Participer maintenant- Ces enchéres vont bientôt se terminer</legend>
		
					
					<div  class="row" style="height: 1px;    padding: 11px;">
					
					<?php   foreach($prod = $ptMa->getListprotuct()->fetchall(PDO::FETCH_ASSOC) as $res1){ $i=1;?>
						<div  class="col-sm-6 col-md-4">
							<div class="thumbnail">
							<a id="iframe" href="image/<?= $res1['image'] ?>.jpg">
								<img src="image/<?= $res1['image'] ?>.jpg" alt=""  border="0" style="width: 120px;height:90px;">
							</a>								
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
			<input <?php  if (isset($_SESSION['login'])){?> onclick=show(<?php echo $res1['id_produit']; ?>)<?php }?> href="#"  id="showModal" name="popp"  class="btn btn-primary"  type="button" value="Enchère" style="padding: 7px 18px;background-color:#b20022; font-size: 14px;font-weight: bold; font-family: cursive;"/>
											
											<?php if (isset($_SESSION['login'])){?>
											<?php  echo "</p>";} ?>
											
 							
									</div>
							</div>
						</div>		
		  <script type="text/javascript">				
						
$(document).ready(function() {
    $("#iframe").fancybox({
        'width'             : '75%',
        'height'            : '75%',
        'autoScale'         : false,
        'transitionIn'      : 'elastic',
        'transitionOut'     : 'elastic',
        'type'              : 'iframe'
    });
});					
	</script>					
						<?php  } //fin foreach?>
				
			     	</div>
				</fieldset>
	  </section>
	    </div>
		
		
		<div id="modal2" class="modal">
        <div class="modal-dialog animated" style="width: 385px;">
            <div class="modal-content">
                <form class="form-horizontal" method="get">
                    <div class="modal-header">
                        <strong>Proposition d'un prix3</strong>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Prix proposé</label>
                            <div class="input-group col-xs-7">
                                <input type="text" name="dummyText" id="dummytext" class="form-control" value=""/>
								<input type="hidden" name="id_produit"	id="idproduit" value="">	

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" onclick="modal.close();">Annuler</button>
                        <button class="btn btn-primary" id="Sauvgarder" type="submit" onclick="modal.close();">Sauvgarder</button>
						
	  <script type="text/javascript">
	
	  $('#Sauvgarder').click(function(){
		 var texte=$("#dummytext").val();
		 var id_produit=$("#idproduit").val();
		 alert(texte);
		 alert(id_produit);
		 $.ajax({url:'../controller/PropostionControlleur.php?prix='+texte+'&id_produit='+id_produit});  
	  });
	  
	  </script>
		
                    </div>
                </form>
            </div>
        </div>
    </div>
	
		
	  <script type="text/javascript">


    var sTime = new Date().getTime();
    var countDown = 3; // Number of seconds to count down from.   avec 20 le nombre de min     

    function UpdateCountDownTime(x,y) {
		
        var cTime = new Date().getTime();
        var diff = cTime - sTime;
        var timeStr = '';
        var seconds = countDown - Math.floor(diff / 1000);
        if (seconds >= 0) {
            var hours = Math.floor(seconds / 3600);
            var minutes = Math.floor( (seconds-(hours*3600)) / 60);
            seconds -= (hours*3600) + (minutes*60);
            if( hours < 10 && hours > 0){
                timeStr = "0" + hours +"h";
				if( minutes < 10 ){
                timeStr = timeStr + ":0" + minutes +"min";
            }else{
                timeStr = timeStr + ":" + minutes +"min";
            }
            if( seconds < 10){
                timeStr = timeStr + ":0" + seconds +"sec";
            }else{
                timeStr = timeStr + ":" + seconds +"sec";
            }
            }
			else if(hours == 0){
				if( minutes < 10 ){
                timeStr = timeStr + "0" + minutes +"min";
            }else{
                timeStr = timeStr + "" + minutes +"min";
            }
            if( seconds < 10){
                timeStr = timeStr + ":0" + seconds +"sec";
            }else{
                timeStr = timeStr + ":" + seconds +"sec";
            }
			}else{
                timeStr = hours +"h";;
            }
           alert(x);
            document.getElementById("c"+x).innerHTML = x;
        }else{
			//document.getElementById("countdowntimertxt").style.display="none";
			 document.getElementById("countdowntimertxt").style.color="red";
			 document.getElementById("showModal").disabled ="enabled";
             document.getElementById("showModal").style.background='#2F4F4F';
			 document.getElementById("showModal").style.color='white';
			 document.getElementById("showModal").value="Vendue";
                        
			 
			 clearInterval(counter);
           
           
        }
    }
    UpdateCountDownTime(x,y);
    var counter = setInterval(UpdateCountDownTime, y);
    </script>
	<script type="text/javascript">
	 var modal
        window.onload = function() {
             modal = new RModal(document.getElementById('modal2'), {
     
            });

            document.addEventListener('keydown', function(ev) {
                modal.keydown(ev);
            }, false);
             /*
            document.getElementById('showModal').addEventListener("click", function(ev) {
                ev.preventDefault();
                modal.open();
				var current_id=$(this).attr('id');
				
				
				$( "#dummyText" ).blur(function() {
                alert( $(this).val());
               });
            }, false);
               */
			  /*  
			 $(event.target).find("p > input").click(function(){
		
				  
                modal.open();
				$(event.target).find("p > ").blur(function() {
                alert('fg');
               });
				
			  });
			   */
            window.modal = modal;
			 
			
			
        }
		 function show (id_produit){
			   alert(id_produit);
			    modal.open();
				
				document.getElementById("idproduit").value=id_produit;
 
			   }
    </script>

