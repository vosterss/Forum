<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_action_inscription.css" media="all"/>
		<title> Register </title>
	</head>
	<body>
		<?php
			require 'view/register/header_register.php';
		?>
		<main>
			<div class="register">
				<div class="titre_register">
					<h1 class="titre">Félicitation</h1>
				</div>
				<?php

					$surname = htmlspecialchars($_POST['surname']);
					$name = htmlspecialchars($_POST['name']);
					$username = htmlspecialchars($_POST['username']);
					$mail = htmlspecialchars($_POST['mail']);
					$mdp = md5 ($_POST['password']);
					$birthday = htmlspecialchars($_POST['birthday']);

					if (empty($surname)){
						echo "Le Prenom est obligatoire.";
						$erreur ++;
					}
					else if (empty($name)){
						echo "Le Nom de famille est obligatoire.";
						$erreur ++;
					}
					else if (empty($username)){
						echo "Le nom d'usage est obligatoire.";
						$erreur ++;
					}
					else if (empty($mail)){
						echo "Le mail est obligatoire.";
						$erreur ++;
					}
					else if (empty($mdp)){
						echo "Le mot de passe est obligatoire.";
						$erreur ++;
					}
					else if (empty($birthday)){
						echo "La Date de naissance est obligatoire.";
						$erreur ++;
					}
					$dsn='mysql:host=localhost;dbname=forum';
					$user='root' ;
					$password='' ;
					if($erreur < 0){
						try{
							$bdd = new PDO($dsn, $user, $password);
						}
						catch(PDOException $e){
							die ('erreur :' .$e->getMessage());
						}
						$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday) VALUES (?,?,?,?,?,?)') ;
						$reponse->execute(array($surname,$name,$username,$mail,$mdp,$birthday));
						echo '<p class="test">Bonjour</p> '.$surname. ' '. $name.' vous êtes désormais inscrit';
					}
					else{
						echo "Des champs n'ont pas été saisis";
					}
				?>
				<a href="index.php">
					<button class="form_input">
						Retourner à l'accueil
					</button>
				</a>
			</div>
		</main>
	</body>
</html>