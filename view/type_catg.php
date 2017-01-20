

<!DOCTYPE html>

<html>

<head>
  <title>Produit enchere</title>
  
  <meta charset="utf-8" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="js/rmodal.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>


<body>
<?php include('header.html');  ?>

	    <?php include('slidebarG.php'); ?>
	
<?php include('main_content1.php')?>
   <?php include('footer.php')?>
   
</body>
<script type="text/javascript">
        window.onload = function() {
            var modal = new RModal(document.getElementById('modal'), {
             /*   //content: 'Abracadabra'
                beforeOpen: function(next) {
                    console.log('beforeOpen');
                    next();
                }
                , afterOpen: function() {
                    console.log('opened');
                }

                , beforeClose: function(next) {
                    console.log('beforeClose');
                    next();
                }
                , afterClose: function() {
                    console.log('closed');
                }*/
     
            });

            document.addEventListener('keydown', function(ev) {
                modal.keydown(ev);
            }, false);

            document.getElementById('showModal').addEventListener("click", function(ev) {
                ev.preventDefault();
                modal.open();
            }, false);

            window.modal = modal;
        }
    </script>
</html>