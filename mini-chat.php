
<?php
session_start();
?>


<!DOCTYPE html>
	<html lang="fr">
		<div id="page">
			<head>
	    		<meta charset="utf-8">
	    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    		<link rel="stylesheet" type="text/css" href="minichat.css">
	    		<title>mini-chat</title>
			</head>

			<body>

				<header><!--barre de titre et déconnection-->
					<p>
						<h1>Le grand monde des chats</h1>
						Poils longs, poils courts, sans poils... Il y en a pour tous les goûts... <br>
						Et vous lequel est à votre goût?
					</p>

					<div>
						 <a href="deconnection-chat.php">déconnection</a>
					</div>
				</header>

				<aside>
					
				</aside>

				<div id="page-discussion">
		 			<div id="new-message">
		 				<form action="mini-chat-post.php" method="post">
		    			
		    				<h2>Participer au chat: Miaou</h2>
		    					<p>Votre pseudo : <br />
        							<input type="Text" name= "pseudo" value = <?php echo $_SESSION['pseudo'] ?> > 
        							<br />
 
   									Votre message : <br />
        							<input type="textarea" name="message"></input>
        							<br/>
		    					
		        					
		        					<input type="submit" name="Envoyer" value="Envoyer">
		        				</p>
		        		</form>
		    		</div>

		    		<div id="last-messages">

				       <?php
						// Connexion à la base de données
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
						}
						catch(Exception $e)
						{
						        die('Erreur : '.$e->getMessage());
						}

						// Récupération des 10 derniers messages
						$reponse = $bdd->query('SELECT pseudo, message,heure FROM messages ORDER BY ID DESC LIMIT 0, 10');
						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						$date = new DateTime($donnees['heure']);


						
						while ($donnees = $reponse->fetch())
						{
							echo $date->format('d-m-Y H:m'). '<strong> ' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
						}

						$reponse->closeCursor();

						?>


					</div>
				</div>
			</body>
		</div>
</html>
