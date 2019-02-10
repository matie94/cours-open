<?php
session_start();
?>


<!DOCTYPE html>
	<html lang="fr">
		<div id="page">
			<head>
	    		<meta charset="utf-8">
	    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    		<link rel="stylesheet" type="text/css" href="mini-chat.css">
	    		<title>mini-chat</title>
			</head>

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

			// Insertion du message à l'aide d'une requête préparée
			$req = $bdd->prepare('INSERT INTO messages (pseudo, message) VALUES(?, ?)');
			$req->execute(array($_POST['pseudo'], $_POST['message']));

			// Redirection du visiteur vers la page du minichat
			header('Location: mini-chat.php');
			?>



