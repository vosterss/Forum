<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_register.css" media="all"/>
		<title> Register </title>
	</head>
	<body>
		<h1 class="titre">Félicitation</h1>
		<?php

			$surname = htmlspecialchars($_POST['surname']);
			$name = htmlspecialchars($_POST['name']);
			$username = htmlspecialchars($_POST['username']);
			$mail = htmlspecialchars($_POST['mail']);
			$mdp = md5 ($_POST['password']);
			$birthday = htmlspecialchars($_POST['birthday']);

			if (empty($surname)){
				echo "Le Prenom est obligatoire.";
			}
			else if (empty($name)){
				echo "Le Nom de famille est obligatoire.";
			}
			else if (empty($username)){
				echo "Le nom d'usage est obligatoire.";
			}
			else if (empty($mail)){
				echo "Le mail est obligatoire.";
			}
			else if (empty($mdp)){
				echo "Le mot de passe est obligatoire.";
			}
			else if (empty($birthday)){
				echo "La Date de naissance est obligatoire.";
			}
			$dsn='mysql:host=localhost;dbname=forum';
			$user='root' ;
			$password='' ;
			try{
				$bdd = new PDO($dsn, $user, $password);
			}
			catch(PDOException $e){
				die ('erreur :' .$e->getMessage());
			}
			$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday) VALUES (?,?,?,?,?,?)') ;
			$reponse->execute(array($surname,$name,$username,$mail,$mdp,$birthday));
			echo '<p>Bonjour</p> '.$surname. ' '. $name.' vous êtes désormais inscrit';
			$reponse2=$bdd->execute('CREATE USER ' .$username. "@'localhost' IDENTIFIED BY " .$mdp. ';') ;


		?>
		<a href="index.php">
			<button>
				Retourner à l'accueil
			</button>
		</a>
	</body>
</html>