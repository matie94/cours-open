<?php  
session_start();
if($pseudo = true){
$_SESSION['pseudo'] = $_POST['pseudo'];}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,escale=1.0">
	<title>vérification des informations du formulaire</title>
</head>
<body>
	<?php #ATTENTION AUX INFORMATIONS RECUES
	 if (isset($_POST['pseudo']) AND $_POST['password'] ==  "123")
		{ header ('location: mini-chat.php');
		}
	if (empty($_POST['pseudo']) OR $_POST['password']!= "123") 
		{ header ('location: connection-chat.php');
		}

		 ?>

</body>
</html>