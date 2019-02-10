<?php  
session_start();
?>
<!DOCTYPE html>
    <html lang="fr">
        
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="minichat.css">
                <title>connection minichat</title>
            </head>
            <body>
    <!--vérifier les droits d'accès et failles de sécurité du formulaire.-->
 <div id="page">
                <form action="backchat.php" method="post"><!--Envoie vers page php pour controle sécurité-->
    	
                    <div class="formulaire">
    		          <h1>Veuillez-vous connecter pour participer</h1>
                    	<div>
                            <p>Votre pseudo : </p> <br /> 
                            <input type="pseudo" id="pseudo" name="pseudo">
                            <p>Votre mot de passe : </p> <br /> 
                        	<input type="password" name="password">
                        	<input type="submit" name="Valider" value="Entrer dans la discussion">

                        </div>
                    </div>
                </form> 
                 </div>
            </body>
       
</html>

<?php


