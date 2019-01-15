<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>formulaire</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="secret.css" />
        </head>
        <body>
        <p class="presentation"> <h1> Site de la NASA </h1><br>
        	Site de la nullité acceptée sans apprentissage.<br><br><br><br>
        	
        	<?php 
            
                if (isset($_POST['password']) AND $_POST['password'] ==  "Guigui")
                  {echo "Bravo! La folie est acceptée";} 
                    
             	else
                {echo "<p>Le code entré est incorrect. Veuillez vérifier vos droits pour accèder à ce site</p>";}
            ?>